<?php

// Register the options page
function beryllium_quiz_entries_menu() {
	add_menu_page(
		'Quiz Entries',
		'LLM Quiz Entries',
		'manage_options',
		'beryllium-quiz-entries',
		'beryllium_quiz_entries_page',
		'dashicons-list-view',
		20
	);
}

add_action( 'admin_menu', 'beryllium_quiz_entries_menu' );

// Display the options page content
function beryllium_quiz_entries_page() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'beryllium_quiz_entries';

	if ( isset( $_POST['delete_entries'] ) ) {
		$ids_to_delete = $_POST['entry_ids'];
		if ( ! empty( $ids_to_delete ) ) {
			foreach ( $ids_to_delete as $id ) {
				$wpdb->delete( $table_name, [ 'id' => intval( $id ) ] );
			}
			echo '<div class="updated"><p>Selected entries deleted.</p></div>';
		}
	}

	$entries = $wpdb->get_results( "SELECT * FROM $table_name" );

	?>
	<div class="wrap">
		<h1>Quiz Entries</h1>
		<form method="post" action="">
			<table class="widefat fixed" cellspacing="0">
				<thead>
				<tr>
					<th class="manage-column column-cb check-column" scope="col"><input type="checkbox"/></th>
					<th>ID</th>
					<th>Quiz Name</th>
					<th>Quiz ID</th>
					<th>User Answers</th>
					<th>Company Name</th>
					<th>Email</th>
					<th>Created At</th>
					<th>LLM Response</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ( $entries as $entry ) : ?>
					<tr>
						<th class="check-column" scope="row">
							<input type="checkbox" name="entry_ids[]" value="<?php echo esc_attr( $entry->id ); ?>"/>
						</th>
						<td><?php echo esc_html( $entry->id ); ?></td>
						<td><?php echo esc_html( $entry->quiz_name ); ?></td>
						<td><?php echo esc_html( $entry->quiz_id ); ?></td>
						<td><?php echo esc_html( $entry->user_answers ); ?></td>
						<td><?php echo esc_html( $entry->company_name ); ?></td>
						<td><?php echo esc_html( $entry->email ); ?></td>
						<td><?php echo esc_html( $entry->created_at ); ?></td>
						<td>
							<?php if (!empty($entry->llm_response)) { ?>
								<div class="llm-response-container">
									<?php echo esc_html( $entry->llm_response ); ?>
								</div>
							<?php } ?>
						</td>
						<td>
							<a href="#" class="delete-entry" data-id="<?php echo esc_attr( $entry->id ); ?>" style="color: #e73535;">
								<i class="fas fa-trash-alt"></i> Delete / Deny ?
							</a>
							|
							<a href="#" class="email-preview" data-response="<?php echo esc_attr( $entry->llm_response ); ?>">
								<i class="fa-regular fa-eye"></i> Email Preview ?
							</a>
							|
							<a href="#" class="email-preview" data-response="<?php echo esc_attr( $entry->llm_response ); ?>">
								<i class="fas fa-envelope"></i> Send?
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<p class="submit">
				<input type="submit" name="delete_entries" class="button button-primary" value="Delete Selected"/>
			</p>
		</form>
	</div>
	<style>
        .llm-response-container {
            max-height: 100px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 5px;
        }
	</style>

	<script type="text/javascript">
      jQuery(document).ready(function($) {
        $('.delete-entry').on('click', function(e) {
          e.preventDefault();
          var entryId = $(this).data('id');
          $('input[name="entry_ids[]"][value="' + entryId + '"]').prop('checked', true);
          $('form').submit();
        });

        $('.email-preview').on('click', function(e) {
          e.preventDefault();
          var response = $(this).data('response');
          if (response) {
            var textResponse = response?.Response?.outputs?.text ?? "No response found.";
            var emailContent = `
                    <h2>Test Email Preview</h2>
                    <p>Dear [Company Name],</p>
                    <p>${textResponse}</p>
                    <p>Best regards,<br>Your Company</p>
                `;
            var emailWindow = window.open("", "Email Preview", "width=600,height=400");
            emailWindow.document.write(emailContent);
          } else {
            alert('No LLM response available to preview.');
          }
        });
      });
	</script>
	<?php
}
