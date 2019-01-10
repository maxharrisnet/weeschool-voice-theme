<?php
/**
 * Template Name: About Us
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

<?php get_footer(); ?>

<script type="text/javascript">
  jQuery(document).ready(function() {

	  var allPanels = jQuery('.accordion li.open');
	    
	  jQuery('.accordion li button').click(function() {
	  	console.log('click');
	    jQuery('.accordion li.open').removeClass('open');
	    jQuery(this).parent().addClass('open');
	    return false;
	  });

  });
</script>