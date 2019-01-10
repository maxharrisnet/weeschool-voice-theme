<?php
/**
 * Template Name: Shop
 *
 * @package Base Theme
 * @since 0.1.0
 */

get_header( 'weeschool' ); ?>

<div id="content">
	<main class="main-content">
		<section class="hero">
			<div class="container">
				<?php $meta_value = get_post_meta( $post->ID, 'page-header', true ); 
            	if  (!empty( $meta_value )) {echo '<h1>' . $meta_value . '</h1>';}
            	else {} ?>
            </div>
		</section>
		<section class="support-section">
			<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</section>
	</main>
</div>
<?php get_footer();
