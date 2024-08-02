<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package beryllium
 */

get_header();
include 'template-parts/preloader.php';
include 'template-parts/navigation.php';

echo get_the_author();

/*
 * $fields array contains the following keys:
 *  - hero_image: Hero image for the article
 *  - author: Public author for article
 *  - sub_headline: Sub headline for article
 */
$fields = get_fields();
?>

<div class="container article mt-5">
	<!-- Title -->
	<div class="text-center mb-5">
		<h1 class="display-4"><?php echo get_the_title(); ?></h1>
		<p class="text-muted"><?php echo $fields['sub_headline']; ?></p>
	</div>

	<!-- Hero Image -->
	<div class="hero-image mt-5 mb-5 text-center">
		<!-- recommendation for a 1024x512 -->
		<img
			src="<?php echo ! empty( $fields['hero_image']['url'] ) ? $fields['hero_image']['url'] : get_template_directory_uri() . '/assets/images/placeholders/article-hero-image.png'; ?>"
			alt="Hero Image" class="img-fluid w-100">
	</div>

	<!-- Author Info -->
	<div class="author-info text-center mt-5 mb-5">
		<p class="text-muted mb-0">Published on <span><?php echo get_the_date( 'M d Y' ); ?></span></p>
		<div class="author-details">
			<?php echo get_avatar( $fields['author']->id ); ?>
			<p class="mb-5"><?php echo $fields['author']->public_author_name; ?></p>
		</div>
	</div>

	<?php
	$reading_time = calculate_reading_time( get_the_ID() );
	?>

	<div class="reading-time text-left mt-5 mb-2">
		<div class="alert alert-info" role="alert">
			<i class="fas fa-book-reader mr-2" aria-hidden="true"></i>
			This article is approximately <?php echo $reading_time; ?> minute<?php echo $reading_time > 1 ? 's' : ''; ?> long.
		</div>
	</div>

	<?php
	// Get the current post content
	$content = get_the_content();
	?>

	<!-- Article Content -->
	<article>
		<?php
		if (!empty(trim($content))) {
			echo $content;
		} else {
			echo '<p>No content available for this article.</p>';
		}
		?>
	</article>


	<!-- Social Share -->
	<?php
	$post_url   = urlencode( get_permalink() );
	$post_title = urlencode( get_the_title() );
	?>

	<div class="social-share text-center mt-5">
		<h5>Share this article:</h5>
		<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" target="_blank" class="btn btn-primary me-2">
			<i class="fab fa-linkedin-in" aria-hidden="true"></i>
		</a>
		<a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" class="btn btn-info me-2">
			<i class="fab fa-x-twitter" aria-hidden="true"></i>
		</a>
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" class="btn btn-danger">
			<i class="fab fa-facebook-f" aria-hidden="true"></i>
		</a>
	</div>


	<?php include 'template-parts/cta-call.php'; ?>
</div>


<?php
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();

?>
