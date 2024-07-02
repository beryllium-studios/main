<?php get_header(); ?>

<?php
include 'template-parts/preloader.php';
include 'template-parts/navigation.php';
?>



	<div class="banner parallax">
		<div class="container-fluid">
			<div class="row banner-row">
				<div class="col-12 col-lg-7 d-flex justify-content-center justify-content-lg-end align-items-center text-center text-lg-right">
					<div class="banner-text-left wow fadeInLeft" data-depth="0.1">
						<h1>WE MAKE</h1>
						<p>Beautiful & Responsive</p>
					</div>
				</div>
				<div class="col-12 col-lg-5 d-flex align-items-center">
					<div class="banner-text-right wow fadeInRight" data-depth="0.1">
						<div class="overlay-yellow-box"></div>
						<div class="banner-right-area-content">
							<h2>Creative<span class="main-bold-text"> WEBSITE</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. </p>
							<a href="javascript:void(0);" class="btn btn-large btn-rounded white-tran-black-btn">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<svg id="banner_svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
		</svg>
	</div>

	<!--About Star-->
	<section class="about-sec" id="about-sec">
		<svg id="about-header-svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#e8d716" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#e8d716" stroke-width="0"/>
		</svg>
		<div class="container">
			<div class="row">
				<!-- Heading Area-->
				<div class="col-lg-5 wow fadeInUp">
					<div class="service-details">
						<h1>WE ARE</h1>
						<h1><span>DIGITAL</span> AGENCY</h1>
						<p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and design.</p>
						<a href="javascript:void(0);" class="btn btn-large btn-rounded btn-black-white-background mr-2 mt-2">Learn More</a>
					</div>
				</div>

				<!-- Features Box-->
				<div class="col-lg-7">
					<div class="services-area-width-manage">
						<div class="row no-gutters services-area">
							<div class="col-12 col-md-6 services text-center">
								<div class="service-card wow fadeInRight">
									<div class="icon-holder">
										<i class="lni lni-briefcase"></i>
									</div>
									<h4 class="card-heading">Make Business</h4>
								</div>
							</div>
							<div class="col-12 col-md-6 services text-center">
								<div class="service-card wow fadeInRight">
									<div class="icon-holder">
										<i class="lni lni-bulb"></i>
									</div>
									<h4 class="card-heading">Agency Ideas</h4>
								</div>
							</div>
							<div class="col-12 col-md-6 services text-center">
								<div class="service-card wow fadeInRight" data-wow-delay=".5s">
									<div class="icon-holder">
										<i class="lni lni-heart"></i>
									</div>
									<h4 class="card-heading">Our Hardwork</h4>
								</div>
							</div>
							<div class="col-12 col-md-6 services text-center">
								<div class="service-card wow fadeInRight" data-wow-delay=".5s">
									<div class="icon-holder">
										<i class="lni lni-wallet"></i>
									</div>
									<h4 class="card-heading">Make Money</h4>
								</div>
							</div>
						</div>
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
				<div class="col-12 col-lg-7 offset-lg-5 text-center text-lg-right">
					<div class="skill-details">
						<h6 class="sub-title main-color">Lorem ipsum is simply dummy text</h6>
						<h2 class="title">Agency Stats & Facts </h2>
						<p class="paragraph">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting.</p>
					</div>
				</div>
				<div class="col-12">
					<div class="skill-bars">
						<ul class="text-left list-unstyled">
							<!--Progress Bar-->
							<li class="progress-item wow fadeInLeft">
								<h6>Designing</h6>
								<div class="progress bar" data-width="79%">
									<div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"> <span>79%<i class="fas fa-caret-down"></i></span></div>
								</div>
							</li>
							<!--Progress Bar-->
							<li class="progress-item wow fadeInRight" data-wow-delay=".5s">
								<h6>Elevation</h6>
								<div class="progress bar" data-width="95%">
									<div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"><span>95%<i class="fas fa-caret-down"></i></span></div>
								</div>
							</li>
							<!--Progress Bar-->
							<li class="progress-item wow fadeInLeft" data-wow-delay=".6s">
								<h6>Sketching</h6>
								<div class="progress bar" data-width="87%">
									<div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"><span>87%<i class="fas fa-caret-down"></i></span></div>
								</div>
							</li>
							<!--Progress Bar-->
							<li class="progress-item wow fadeInRight" data-wow-delay=".7s">
								<h6>Strategy</h6>
								<div class="progress bar" data-width="57%">
									<div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"><span>57%<i class="fas fa-caret-down"></i></span></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Skill section start-->

	<!--team section start-->
	<section class="team-section" id="team-section">
		<svg class="separator__svg" id="team-header-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
		</svg>
		<div class="container position-relative">
			<div class="row">
				<div class="col-12 col-lg-12">
					<div class="team-details pr-lg-5">
						<h6 class="sub-title main-color">Lorem ipsum is simply dummy text</h6>
						<h2 class="title">Our Creative Team</h2>
					</div>
				</div>
				<div class="col-12 col-lg-12 team-member-area">
					<div class="testimonial-team owl-carousel owl-theme">
						<div class="item text-center wow fadeInUp">
							<div class="image-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/img/team1.png" alt="team1">
							</div>
							<h3 class="team-name">Richard Stevens</h3>
						</div>
						<div class="item text-center wow fadeInUp" data-wow-delay=".3s">
							<div class="image-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/img/team2.png" alt="team1">
							</div>
							<h3 class="team-name">Lisa  Warrior</h3>
						</div>
						<div class="item text-center wow fadeInUp" data-wow-delay=".4s">
							<div class="image-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/img/team3.png" alt="team1">
							</div>
							<h3 class="team-name">Mark J Stevens</h3>
						</div>
						<div class="item text-center">
							<div class="image-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/img/team1.png" alt="team1">
							</div>
							<h3 class="team-name">Richard Stevens</h3>
						</div>
						<div class="item text-center">
							<div class="image-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/img/team2.png" alt="team1">
							</div>
							<h3 class="team-name">Lisa  Warrior</h3>
						</div>
						<div class="item text-center">
							<div class="image-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/img/team3.png" alt="team1">
							</div>
							<h3 class="team-name">Mark J Stevens</h3>
						</div>
					</div>
				</div>
			</div>
			<a class='circle' id="team-circle-left"><i class="lni lni-chevron-left"></i></a>
			<a class='circle' id="team-circle-right"><i class="lni lni-chevron-right"></i></a>
		</div>
		<svg class="separator__svg" id="team-foot-svg" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
		</svg>
	</section>
	<!--team section start-->

	<!--portfolio section start-->
	<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
		<div class="container">
			<div class="section-heading">
				<div class="row">
					<div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
						<h1 class="heading">OUR</h1>
						<h1 class="heading">AMAZING PORTFOLIO</h1>
					</div>
					<div class="col-md-12 pt-5">
						<div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left" data-wow-delay="350ms">
							<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> ALL</div>
							<div data-filter=".web" class="cbp-filter-item">WEB DESIGN</div>
							<div data-filter=".logo" class="cbp-filter-item">LOGO DESIGN</div>
							<div data-filter=".mobile" class="cbp-filter-item">MOBILE APP</div>
							<div data-filter=".development" class="cbp-filter-item">DEVELOPMENT</div>
						</div>

						<div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
							<div class="cbp-item web logo">
								<a href="<?php echo get_template_directory_uri(); ?>/img/work1.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
									<div class="cbp-caption-defaultWrap">
										<img src="<?php echo get_template_directory_uri(); ?>/img/work1.jpg" alt="img">
									</div>
									<div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
										<div class="portfolio-inner-content">
											<span></span>
											<span></span>
										</div>
										<div class="hover-text">
											<h4 class="p-hover-title">Creative</h4>
											<p class="p-hover-des">35 WP Anniversary</p>
										</div>
									</div>
								</a>
							</div>

							<div class="cbp-item mobile web">
								<a href="<?php echo get_template_directory_uri(); ?>/img/work2.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
									<div class="cbp-caption-defaultWrap">
										<img src="<?php echo get_template_directory_uri(); ?>/img/work2.jpg" alt="img">
									</div>
									<div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
										<div class="portfolio-inner-content">
											<span></span>
											<span></span>
										</div>
										<div class="hover-text">
											<h4 class="p-hover-title">Web Design</h4>
											<p class="p-hover-des">35 WP Anniversary</p>
										</div>
									</div>
								</a>
							</div>

							<div class="cbp-item print logo development web mobile">
								<a href="<?php echo get_template_directory_uri(); ?>/img/work3.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
									<div class="cbp-caption-defaultWrap">
										<img src="<?php echo get_template_directory_uri(); ?>/img/work3.jpg" alt="img">
									</div>
									<div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
										<div class="portfolio-inner-content">
											<span></span>
											<span></span>
										</div>
										<div class="hover-text">
											<h4 class="p-hover-title">Logo Design</h4>
											<p class="p-hover-des">35 WP Anniversary</p>
										</div>
									</div>
								</a>
							</div>

							<div class="cbp-item logo development">
								<a href="<?php echo get_template_directory_uri(); ?>/img/work4.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
									<div class="cbp-caption-defaultWrap">
										<img src="<?php echo get_template_directory_uri(); ?>/img/work4.jpg" alt="img">
									</div>
									<div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
										<div class="portfolio-inner-content">
											<span></span>
											<span></span>
										</div>
										<div class="hover-text">
											<h4 class="p-hover-title">Development</h4>
											<p class="p-hover-des">35 WP Anniversary</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button text-data wow fadeInUp" data-wow-delay="650ms">
							<div class="row portfolio-foot-detail text-data-inner">
								<div class="col-7 col-lg-4 offset-lg-6 text-left pl-4">
									<span class="p-text">We've Completed More Then</span>
									<h4 class="p-num">530</h4>
									<span class="p-text">Projects for Our amazing Clients</span>
								</div>
								<div class="col-5 col-lg-2 d-flex justify-content-end align-items-center"><a href="digital-agency/standalone.html" class="btn blue-and-black-btn rounded-pill">VIEW ALL</a></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--portfolio section end-->

	<!--testimonial section start-->
	<section class="testimonial-sec padding-top position-relative" id="testimonial-sec">
		<svg class="separator__svg" id="testimonial-header-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
		</svg>
		<div class="container">
			<div class="testimonial-area">
				<div class="row">
					<div class="col-12">
						<div class="testimonial-title">
							<h1 class="heading">SATISFIED <span>CUSTOMERS</span></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="testimonial-carousel">
							<div class="testimonial-box owl-carousel owl-theme">
								<div class="item text-center wow fadeInUp">
									<div class="icon-holder">
										<i class="fas fa-quote-right"></i>
									</div>
									<p class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
									</p>
									<div class="img-holder">
										<img src="<?php echo get_template_directory_uri(); ?>/img/test1.jpg">
									</div>
									<h4 class="user-name">Sara Williams</h4>
								</div>
								<div class="item text-center wow fadeInUp" data-wow-delay=".3s">
									<div class="icon-holder">
										<i class="fas fa-quote-right"></i>
									</div>
									<p class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
									</p>
									<div class="img-holder">
										<img src="<?php echo get_template_directory_uri(); ?>/img/test2.jpg">
									</div>
									<h4 class="user-name">Julia Miltese</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<svg class="separator__svg" id="testimonial-foot-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
		</svg>
	</section>
	<!--testimonial section end-->

	<!--brands section start-->
	<section class="brand-sec" id="brand">
		<div class="container">
			<!--Partner Slider-->
			<div class="partners-slider owl-carousel owl-theme">
				<div class="logo-item"> <img alt="client-logo" src="<?php echo get_template_directory_uri(); ?>/img/client-1.png"></div>
				<div class="logo-item"> <img alt="client-logo" src="<?php echo get_template_directory_uri(); ?>/img/client-2.png"></div>
				<div class="logo-item"> <img alt="client-logo" src="<?php echo get_template_directory_uri(); ?>/img/client-3.png"></div>
				<div class="logo-item"> <img alt="client-logo" src="<?php echo get_template_directory_uri(); ?>/img/client-4.png"></div>

			</div>
		</div>
	</section>
	<!--brands section end-->

	<!--Lastest Blog section start-->
	<section class="lastest-blog" id="lastest-blog">
		<svg class="separator__svg" id="blog-header-svg" width="100%" height="200" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
		</svg>
		<div class="container position-relative">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6">
					<div class="blog-content slider-detail wow fadeInDown">
						<div class="slider-slide">
							<h1>LATEST</h1>
							<h1><span>DESIGN</span> BLOG</h1>
							<p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry.</p>
							<a href="javascript:void(0);" class="btn btn-large btn-rounded white-tran-yellow-btn">Learn More</a>
						</div>
						<div class="slider-slide">
							<h1>LATEST</h1>
							<h1><span>DESIGN</span> BLOG</h1>
							<p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry.</p>
							<a href="javascript:void(0);" class="btn btn-large btn-rounded white-tran-black-btn">Learn More</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-6">
					<div class="blog-img wow fadeInUp">
						<img src="<?php echo get_template_directory_uri(); ?>/img/blog-mokeup.png">
						<div class="slider-img">
							<div class="img-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/blog-mokup-img-2.png" class="mockup-img">
							</div>
							<div class="img-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/blog-mokup-img.png" class="mockup-img">
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class='circle' id="blog-circle-left"><i class="lni lni-chevron-left"></i></a>
			<a class='circle' id="blog-circle-right"><i class="lni lni-chevron-right"></i></a>
		</div>

		<svg class="separator__svg" id="blog-foot-svg" width="100%" height="200" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
			<img src="<?php echo get_template_directory_uri(); ?>/img/pot-2.png" alt="plant" class="pot-2 wow slideInLeft" data-wow-delay=".5s">
		</svg>
	</section>
	<!--Lastest Blog section start-->

	<!--Contact section start-->
	<section class="contact-sec" id="contact-sec">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7">
					<h4 class="heading text-center text-lg-left">GET IN TOUCH</h4>
					<form class="row contact-form wow fadeInLeft" id="contact-form-data">
						<div class="col-sm-12" id="result"></div>
						<div class="col-12 col-md-5">
							<input type="text" name="userName" placeholder="Your Name" class="form-control">
							<input type="email" name="userEmail" placeholder="Email Address *" class="form-control">
							<input type="text" name="userSubject" placeholder="Subject" class="form-control">
						</div>
						<div class="col-12 col-md-7">
							<textarea class="form-control" name="userMessage" rows="6" placeholder="Your Message"></textarea>
						</div>
						<div class="col-12">
							<a href="javascript:void(0);" class="btn yellow-and-black-btn rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> <b>Send Message</b>
							</a>
						</div>
					</form>
				</div>
				<div class="col-12 col-lg-5 text-center text-lg-left position-relative">
					<div class="contact-details wow fadeInRight">
						<h4 class="heading">OUR LOCATION</h4>
						<p class="text">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered .
						</p>
						<ul>
							<li><i aria-hidden="true" class="fas fa-map-marker-alt"></i> 123 Park Avenue, New York, United States </li>
							<li><i aria-hidden="true" class="fas fa-phone-volume"></i>
								<span>+1 631 1234 5678</span>
								<span>+1 631 1234 5678</span>
							</li>
							<li><i aria-hidden="true" class="fas fa-paper-plane"></i>email@website.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact section end-->

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