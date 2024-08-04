<?php
function engine_response( $request ): WP_REST_Response {
	global $wpdb;

	// Sanitize input
	$quiz_name    = sanitize_text_field( $request->get_param( 'quiz_name' ) );
	$user_answers = sanitize_text_field( $request->get_param( 'user_answers' ) ); // Assuming this is a JSON string
	$company_name = sanitize_text_field( $request->get_param( 'company_name' ) );
	$email        = sanitize_email( $request->get_param( 'email' ) );

	// Create table if it doesn't exist
	$table_name = $wpdb->prefix . 'beryllium_quiz_entries';

	if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) != $table_name ) {
		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			quiz_name varchar(255) NOT NULL,
			user_answers text NOT NULL,
			company_name varchar(255) NOT NULL,
			email varchar(255) NOT NULL,
			created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
			PRIMARY KEY  (id)
		) CHARACTER SET utf8 COLLATE utf8_general_ci;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}

	// Check for duplicate entry
	$query = $wpdb->prepare(
		"SELECT COUNT(*) FROM $table_name WHERE quiz_name = %s AND user_answers = %s AND company_name = %s AND email = %s",
		$quiz_name, $user_answers, $company_name, $email
	);
	$existing_entry = $wpdb->get_var( $query );

	if ( $existing_entry > 0 ) {
		$response    = [
			'status'  => 'error',
			'message' => 'Duplicate entry exists.',
		];
		$status_code = 409; // Conflict
		return new WP_REST_Response( $response, $status_code );
	}

	// Insert data into the database
	$inserted = $wpdb->insert(
		$table_name,
		[
			'quiz_name'    => $quiz_name,
			'user_answers' => $user_answers,
			'company_name' => $company_name,
			'email'        => $email,
		],
		[
			'%s',
			'%s',
			'%s',
			'%s'
		]
	);

	if ( $inserted ) {
		$response    = [
			'status'  => 'ok',
			'message' => 'Your data has been received.',
		];
		$status_code = 200;
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
