<?php get_header();
include 'template-parts/preloader.php';
include 'template-parts/navigation.php';

/*
 * - name (string): The name of the staff member (e.g., Andy Mendez)
 * - professional_title (string): The professional title of the staff member (e.g., Software Engineer)
 * - profile_image (string): URL to the profile image of the staff member
 * - github_profile (string): URL to the GitHub profile of the staff member (e.g., https://www.github.com)
 * - linkedin_profile (string): URL to the LinkedIn profile of the staff member (e.g., https://www.linkedin.com)
 * - website (string): URL to the personal website of the staff member (e.g., https://www.example.com)
 * - x_profile (string): URL to the X (formerly Twitter) profile of the staff member (e.g., https://www.x.com)
 * - blurb (string): A brief description or blurb about the staff member
 */
$fields = get_fields();
?>

	<div class="container staff mt-5">
		<div class="profile-card text-center">
			<img src="<?php echo $fields['profile_image']; ?>" alt="Staff Member Photo">
			<h2 class="mt-3"> <?php echo $fields['name']; ?> </h2>
			<h5 class="text-muted"> <?php echo $fields['professional_title']; ?> </h5>
			<div class="social-links mt-3">
				<?php if ( ! empty( $fields['linkedin_profile'] ) ): ?>
					<a href="<?php echo esc_url( $fields['linkedin_profile'] ); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
				<?php endif; ?>
				<?php if ( ! empty( $fields['github_profile'] ) ): ?>
					<a href="<?php echo esc_url( $fields['github_profile'] ); ?>" target="_blank"><i class="fab fa-github"></i></a>
				<?php endif; ?>
				<?php if ( ! empty( $fields['x_profile'] ) ): ?>
					<a href="<?php echo esc_url( $fields['x_profile'] ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
				<?php endif; ?>
			</div>
			<div class="mt-5 mb-lg-5 text-left"><?php echo $fields['blurb']; ?></div>
		</div>
	</div>

<?php
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();
