<?php

function aore_town_scripts() {
	// wp_enqueue_style( 'aore-town-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'aore-town-style', 'rtl', 'replace' );
	// wp_enqueue_style(  'owldefault', get_template_directory_uri() . '/css/owl.theme.default.css', array() ,'2.3.4', 'all' );
	// wp_enqueue_style(  'owl', get_template_directory_uri() . '/css/owl.carousel.css', array() ,'2.3.4', 'all' );
	// wp_enqueue_style(  'swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', array() ,'6.3.5', 'all' );
	wp_register_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
	wp_enqueue_style('slick');
	wp_register_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style('animate');
	wp_enqueue_style(  'fontawesome', get_template_directory_uri() . '/css/all.css', array() ,'5.15.1', 'all' );
	wp_enqueue_style(  'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array() ,'4.0.0', 'all' );
	wp_enqueue_style( 'aoreStyle', get_template_directory_uri() . '/css/scss/aoreStyle.css', array(), '1.0.0', 'all' );
	// wp_enqueue_style( 'test', get_template_directory_uri() . '/test.css', array(), '2.0.0', 'all' );

	wp_deregister_script( 'jquery' );

	// wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.5.1', true );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', null, '2.2.4', true );
	wp_enqueue_script( 'jquery' );
	// wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '2.3.4', true);
	// wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '6.3.5', true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
	// wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() . '/js/all.js', array(), '5.15.1', true );
	wp_register_script( 'Slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js', null, null, true );
    wp_enqueue_script('Slick');
	wp_enqueue_script( 'aoretown', get_template_directory_uri() . '/js/aoretown.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'aore-town-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aore_town_scripts' );