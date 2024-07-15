<?php
// Get the current page URL
$currentUrl = $_SERVER['REQUEST_URI'];

// Check if the current page is the home page or the careers page
$isHomePage = ($currentUrl === '/' || $currentUrl === '/index.php');
$isCareersPage = (strpos($currentUrl, '/careers') !== false);
?>

<header id="home">
	<div class="container">
		<div class="upper-nav">
			<div class="row">
				<div class="col-6 d-flex align-items-center">
					<div class="contact-info">
						<span><i class="lni lni-whatsapp"></i> <a href="tel:3239891450">(323) 989-1450</a></span>
					</div>
				</div>
				<div class="col-6">
					<div class="contact-social-icons d-flex justify-content-end align-items-center">
						<ul class="upper-social-icons">
							<li><a href="#" class="facebook-text-hvr"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" class="twitter-text-hvr"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" class="linkedin-text-hvr"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#" class="instagrams-text-hvr"><i class="lni lni-instagram-filled"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="main-nav">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand bg-dark" href="index-digital-agency.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png"></a>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link wow fadeInUp" href="<?php echo get_base_url(); ?>">HOME</a>
								</li>
								<!-- Remove li from condition if the link is not scrollable -->
								<?php if (!$isCareersPage) { ?>
									<li class="nav-item">
										<a class="nav-link wow fadeInDown scroll1" href="#about-sec">ABOUT</a>
									</li>
									<li class="nav-item">
										<a class="nav-link wow fadeInUp scroll" href="#company-portfolio-section">PORTFOLIO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link wow fadeInDown scroll" href="#testimonial-sec">CLIENTS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link wow fadeInUp scroll" href="#lastest-blog">BLOG</a>
									</li>
									<li class="nav-item">
										<a class="nav-link wow fadeInDown scroll" href="#contact-sec">CONTACT</a>
									</li>
            		<?php } ?>
								<li class="nav-item">
									<a class="nav-link wow" href="<?php echo get_base_url('/careers'); ?>">CAREERS</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--Side Menu Button-->
	<a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
		<i class="lni lni-menu"></i>
	</a>
	<!--Side Nav-->
	<div class="side-menu hidden side-menu-opacity">
		<div class="inner-wrapper">
			<span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
			<a class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-yellow.png" alt="logo"></a>
			<nav class="side-nav w-100">
				<ul class="navbar-nav">
					<li class="nav-item">
							<a class="nav-link" href="<?php echo get_base_url(); ?>">Home</a>
					</li>
					<?php if (!$isCareersPage) { ?>
						<li class="nav-item">
							<a class="nav-link scroll1" href="#about-sec">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#company-portfolio-section">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#testimonial-sec">Clients</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#lastest-blog">Blogs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact-sec">Contact</a>
						</li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_base_url('/careers'); ?>">Careers</a>
						</li>
				</ul>
			</nav>

			<?php include 'navigation/social.php'; ?>

		</div>
		<svg class="separator__svg" id="site-mmenu-svg" width="100%"  viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M 100 100 V 10 L 0 100"/>
			<path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
		</svg>
	</div>
	<a id="close_side_menu" href="javascript:void(0);"></a>


</header>