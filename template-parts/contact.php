<!--Contact section start-->
<section class="contact-sec" id="contact-sec">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<h4 class="heading text-center text-lg-left">GET IN TOUCH</h4>
				<?php
				if ( is_prod() ) {
					echo do_shortcode( '[contact-form-7 id="3eee4b7" title="Contact form 1"]' );
				} else {
					echo do_shortcode( '[contact-form-7 id="5ad8da0" title="Contact form 1"]' );
				}
				?>
			</div>
			<div class="col-12 col-lg-5 text-center text-lg-left position-relative">
				<div class="contact-details wow fadeInRight">
					<h4 class="heading">OUR LOCATION</h4>
					<p class="text">
						We are a digital agency. We serve multiple businesses worldwide.
					</p>
					<ul>
						<li><i aria-hidden="true" class="fas fa-map-marker-alt"></i> California, United States </li>
						<li><i aria-hidden="true" class="fas fa-phone-volume"></i>
							<a href="tel:13239891450">+1 (323) 989-1450</a>
						</li>
						<li><i aria-hidden="true" class="fas fa-paper-plane"></i><a href="mailto:hello@berylliumstudios.com">hello@berylliumstudios.com</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact section end-->