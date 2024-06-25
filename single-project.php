<?php get_header();

include 'template-parts/preloader.php';
include 'template-parts/navbar.php';

if (function_exists('get_fields')){
	$client = get_field('client');
	$year = get_field('year');
	$type = get_field('type');
	$hero_image = get_field('hero_image'); // id, title, url, description, caption, alt
	$content = get_field('content'); // array of array [title, content, illustration]
}
?>

	<section class="project-single">
		<!-- Intro -->
		<header class="header-page header-page--half js-opacity">
			<div class="container">
				<!-- Title -->
				<h6 class="title title--overhead title--tail">Project</h6>
				<h1 class="title title--display-1 js-lines">Fotico — Photography Agency</h1>
				<!-- /Title -->
			</div>
		</header>
		<!-- /Intro -->

		<!-- Image -->
		<figure class="image-container jarallax reveal">
			<img class="jarallax-img cover lazyload" src="assets/img/cover-project.jpg" alt="" />
		</figure>
		<!-- /Image -->

		<div class="container">
			<!-- Details -->
			<div class="case-details">
				<div class="item-details">
					<span class="item-details__title title--overhead">Client</span>
					<span class="item-details__text">Delta</span>
				</div>
				<div class="item-details">
					<span class="item-details__title title--overhead">Year</span>
					<span class="item-details__text">2018</span>
				</div>
				<div class="item-details">
					<span class="item-details__title title--overhead">Role</span>
					<span class="item-details__text">Website / Mobile app</span>
				</div>
				<div class="item-details item-details--end">
					<a class="btn-link" href="photo_viewer.html">See Website<i class="circle circle--right icon-right-open"></i></a>
				</div>
			</div>
			<!-- /Details -->
		</div>

		<article class="caption-single container">
			<div class="row">
				<div class="col-12 col-lg-2"><span class="num-article">01 —</span></div>
				<div class="col-12 col-lg-9">
					<h2 class="title title--h4 js-lines">How well we communicate is determined not by how well we say things, but how well we are understood.</h2>
					<div class="description js-block">
						<p>It is not enough that we build products that function, that are understandable and usable, we also need to build products that bring joy and excitement, pleasure and fun, and, yes, beauty to people’s lives. Creativity is to discover a question that has never been asked. If one brings up an idiosyncratic question, the answer he gives will necessarily be unique as well.</p>
					</div>
				</div>
			</div>
		</article>

		<!-- Image -->
		<figure class="image-container image-container--gutters reveal">
			<img class="cover lazyload" src="assets/img/image_project_03.jpg" alt="" />
		</figure>
		<!-- /Image -->

		<article class="caption-single container">
			<div class="row">
				<div class="col-12 col-lg-2"><span class="num-article">02 —</span></div>
				<div class="col-12 col-lg-9">
					<h2 class="title title--h4 js-lines">When you believe a thing, believe it all the way, implicitly and unquestionably.</h2>
					<div class="description js-block">
						<p>Good designers must always be avant-gardists, always one step ahead of the times. They should–and must–question everything generally thought to be obvious. They must have an intuition for people’s changing attitudes. For the reality in which they live, for their dreams, their desires, their worries, their needs, their living habits. They must also be able to assess realistically the opportunities and bounds of technology.</p>
					</div>
				</div>
			</div>
		</article>

		<!-- Slider -->
		<div class="slider slider-simply image-container--half reveal">
			<div class="slider-article swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="cover-slider lazyload" data-bg="assets/img/image_single_01.jpg"></div>
					</div>
					<div class="swiper-slide">
						<div class="cover-slider lazyload" data-bg="assets/img/image_single_01.jpg"></div>
					</div>
					<div class="swiper-slide">
						<div class="cover-slider lazyload" data-bg="assets/img/image_single_01.jpg"></div>
					</div>
				</div>
			</div>

			<div class="control-slider control-slider--bottom swiper-control">
				<div class="swiper-button-next swiper-button-next--square zoom-cursor">
					<i class="icon-up-open"></i>
				</div>
				<div class="swiper-button-prev swiper-button-prev--square zoom-cursor">
					<i class="icon-down-open"></i>
				</div>
			</div>
		</div>
		<!-- /Slider -->

		<article class="caption-single container">
			<div class="row">
				<div class="col-12 col-lg-2"><span class="num-article">03 —</span></div>
				<div class="col-12 col-lg-9">
					<h2 class="title title--h4 js-lines">Design is a solution to a problem. Art is a question to a problem.</h2>
					<div class="description js-block">
						<p>The future belongs to a different kind of person with a different kind of mind: artists, inventors, storytellers-creative and holistic ‘right-brain’ thinkers whose abilities mark the fault line between who gets ahead and who doesn’t.</p>
					</div>
				</div>
			</div>
		</article>

		<!-- Image -->
		<figure class="image-container reveal">
			<img class="cover lazyload" src="assets/img/image_project_07.jpg" alt="" />
		</figure>
		<!-- /Image -->

		<div class="caption-single container">
			<div class="row">
				<div class="col-12 col-md-6 award-item">
					<h4 class="title title--h6 js-lines">AWWWARDS</h4>
					<div class="js-lines">Site of the Day — Dec 2017</div>
				</div>
				<div class="col-12 col-md-6 award-item">
					<h4 class="title title--h6 js-lines">CSSDesignAwards</h4>
					<div class="js-lines">Site of the Day — Dec 2017</div>
				</div>
			</div>
		</div>

		<!-- Page nav -->
		<nav class="page-nav">
			<a class="btn-link" href="#"><i class="circle circle--left icon-left-open"></i><span>Prev project</span></a>
			<a class="btn-link" href="#"><span>Next project</span><i class="circle circle--right icon-right-open"></i></a>
		</nav>
		<!-- /Page nav -->
	</section>

<?php get_footer(); ?>