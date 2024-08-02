<?php 
/* 
  * Template Name: Careers Page
*/

?>

<?php get_header();
include 'template-parts/preloader.php';
include 'template-parts/navigation.php';
?>


	<div class="careers">
		<div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.75);">
			<div class="container">
				<div class="row careers-row">
					<div class="col-12 col-lg-12 d-flex justify-content-center mt-5">
						<div class="banner-text-left">
							<img class="careers-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/text-logo-horizontal-black.svg" />
							<h2>Join Our Team</h2>
							<p>At Beryllium Studios, LLC, we specialize in AI integration for small to medium-sized businesses (SMBs). Our mission is to simplify AI adoption, offering tailored solutions and prototypes. Our vision is to be the go-to firm for seamless, efficient AI integration, and our goal is to help SMBs achieve AI integration suitable for client’s needs.</p>
						</div>
					</div>
					<div class="col-12 col-lg-12 d-flex justify-content-center mt-5">
						<div class="banner-text-left">
							<h2>Our Value</h2>
							<p>We pride ourselves on our innovative approach and our strong relationships with clients. Our team of engineers brings a unique set of skills in AI, software engineering, data analytics, and cloud computing, allowing us to deliver comprehensive solutions. Our personalized and scalable AI integrations provide SMBs with the tools they need to drive growth and stay competitive. We maintain good standing with our clients by ensuring high-quality deliverables and excellent customer service.</p>
						</div>
					</div>
					<div class="col-12 col-lg-12 d-flex justify-content-center mt-5">
						<div class="banner-text-left">
							<h2>Why Work with Us?</h2>
							<ul class="why-work-with-us">
								<li>
									<p><strong>Innovation</strong></br><span> Be part of a team that's at the forefront of AI integration, delivering cutting-edge solutions to SMBs.</p>
								</li>
								<li>
									<p><strong>Collaboration</strong></br><span> Work in an environment where every team member's expertise is valued and contributes to our succes.</p>
								</li>
								<li>
									<p><strong>Impact</strong></br><span> Help businesses unlock their potential with AI, driving meaningful change and growth in various industries, including healthcare, financial services, retail, and e-commerce.</p>
								</li>
								<li>
									<p><strong>Agility</strong></br><span> Our smaller size and specialized focus give us an edge over larger firms, allowing us to be more flexible and responsive to our clients' needs.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--About Start-->
	<section class="about-sec" id="about-sec">
		<div class="container">
			<div class="row careers-join-row">
				<!-- Heading Area-->
				<div class="col-lg-12 wow fadeInUp">
					<div class="service-details">
						<h1>Who We Are Looking For</h1>
						<p class="margin-top-10">We are seeking talented engineers who are passionate about AI/ML, eager to learn, and ready to take on new challenges. If you are a team player who thrives in a collaborative environment and wants to make a significant impact in the AI field, we would love to hear from you.</p>
					</div>
				</div>
			</div>
      <div class="row careers-join-row">
        <div class="col-lg-12 wow fadeInUp">
					<div class="service-details">
						<p>At <strong>Beryllium Studios</strong> you'll be part of a dynamic team that values innovation, collaboration, and client satisfaction. Together, we'll help businesses harness the power of AI and achieve their goals.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About End-->

	<div class="container mt-5 mb-5">
		<h1 class="text-center">Job Listings</h1>
		<div class="row">

			<?php
			$args = array(
				'post_type'      => 'job',
				'posts_per_page' => - 1
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$fields = get_fields();
					?>
					<div class="col-md-4 mt-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title"><?php the_title(); ?></h5>
								<?php if ( $fields['location'] ): ?>
									<p class="card-text"><strong>Location:</strong> <?php echo ucfirst(esc_html( $fields['location'] )); ?></p>
								<?php endif; ?>
								<?php if ( $fields['work_schedule'] ): ?>
									<p class="card-text"><strong>Type:</strong> <?php echo ucfirst(esc_html( $fields['work_schedule'] )); ?></p>
								<?php endif; ?>
								<a href="<?php the_permalink(); ?>" class="btn yellow-and-black-btn">View Job</a>
							</div>
						</div>
					</div>
					<?php
				}
			} else {
				echo '<p>No available positions.</p>';
			}

			// Restore original Post Data
			wp_reset_postdata();
			?>
		</div>
	</div>
<?php
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();
?>