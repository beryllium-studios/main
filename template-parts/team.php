<!--team section start-->
<section class="team-section" id="team-section">
	<div class="container position-relative">
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="team-details pr-lg-5">
					<h2 class="title">Our Creative Team</h2>
				</div>
			</div>
			<div class="col-12 col-lg-12 team-member-area">
				<div class="testimonial-team owl-carousel owl-theme">
					<?php
					// Define the query arguments for fetching 'staff' post type
					$args = array(
					    'post_type' => 'staff',  // Specify the custom post type
					    'posts_per_page' => -1,  // Fetch all posts; change to a number for a specific amount
					    'order' => 'DESC',       // Order posts in ascending order; change to 'DESC' for descending
					    'orderby' => 'title'    // Order posts by title; change to another field if needed
					);

					// Create a new WP_Query instance with the specified arguments
					$staff_query = new WP_Query($args);

					// Check if there are any posts to display
					if ($staff_query->have_posts()) :
					    // Loop through the posts
					    while ($staff_query->have_posts()) : $staff_query->the_post();
					        // Get the post data
					        $post_id = get_the_ID();
					        $name = get_field('name');
					        $image = get_field('profile_image');

					        // Display the post
					        ?>
						    <div class="item text-center wow fadeInUp" data-wow-delay=".3s">
							    <div class="image-holder">
								    <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
							    </div>
							    <h3 class="team-name"><?php echo $name; ?></h3>
						    </div>
					        <?php
					    endwhile;
					    // Restore original Post Data
					    wp_reset_postdata();
					else :
					    // If no posts are found
					    echo '<p>No staff members found.</p>';
					endif;
					?>
				</div>
			</div>
		</div>
		<a class='circle' id="team-circle-left"><i class="lni lni-chevron-left"></i></a>
		<a class='circle' id="team-circle-right"><i class="lni lni-chevron-right"></i></a>
	</div>
</section>
<!--team section start-->