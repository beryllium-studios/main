<?php get_header();

if (function_exists('get_fields')){
	$client = get_field('client');
	$year = get_field('year');
	$type = get_field('type');
	$hero_image = get_field('hero_image'); // id, title, url, description, caption, alt
	$content = get_field('content'); // array of array [title, content, illustration]
}
?>



<?php get_footer(); ?>