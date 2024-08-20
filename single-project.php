<?php get_header();
include 'template-parts/preloader.php';
include 'template-parts/navigation.php';

/*
 * $fields array contains the following keys:
 *  - public_title: The public title of the case study
 *  - public_subheadline: The public subheadline of the case study
 *  - client: The name of the client for the case study
 *  - type: The type of project (e.g., Startup, SaaS, Web App)
 *  - url: The URL to the project site
 *  - challenge: The challenges faced in the project
 *  - project_goals: The goals set for the project
 *  - solution: The solutions implemented to meet the project goals
 *  - results: The results achieved from the project
 */
$fields = get_fields();

?>

	<article class="case-study-article article">
		<div class="container">
			<h1 class="project-title text-center"><?php echo $fields['public_title']; ?></h1>
			<h2 class="project-type text-center"><?php echo $fields['public_subheadline']; ?></h2>
			<div class="row">
				<div class="content-wrapper col-lg-12 col-12 mt-5">
					<ul class="meta list-unstyled">
						<li class="mb-2"><strong class="me-1">Client:</strong> <?php echo $fields['client']; ?></li>
						<li class="mb-2"><strong class="me-1">Project Type:</strong> <?php echo $fields['type']; ?></li>
						<?php if ( strlen( $fields['url'] ) !== 0 ) { ?>
							<li><strong class="me-1">Site link: </strong>
								<a class="text-link"
								   href="<?php echo $fields['url']; ?>"
								   target="_blank">Visit</a>
							</li>
						<?php } ?>

					</ul>
					<div class="content">
						<?php if ( ! empty( get_the_content() ) ) { ?>
							<section class="content-section">
								<?php echo get_the_content(); ?>
							</section>
						<?php } ?>
						<?php if ( ! empty( $fields['challenge'] ) ): ?>
							<section class="content-section">
								<h3 class="section-title">Challenge</h3>
								<p><?php echo $fields['challenge']; ?></p>
							</section>
						<?php endif; ?>

						<?php if ( ! empty( $fields['project_goals'] ) ): ?>
							<section class="content-section">
								<h3 class="section-title">Project Goals</h3>
								<?php echo $fields['project_goals']; ?>
							</section>
						<?php endif; ?>

						<?php if ( ! empty( $fields['solution'] ) ): ?>
							<section class="content-section">
								<h3 class="section-title">Our Solution</h3>
								<?php echo $fields['solution']; ?>
							</section>
						<?php endif; ?>

						<?php if ( ! empty( $fields['results'] ) ): ?>
							<section class="content-section">
								<h3 class="section-title">Results</h3>
								<?php echo $fields['results']; ?>
							</section>
						<?php endif; ?>

						<?php include 'template-parts/cta-call.php'; ?>
					</div>

				</div>
			</div>
		</div>
	</article>


<?php
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();
?>