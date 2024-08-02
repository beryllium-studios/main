<!--portfolio section start-->
<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
	<div class="container">
		<div class="section-heading">
			<div class="row">
				<div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
					<h1 class="heading">OUR</h1>
					<h1 class="heading">CASE STUDIES</h1>
				</div>
				<div class="col-md-12 pt-5">
					<div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">

						<?php
						$args = array(
							'post_type'      => 'project',
							'post_status'    => 'publish', // Only get published posts
							'orderby'        => 'date',
							'order'          => 'DESC',
							'posts_per_page' => 6, // Retrieve the latest 6 posts
							'has_password'   => false // Exclude password-protected posts
						);

						$project_query = new WP_Query( $args );

						if ( $project_query->have_posts() ) {

							while ( $project_query->have_posts() ) {
								$project_query->the_post();
								$fields = get_fields();

								$project_image = $fields['card_image'];

								// now we render each project
								?>
								<div class="cbp-item">
									<!-- case study permalink -->
									<a href="<?php echo get_permalink(); ?>" class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<!-- case study featured image 565x464 -->
											<img src="<?php echo $project_image; ?>" alt="img">
										</div>
										<div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
											<div class="hover-text">
												<!-- case study title and company -->
												<h4 class="p-hover-title"><?php echo $fields['client']; ?></h4>
												<p class="p-hover-des"><?php echo $fields['type']; ?></p>
											</div>
										</div>
									</a>
								</div>
								<?php
							}

							// Restore original post data
							wp_reset_postdata();
						} else {
							// No posts found
							echo '<p>No projects found.</p>';
						}
						?>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--portfolio section end-->