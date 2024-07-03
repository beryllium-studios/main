<?php 
/* 
  * Template Name: Careers Page
  * description: >- 
  Page template without sidebar 
*/

?>

<?php get_header(); ?>

<?php
include 'template-parts/preloader.php';
include 'template-parts/navigation.php';
?>



	<div class="banner parallax">
		<div class="container">
			<div class="row banner-row">
				<div class="col-12 col-lg-12 d-flex justify-content-center justify-content-lg-center align-items-end">
					<div class="banner-text-left">
						<h2>Join Our Team at Beryllium Studios, LLC</h2>
						<p>At Beryllium Studios, LLC, we specialize in AI integration for small to medium-sized businesses (SMBs). Our mission is to simplify AI adoption, offering tailored solutions and prototypes. Our vision is to be the go-to firm for seamless, efficient AI integration, and our goal is to help SMBs achieve AI integration suitable for client’s needs.</p>
					</div>
				</div>
        <div class="col-12 col-lg-12 d-flex justify-content-center justify-content-lg-center align-items-center">
					<div class="banner-text-left">
						<h2>Our Value</h2>
						<p>We pride ourselves on our innovative approach and our strong relationships with clients. Our team of engineers brings a unique set of skills in AI, software engineering, data analytics, and cloud computing, allowing us to deliver comprehensive solutions. Our personalized and scalable AI integrations provide SMBs with the tools they need to drive growth and stay competitive. We maintain good standing with our clients by ensuring high-quality deliverables and excellent customer service.</p>
					</div>
				</div>
        <div class="col-12 col-lg-12 d-flex justify-content-center justify-content-lg-center">
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

	<!--About Star-->
	<section class="about-sec" id="about-sec">
		<svg id="about-header-svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#e8d716" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#e8d716" stroke-width="0"/>
		</svg>
		<div class="container">
			<div class="row careers-join-row">
				<!-- Heading Area-->
				<div class="col-lg-12 wow fadeInUp">
					<div class="service-details">
						<h1>Who We Are Looking For</h1>
						<p class="margin-top-10">We are seeking talented individuals who are passionate about AI/ML, eager to learn, and ready to take on new challenges. If you are a team player who thrives in a collaborative environment and wants to make a significant impact in the AI field, we would love to hear from you.</p>
					</div>
				</div>
			</div>
      <div class="row careers-join-row">
        <div class="col-lg-12 wow fadeInUp">
					<div class="service-details">
						<h1>Join Us</h1>
						<p>At Beryllium Studios, LLC, you'll be part of a dynamic team that values innovation, collaboration, and client satisfaction. Together, we'll help businesses harness the power of AI and achieve their goals.</p>
					</div>
				</div>
			</div>
		</div>
		<svg id="banner_svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
			<img src="<?php echo get_template_directory_uri(); ?>/img/pot.png" class="wow slideInLeft" data-wow-delay="1s" alt="plant">
		</svg>
	</section>
	<!--About End-->

	<!--Skill section start-->
	<section class="skill-sec" id="skill-sec">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7 offset-lg-5 text-left text-lg-left">
					<div class="skill-details">
						<h2 class="title">Open Positions</h2>
            <!-- Show no available positions or a list of open positions -->
            <!-- show a list of open positions -->
            <!-- Make open positions clickable and link to job description -->
						<h4>No available positions.</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Skill section end -->

	<!--Footer Start-->
	<footer class="footer-style-1">

		<div class="container">
			<div class="row align-items-center">
				<!--Social-->
				<div class="col-lg-6">
					<div class="footer-social text-center text-lg-left ">
						<ul class="list-unstyled">
							<li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
							<li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
							<li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-google-plus-g"></i></a></li>
							<li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a></li>
							<li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
							<li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-pinterest-p"></i></a></li>
						</ul>
					</div>
				</div>
				<!--Text-->
				<div class="col-lg-6 text-center text-lg-right">
					<p class="company-about fadeIn">&copy; 2023 MegaOne. Made With Love By <a href="javascript:void(0);">Themesindustry</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--Footer End-->

	<div class="fixed-nav-on-scroll fixed-nav-appear d-none">
		<div class="row no-gutters">
			<div class="col-12 d-flex justify-content-center align-items-center">
				<div class="logo-fixed-scroll">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo">
				</div>
				<div class="fixed-icon-scroll">
					<a href="javascript:void(0)" id="sidemenu_toggle1"><i class="lni lni-menu"></i></a>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>