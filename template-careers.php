<?php 
/* 
  * Template Name: Careers Page
  * description: >- 
  Page template without sidebar 
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

	<!--About Star-->
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

	<!--Skill section start-->
	<section class="skill-sec" id="skill-sec">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 text-left text-lg-left">
					<div class="careers-position-details">
						<h2>Open Positions</h2>
						<p>No available positions.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Skill section end -->

<?php
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();
?>