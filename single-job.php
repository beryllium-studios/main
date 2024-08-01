<?php
/**
 * The single page for job listings
 *
 * @package beryllium
 */
?>

<?php get_header();
include 'template-parts/preloader.php';
include 'template-parts/navigation.php';

/*
 * $fields array contains the following keys:
 *  - job_title: The title of the job position
 *  - location: The location of the job, can be remote or specific address
 *  - work_schedule: The type of work schedule (e.g., full-time, part-time, contract)
 *  - job_description: A detailed description of the job position
 *  - experience: The required experience for the job position
 *  - required_qualifications: The mandatory qualifications needed for the job
 *  - preferred_qualifications: The preferred qualifications that are nice to have
 *  - salary: The salary range or specific amount for the job position
 *  - application_deadline: The deadline for applying to the job position
 *  - contact_information: The contact information for inquiries and applications
 */
$fields = get_fields();

?>


	<div class="careers">
		<div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.75);">
			<div class="container">
				<div class="row careers-row">
					<div class="col-12 col-lg-12 d-flex justify-content-center mt-5">
						<div class="banner-text-left">
							<img class="careers-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/text-logo-horizontal-black.svg"/>
						</div>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-12">
						<h1 class="text-center"><?php echo $fields['job_title']; ?></h1>
						<p class="text-center"><strong>Location:</strong> <?php echo $fields['location']; ?></p>
						<p class="text-center"><strong>Work Schedule:</strong> <?php echo $fields['work_schedule']; ?></p>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-12">
						<h3>Job Description</h3>
						<p><?php echo $fields['job_description']; ?></p>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-12">
						<h3>Experience</h3>
						<p><?php echo $fields['experience']; ?></p>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-12">
						<h3>Required Qualifications</h3>
						<p><?php echo $fields['required_qualifications']; ?></p>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-12">
						<h3>Preferred Qualifications</h3>
						<p><?php echo $fields['preferred_qualifications']; ?></p>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-12">
						<h3>Salary</h3>
						<p><?php echo $fields['salary']; ?></p>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-12">
						<h3>Application Deadline</h3>
						<p>Open pool - no set deadline.</p>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-12 text-center">
						<a href="/careers/apply?job=<?php echo get_post_field( 'post_name', get_post() ); ?>" class="btn yellow-and-black-btn contact_btn mt-5">Apply for this
							job</a>
					</div>
				</div>

			</div>
		</div>
	</div>


<?php
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();
?>