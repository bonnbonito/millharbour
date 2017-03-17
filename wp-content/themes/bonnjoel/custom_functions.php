<?php
/**
 * Bonn Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BonnJoel
 */
function bonnjoel_addmore_scripts() {
	/*
	 * Enqueue custom scripts and styles	 
	 */
	wp_enqueue_style( 'bonnjoel_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'bonnjoel_fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'bonnjoel_googlefonts', 'https://fonts.googleapis.com/css?family=Bitter:400,700|Raleway:400,700' );	
	wp_enqueue_style( 'bonnjoel_mmenu-css', get_template_directory_uri() . '/css/mmenu.css' );
	wp_register_style( 'bonnjoel_slickcss', get_template_directory_uri() . '/css/slick.css' );
	wp_register_style( 'bonnjoel_slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'bonnjoel_lightbox-css', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'bonnjoel_custom-css', get_template_directory_uri() . '/custom.css' );

	wp_register_script( 'bonnjoel_mmenu-js', get_template_directory_uri() . '/js/mmenu.min.js', array('jquery'), 'v5.6.5', true );
	wp_register_script( 'bonnjoel_lightbox-js', get_template_directory_uri() . '/js/lightbox.js', 'jquery', 'v2.8.2', true );
	wp_register_script( 'bonnjoel_imgloaded-js', get_template_directory_uri() . '/js/imagesloaded.min.js', '', 'v4.1.0', true );	
	wp_register_script( 'bonnjoel_fastclick', get_template_directory_uri() . '/js/fastclick.js', '', '1.0.6' );
	wp_register_script( 'bonnjoel_nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array('jquery'), false, true );
	wp_register_script( 'bonnjoel_slickjs', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.6.0', true );

	wp_enqueue_script( 'bonnjoel_imgloaded-js' );
	wp_enqueue_script( 'bonnjoel_fastclick' );
	wp_enqueue_script( 'bonnjoel_mmenu-js' );
	wp_enqueue_script( 'bonnjoel_nicescroll' );
	wp_enqueue_script( 'bonnjoel_tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true );
	wp_enqueue_script( 'bonnjoel_bootstrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery', 'bonnjoel_tether'), '0.0.6', true );	
	wp_enqueue_script( 'bonnjoel_theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery','bonnjoel_mmenu-js', 'bonnjoel_nicescroll', 'bonnjoel_imgloaded-js'), false, true );	

	if (is_singular( array('case_studies', 'service') )) {
		wp_enqueue_style( 'bonnjoel_slickcss' );
		wp_enqueue_style( 'bonnjoel_slick-theme' );
		wp_enqueue_script( 'bonnjoel_slickjs' );
	}
	
}

add_action( 'wp_enqueue_scripts', 'bonnjoel_addmore_scripts' );

function bonnjoel_more_widgets() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'bonnjoel' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'bonnjoel' ),
		'before_widget' => '<section id="%1$s" class="footer-widget widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'bonnjoel' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'bonnjoel' ),
		'before_widget' => '<section id="%1$s" class="footer-widget widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'bonnjoel' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'bonnjoel' ),
		'before_widget' => '<section id="%1$s" class="footer-widget widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bonnjoel_more_widgets' );

add_theme_support( 'post-formats', array( 'video', 'gallery' ) );

add_image_size( 'team', 255, 255, true );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position'		=> 6.54
	));
}
