<?php get_header(); ?>

<?php
include 'template-parts/preloader.php';
include 'template-parts/navbar.php';
?>


<!-- Intro -->
<header class="header-page header-page--half js-opacity">
	<div class="container">
		<!-- Title -->
		<h6 class="title title--overhead title--tail">Beryllium Studios</h6>
		<h1 class="title title--display-1 js-lines"><?php _e('Transforming Your Ideas into Cutting-Edge AI Solutions for Business Success', 'beryllium'); ?></h1>
		<!-- /Title -->
	</div>
</header>
<!-- /Intro -->

<!-- Image -->
<figure class="image-container jarallax reveal">
	<img class="jarallax-img cover lazyload" src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-art-ai-large.jpg" alt="" />
</figure>
<!-- /Image -->

<!-- Process -->
<article id="start" class="caption-single container">
	<div class="row">
		<div class="col-12 col-lg-3">
			<h4 class="title title--overhead js-lines">Our Purpose</h4>
		</div>
		<div class="col-12 col-lg-9">
			<h2 class="title title--h4 js-lines">Integrate AI Seamlessly, Efficiently, and Profitably Into Your Operations</h2>
			<div class="description noGutters-Bottom js-block">
				<p class="paragraph noGutters-Bottom">We empower small and medium-sized businesses by integrating cutting-edge AI technologies into their operations, enabling them to enhance efficiency, drive innovation, and achieve competitive advantage without the need for significant internal AI investment.
				</p>
			</div>
		</div>
	</div>
</article>
<!-- /Process -->

<!-- Services -->
<article class="caption-single container">
	<div class="row">
		<div class="col-12 col-lg-3">
			<h4 class="title title--overhead js-lines">Mission</h4>
		</div>
		<div class="col-12 col-lg-9">
			<h2 class="title title--h4 js-lines">We specialize in AI-driven prototyping and idea generation to help clients evaluate the feasibility of AI.</h2>
		</div>
	</div>
</article>

<div class="container-fluid container-cutout mb--2">
	<div class="row">
		<!-- itemCard -->
		<div class="col-12 col-sm-12 col-lg-6 col-xl-4 itemService">
			<div class="itemCard__imageWrap">
				<img class="itemCard__image lazyload" src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-integration-service.jpg" alt="">
			</div>
			<div class="itemCard__header">
				<h3 class="title title--h5 itemCard__title">Cloud Integration</h3>
				<p class="paragraph">We excel in cloud integration, seamlessly weaving cloud services into your applications or existing architecture.</p>
				<a class="btn-link" href="#">See Projects <i class="icon-base icon-right-open"></i></a>
			</div>
		</div>
		<!-- /itemCard -->

		<!-- itemCard -->
		<div class="col-12 col-sm-12 col-lg-6 col-xl-4 itemService">
			<div class="itemCard__imageWrap">
				<img class="itemCard__image lazyload" src="<?php echo get_template_directory_uri(); ?>/assets/images/prototyping-service-v2.jpg" alt="">
			</div>
			<div class="itemCard__header">
				<h3 class="title title--h5 itemCard__title">Prototyping</h3>
				<p class="paragraph">Our rapid app prototyping service transforms your ideas into functional prototypes quickly and efficiently.</p>
				<a class="btn-link" href="#">See Projects <i class="icon-base icon-right-open"></i></a>
			</div>
		</div>
		<!-- /itemCard -->

		<!-- itemCard -->
		<div class="col-12 col-sm-12 col-lg-6 col-xl-4 itemService">
			<div class="itemCard__imageWrap">
				<img class="itemCard__image lazyload" src="<?php echo get_template_directory_uri(); ?>/assets/images/ai-service-analysis-v2.jpg" alt="">
			</div>
			<div class="itemCard__header">
				<h3 class="title title--h5 itemCard__title">AI Viability Analysis</h3>
				<p class="paragraph">We specialize in guiding clients through the process of evaluating AI integration feasibility.</p>
				<a class="btn-link" href="#">See Projects <i class="icon-base icon-right-open"></i></a>
			</div>
		</div>
		<!-- /itemCard -->
	</div>
</div>
<!-- /Services -->

<?php get_footer(); ?>