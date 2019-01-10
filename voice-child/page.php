<?php
/**
 * The main template file
 *
 * @package Base Theme
 * @since 0.1.0
 */

get_header(); ?>

<div id="content">
	<main class="main-content">
		<section class="hero">
			<div class="container">
				<?php $meta_value = get_post_meta( $post->ID, 'page-header', true ); 
            	if  (!empty( $meta_value )) {echo '<h1 id="page-header-text">' . $meta_value . '</h1>';}
            	else {} ?>
            </div>
		</section>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ): the_post(); ?>
					<?php $meta_value = get_post_meta( $post->ID, 'hero-video', true ); 
		            	if  (!empty( $meta_value )) {echo '<section class="video-section"><div class="container"><div class="video-container col-xs-15 col-md-9 col-md-offset-3">
							<video id="video"><source src="' . get_stylesheet_directory_uri() . '/assets/video/' . $meta_value . '" type="video/mp4"></video>
							<img src="' . get_stylesheet_directory_uri() . '/images/video/corner-topleft@2x.png" class="top-left-corner" />
							<img src="' . get_stylesheet_directory_uri() . '/images/video/corner-topright@2x.png" class="top-right-corner" />
							<img src="' . get_stylesheet_directory_uri() . '/images/video/corner-bottomleft@2x.png" class="bottom-left-corner" />
							<img src="' . get_stylesheet_directory_uri() . '/images/video/corner-bottomright@2x.png" class="bottom-right-corner" />
		            		
		            		  <!-- Video Controls -->
							  <div id="video-controls">
								<button type="button" id="play-pause"><span class="play"></span></button>
							  </div></div></div></section>';}
		            else {} ?>					
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
	</main>
</div>

<script type="text/javascript">
window.onload = function() {

  // Video
  var video = document.getElementById("video");

  // Buttons
  var playButton = document.getElementById("play-pause");

  // Header Text
  var headerText = document.getElementById("page-header-text");


	// Event listener for the play/pause button
	playButton.addEventListener("click", function() {
	  if (video.paused == true) {
	    // Play the video
	    video.play();

	    // Update the button text to 'Pause'
	    playButton.innerHTML = "<span class='pause'></span>";
	    headerText.innerHTML = "";
	  } else {
	    // Pause the video
	    video.pause();

	    // Update the button text to 'Play'
	    playButton.innerHTML = "<span class='play'></span>";
	  }
	});

}	
</script>
<?php get_footer();
