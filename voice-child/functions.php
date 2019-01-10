<?php

function wpb_adding_scripts() {
	wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', true);
	wp_enqueue_script('bootstrap');
	wp_register_script('accordion', get_template_directory_uri().'/js/jquery.accordion.js', true);
	wp_enqueue_script('accordion');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_filter( 'body_class', 'sk_body_class_for_pages' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function sk_body_class_for_pages( $classes ) {

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;

}

?>