<?php
/**
 * Enqueue scripts and styles.
 */
function gi_underscores_scripts() {
	// Bootstrap css	
	wp_register_style( 'underscores-bootstrap-min', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' );
	wp_enqueue_style('underscores-bootstrap-min');	

	// Theme styles
	wp_register_style('underscores-styles-css', get_template_directory_uri() . '/assets/css/style.css', false, null. '1.2');
	wp_enqueue_style('underscores-styles-css');

	// jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', ( 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js' ), null, null, true, '2.1.1' );
	wp_enqueue_script( 'jquery' );

	// Bootstrap js
	wp_register_script( 'underscores-bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js', null, null, true );
	wp_enqueue_script('underscores-bootstrap-js');	

	// Theme functions
  	wp_register_script('underscores-scripts', get_template_directory_uri() . '/assets/js/functions.js', null, null, true);
	wp_enqueue_script('underscores-scripts');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gi_underscores_scripts' );