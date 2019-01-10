<?php
/**
 * Template Name: Our App
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
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
	</main>
</div>

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

<?php get_footer();
