<?php
/*
 * Template Name: Job Application
 */

$job_slug = isset($_GET['job']) ? sanitize_text_field($_GET['job']) : '';

// Validate the slug (you might want to add additional validation based on your requirements)
if (strlen($job_slug) === 0) {
	global $wp_query;
	$wp_query->set_404();
	status_header(404);
	header('Location: '. get_site_url() . '/error');
	exit;
}

get_header();

include 'template-parts/preloader.php';
include 'template-parts/navigation.php';
?>

	<div class="careers">
		<div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.75);">
			<div class="container">
				<div class="row careers-row">
					<div class="col-12 col-lg-6 mt-5">
						<div class="w-100">
							<img class="careers-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/text-logo-horizontal-black.svg"/>

							<?php echo do_shortcode('[contact-form-7 id="be17b9e" title="Job Application"]')?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    function getQueryParameter(name) {
      name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
      var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
      var results = regex.exec(location.search);
      return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Get the query parameter 'job' and populate the hidden field
    var jobTitle = getQueryParameter('job');

    if (jobTitle) {
      document.getElementById('job-title').value = jobTitle;
    }

    const jobForm = document.querySelector('.wpcf7-form');
    jobForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission

      // Collect form data
      const formData = new FormData(jobForm);

      // Send form data using Fetch API
      fetch(jobForm.action, {
        method: 'POST',
        body: formData,
      })
      .then(response => {
        if (response.ok) {
          // send user to thank you page
          window.location.href = '/thank-you';
        } else {
          // send user to error page
          window.location.href = '/error';
        }
      })
      .catch(error => {
        console.error('An error occurred:', error);
        // send user to error page
      });
    });
  });
</script>

<?php
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();
?>