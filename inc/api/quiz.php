<?php

function engine_response( $request ): WP_REST_Response {
	global $wpdb;

	// Enable WP_DEBUG_LOG if not already enabled
	// TODO: Remove logging once this feature has been completed
	if ( ! defined( 'WP_DEBUG' ) ) {
		define( 'WP_DEBUG', true );
	}
	if ( ! defined( 'WP_DEBUG_LOG' ) ) {
		define( 'WP_DEBUG_LOG', true );
	}

	// Sanitize input
	$quiz_name    = sanitize_text_field( $request->get_param( 'quiz_name' ) );
	$quiz_id      = sanitize_text_field( $request->get_param( 'quiz_id' ) );
	$user_answers = $request->get_param( 'user_answers' );
	$company_name = sanitize_text_field( $request->get_param( 'company_name' ) );
	$email        = sanitize_email( $request->get_param( 'email' ) );

	// Log sanitized inputs
	error_log( "Sanitized inputs: quiz_name=$quiz_name, quiz_id=$quiz_id, company_name=$company_name, email=$email" );

	// Create table if it doesn't exist
	$table_name = $wpdb->prefix . 'beryllium_quiz_entries';

	if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) != $table_name ) {
		$sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            quiz_name varchar(255) NOT NULL,
            quiz_id varchar(255) NOT NULL,
            user_answers text NOT NULL,
            company_name varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            llm_response text,
            PRIMARY KEY  (id)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}

	// Insert data into the database
	$inserted = $wpdb->insert(
		$table_name,
		[
			'quiz_name'    => $quiz_name,
			'quiz_id'      => $quiz_id,
			'user_answers' => $user_answers,
			'company_name' => $company_name,
			'email'        => $email,
		],
		[
			'%s',
			'%s',
			'%s',
			'%s',
			'%s'
		]
	);

	// Log insertion result
	if ( false === $inserted ) {
		error_log( 'Error inserting data: ' . $wpdb->last_error );
	} else {
		error_log( 'Data inserted successfully' );
	}

	if ( $inserted ) {
		// Prepare data for the POST request to the secondary API
		$post_data = array(
			'quiz_name'    => $quiz_id,
			'user_answers' => json_decode( $user_answers, false ), // Decode JSON to array
			'company_name' => $company_name
		);

		// Log the post data
		error_log( 'Post data: ' . print_r( $post_data, true ) );

		error_log( 'DATA BEING SENT: ' . json_encode( $post_data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) );

		$response = wp_remote_post( 'https://quiz.berylliumstudios.com/quiz-response', array(
			'method'  => 'POST',
			'body'    => json_encode( $post_data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ),
			'headers' => array(
				'accept'       => 'application/json',
				'Content-Type' => 'application/json',
			),
		) );

		if ( is_wp_error( $response ) ) {
			error_log( 'WP Remote Post Error: ' . $response->get_error_message() );
		} else {
			$response_body = wp_remote_retrieve_body( $response );
		}

		// Update the database with the response from the secondary API
		$wpdb->update(
			$table_name,
			array( 'llm_response' => $response_body ),
			array( 'id' => $wpdb->insert_id ),
			array( '%s' ),
			array( '%d' )
		);

		$response = [
			'status'  => 'ok',
			'message' => 'Data processed successfully'
		];

		$status_code = 200;

		if ( $wpdb->last_error ) {
			error_log( 'Error updating data: ' . $wpdb->last_error );
		} else {
			error_log( 'Data updated successfully' );
		}
	} else {
		$response    = [
			'status'  => 'error',
			'message' => 'There was an error saving your data.',
		];
		$status_code = 500;
	}

	return new WP_REST_Response( $response, $status_code );
}

function engine_query_args(): array {
	$args = [];

	$args['company_name'] = [
		'description'       => esc_html__( 'Customer company name', 'beryllium' ),
		'type'              => 'string',
		'required'          => true,
		'validate_callback' => function ( $param, $request, $key ) {
			return is_string( $param ) && ! empty( $param );
		},
		'sanitize_callback' => 'sanitize_text_field',
	];

	$args['quiz_name'] = [
		'description'       => esc_html__( 'Name of quiz for identification purposes', 'beryllium' ),
		'type'              => 'string',
		'required'          => true,
		'validate_callback' => function ( $param, $request, $key ) {
			return is_string( $param ) && ! empty( $param );
		},
		'sanitize_callback' => 'sanitize_text_field',
	];

	$args['quiz_id'] = [
		'description'       => esc_html__( 'API name of quiz for identification purposes', 'beryllium' ),
		'type'              => 'string',
		'required'          => true,
		'validate_callback' => function ( $param, $request, $key ) {
			return is_string( $param ) && ! empty( $param );
		},
		'sanitize_callback' => 'sanitize_text_field',
	];

	$args['user_answers'] = [
		'description'       => esc_html__( 'JSON string of answers for quiz', 'beryllium' ),
		'type'              => 'string',
		'required'          => true,
		'validate_callback' => function ( $param, $request, $key ) {
			return is_string( $param ) && ! empty( $param );
		},
		'sanitize_callback' => 'sanitize_text_field',
	];

	$args['email'] = [
		'description'       => esc_html__( 'Email address for customer taking the quiz', 'beryllium' ),
		'type'              => 'string',
		'required'          => true,
		'validate_callback' => function ( $param, $request, $key ) {
			return is_email( $param );
		},
		'sanitize_callback' => 'sanitize_email',
	];

	return $args;
}

function quiz_engine(): void {
	register_rest_route( '/v1/api', '/quiz', [
		'methods'  => WP_REST_Server::CREATABLE,
		'callback' => 'engine_response',
		'args'     => engine_query_args(),
	] );
}

add_action( 'rest_api_init', 'quiz_engine' );
