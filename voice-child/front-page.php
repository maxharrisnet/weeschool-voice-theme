<?php
/**
 * The homepage template file
 *
 */

get_header(); ?>

<div id="content">
	<main class="main-content">
		<section class="hero">
			<div class="container">
				<div class="col-xs-11 col-sm-8 col-md-15">
					<h1><?php the_field('home_hero_heading_1'); ?></h1>
					<h2 class="h1"><?php the_field('home_hero_heading_2'); ?></h2>
					<a href="https://itunes.apple.com/app/id1137696655" target="_blank" class="btn btn-default hidden-sm hidden-xs app-button">Get The App</a>
					<button class="btn btn-media hidden-sm hidden-xs video-trigger"  data-toggle="modal" data-target="#videoModal">
						<span class="glyphicon glyphicon-play"></span>
						Watch Our Video
					</button>
				</div>
			</div>
		</section>
		<section>
			<div class="container mobile-image-bottom">
			<div class="hidden-md hidden-lg row">
				<a href="https://itunes.apple.com/app/id1137696655" class="btn btn-default app-button">Get The App</a>
				<button class="btn btn-media video-trigger" data-toggle="modal" data-target="#videoModal">
					<span class="glyphicon glyphicon-play"></span>
					Watch Our Video
				</button>
				<img class="center" src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/mainiphone-img@2x.png" />
			</div>
			<div class="row">

				<div class="col-md-7 col-md-offset-0 float-r">
					<h2><?php the_field('home_section_one_header_1'); ?></h2>
					<p>
						<?php the_field('home_section_one_paragraph_1'); ?>
					</p>
					<p>
						<?php the_field('home_section_one_paragraph_2'); ?>
					</p>
				</div>

				<div class="col-md-7">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/devices@2x.png" />
				</div>

				</div>
			</div>
		</section>
		<section id="milestones-section" class="flush-section">
			<div class="container">
				<div class="col-md-7 col-md-offset-1">
					<h2><?php the_field('home_section_two_header_1'); ?></h2>
					<p>
						<?php the_field('home_section_two_paragraph_1'); ?>
					</p>
				</div>
				<div class="image-wrapper">
					<img class="flush-bg" src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/img-chart@2x.png" />
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<img class="flush-bg" src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/img-iphoneflat@2x.png" />
				</div>
			</div>
		</section>
		<section class="flush-section special-section">
			<div class="container">
				<div class="row">
					<div id="play-smart" class="col-xs-15 col-sm-10 col-sm-offset-0 col-md-7 col-md-offset-8 col-lg-6 col-lg-offset-9">
						<h2><?php the_field('home_section_three_header_1'); ?></h2>
						<p>
							<?php the_field('home_section_three_paragraph_1'); ?>
						</p>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="flush-section">
					<aside class="col-xs-5 col-xs-offset-0 col-sm-4 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-4 col-lg-offset-4 breakout-aside">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/img-playplan1@2x.png" />
					</aside>
					<div class="flush-section col-xs-15 col-xs-offset-0 col-sm-11 col-sm-offset-4 col-lg-9 col-lg-offset-6">
						<img class="flush-bg" src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/img-playsmart@2x.png" />
					</div>
					</div>
				</div>
			</div>
		</section>
		<section class="centered-section padded-centered-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<h2><?php the_field('home_section_four_header_1'); ?></h2>
						<p>
							<?php the_field('home_section_four_paragraph_1'); ?>
						</p>
					</div>
				</div>
				<div class="row">
					<ul class="inline-list block-list">
						<li class="col-xs-5">
						<a href="<?php echo get_site_url(); ?>/our-app">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/tile3@2x.png" />
							<h4>For story time</h4>
						</a>
						</li>
						<li class="col-xs-5">
						<a href="<?php echo get_site_url(); ?>/our-app">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/tile1@2x.png" />
							<h4>For bath time</h4>
						</a>
						</li>
						<li class="col-xs-5">
						<a href="<?php echo get_site_url(); ?>/our-app">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/tile2@2x.png" />
							<h4>For bed time</h4>
						</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="hero secondary-hero">
			<div class="container">
				
			</div>
		</section>
		<section id="playgroup-section">
			<div class="container">
				<div class="col-sm-12 col-sm-ffset-1 col-md-8 col-md-offset-1 col-lg-6">
					<h2><?php the_field('home_section_five_header_1'); ?></h2>
					<p>
						<?php the_field('home_section_five_paragraph_1'); ?>
					</p>
				</div>
				<div class="image-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/homepage/img-joinplaygroup@2x.png" />
				</div>
			</div>
		</section>		
		<section id="research-section" class="centered-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<h2><a href="<?php echo site_url(); ?>/our-research"><?php the_field('home_section_six_header_1'); ?></a></h2>
						<p>
							<?php the_field('home_section_six_paragraph_1'); ?>
						</p>
					</div>
				</div>
				<div class="row">
					<ul class="logo-list">
						<li class="col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/naeyc_logo.png" />
						</li>
						<li class="col-md-2">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/doe@2x.png" />
						</li>
						<li class="col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/celdg@2x.png" />
						</li>
						<li class="col-md-5">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/head-start@2x.png" />
						</li>						
						<li class="col-md-2">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/doe-usa@2x.png" />
						</li>										
					</ul>
				</div>
				</p>
			</div>
		</section>
	</main>

	<!-- Modal -->
	<div id="videoModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
			<video controls id="video-weeschool"><source src="<?php echo get_stylesheet_directory_uri() ?>/assets/video/weeschool.mp4"></video>
	      </div>
	    </div>
	  </div>
	</div>

<script type="text/javascript">

	// This script sets OSName variable as follows:
	// "Windows"    for all versions of Windows
	// "MacOS"      for all versions of Macintosh OS
	// "Linux"      for all versions of Linux
	// "UNIX"       for all other UNIX flavors 
	// "Unknown OS" indicates failure to detect the OS

	var OSName="Unknown OS";
	if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
	if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Android";
	if (navigator.appVersion.indexOf("Android")!=-1) OSName="Android";
	if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
	if (navigator.appVersion.indexOf("iPhone")!=-1) OSName="iOS";
	if (navigator.appVersion.indexOf("iPod")!=-1) OSName="iOS";
	if (navigator.appVersion.indexOf("iPad")!=-1) OSName="iOS";
	if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";

	var appBtnURL = "#";
	var appBtnTarget = "_self";

	console.log(OSName);
	if (OSName == "iOS" || OSName == "MacOS") {
		appBtnURL = "https://itunes.apple.com/app/id1137696655";
		appBtnTarget = "_blank"
	}
	else if (OSName == "Android") {
		appBtnURL = "/our-app/#mc_signup";
	}
	else {
		appBtnURL = "/our-app/";
	}

	jQuery('.app-button').prop("href", appBtnURL);
	jQuery('.app-button').prop("target", appBtnTarget);

	var video = jQuery('#video-weeschool')[0];
	// when the modal is opened...
	jQuery('#videoModal').on('show.bs.modal', function () {
	  // call play() on the <video> DOM element 
	  jQuery('#video-weeschool')[0].play()
	})

	// when the modal is closed...
	jQuery('#videoModal').on('hide.bs.modal', function () {
	  // call pause() on the <video> DOM element 
	  jQuery('#video-weeschool')[0].pause();
	  	video.currentTime = 0;
		video.load();
	})
</script>


</div>


<?php get_footer(); ?>
