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
						<a class="navbar-brand bg-dark" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/icon-white.svg"></a>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<?php
							wp_nav_menu(
								array(
									'container_class' => 'navbar-nav ml-auto',
									'container'       => 'ul',
									'menu_class'      => 'navbar-nav ml-auto',
									'walker'          => new WP_Custom_Nav_Walker(),
									'add_link_class'      => 'nav-link wow animated',
								)
							);
							?>
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
			<a class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/icon-white.svg" alt="logo"></a>
			<nav class="side-nav w-100">
				<?php

				wp_nav_menu(
					array(
						'container_class' => 'navbar-nav',
						'container'       => 'ul',
						'menu_class'      => 'navbar-nav',
						'walker'          => new WP_Custom_Nav_Walker(),
						'add_link_class'      => 'nav-link',
					)
				);
				?>
			</nav>

			<?php include 'navigation/social.php'; ?>

		</div>sss
	</div>
	<a id="close_side_menu" href="javascript:void(0);"></a>


</header>