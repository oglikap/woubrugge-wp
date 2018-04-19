<?php

// Add scripts and stylesheets
function woubrugge_scripts() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
  wp_enqueue_script( 'dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js' );
  wp_enqueue_script( 'scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js' );
  wp_enqueue_script( 'scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js' );
  wp_enqueue_script( 'onvisible', get_template_directory_uri() . '/assets/js/jquery.onvisible.min.js' );
  wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js' );
  wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
  wp_enqueue_script( 'scrollback', get_template_directory_uri() . '/assets/js/scrollback.js' );
}
add_action( 'wp_enqueue_scripts', 'woubrugge_scripts');

// Wordpress titles
add_theme_support( 'title-tag' );

// Add menu support
register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);

// Custom menu
function wpb_woubrugge_menu() {
  register_nav_menu('woubrugge-menu',__('Woubrugge Menu'));
}
add_action( 'init', 'wpb_woubrugge_menu');

// Featured image
add_theme_support( 'post-thumbnails');
add_post_type_support( 'productions', 'thumbnail' );

add_image_size( 'square', 250, 250, true );
add_image_size( 'square-thmb', 150, 150, true );
add_image_size( 'widescreen', 320, 180, true );
add_image_size( 'portrait', 400, 600, true );
add_image_size( 'landscape', 960, 540, true );
add_image_size( 'very-small', 100, 9999 );

// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );

// Excerpt length
function my_excerpt_length( $length ) {
      return 24;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );
remove_filter( 'menu_order', 'custom_menu_order' );

function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 3', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

/* Logo support */
add_theme_support( 'custom-logo', array(
	'height'      => 240, // set to your dimensions
	'width'       => 240,
	'flex-height' => true,
	'flex-width'  => true,
) );

/* Add custom Post Types */
function create_custom_post_types() {
  register_post_type( 'techniek',
    array(
      'labels' => array(
        'name' => __( 'Technieken' ),
        'singular_name' => __( 'Techniek' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'techniek' ),
      'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
    )
  );

  register_post_type( 'press',
    array(
      'labels' => array(
        'name' => __( 'Pers' ),
        'singular_name' => __( 'Pers' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'pers' ),
      'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
    )
  );
}
add_action( 'init', 'create_custom_post_types' );
