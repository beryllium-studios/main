<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beryllium
 */
?>

<!-- Footer -->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-6 footer__left">
				<div>
					<h6 class="title title--h6 weight--300 mb--2">Sign up for our newsletter.</h6>
					<!-- Newsletter -->
					<div class="form-group">
						<form class="newsletter-form" data-toggle="validator">
							<div class="form-inline newsletter-form__row">
								<input type="email" class="inputText inputText--fill" placeholder="Enter your email..." required autocomplete="off">
								<button type="submit" class="btn btn__icon btn--white "><i class="icon-arrow-right"></i></button>
							</div>
							<div id="validator-newsletter" class="form-result"></div>
						</form>
					</div>
					<!-- /Newsletter -->
				</div>
			</div>

			<div class="col-12 col-md-6 footer__right">
				<ul class="listContact list-unstyled">
					<li><h6 class="title title--h6">GET IN TOUCH</h6></li>
					<li>hello@berylliumstudios.com</li>
					<li>+1 (909) 123-4567</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- /Footer -->

<!-- Menu -->
<div class="menu">
	<div class="menu-inner">
		<ul class="menu-list">
			<li><a class="menu-list__item" href="projects.html"><span>projects</span></a></li>
			<li><a class="menu-list__item" href="about.html"><span>studio</span></a></li>
			<li><a class="menu-list__item" href="news.html"><span>news</span></a></li>
			<li><a class="menu-list__item" href="contacts.html"><span>contact</span></a></li>
		</ul>
	</div>
	<div class="social social--white">
		<a class="social__link" href="#">FB</a>
		<a class="social__link" href="#">TW</a>
		<a class="social__link" href="#">IG</a>
	</div>
</div>
<div class="ef-background"></div>
<!-- /Menu -->

<?php wp_footer(); ?>

</body>
</html>
