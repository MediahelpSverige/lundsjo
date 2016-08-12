<?php


if(function_exists('register_nav_menus')){


	register_nav_menus(


		array(


			'main_nav' => 'Main Navigation Menu',


			'footer_nav' => 'Main Footer Menu'


			)


	);


}

add_theme_support( 'post-thumbnails' ); 



function landqvist_widgets_init() {





	register_sidebar( array(


		'name'          => 'Home right sidebar',


		'id'            => 'home_right_1',


		'before_widget' => '<div class="sidebar-wrapper">',


		'after_widget'  => '</div>',


		'before_title'  => '<h2 class="rounded">',


		'after_title'   => '</h2>',


	) );





	register_sidebar( array(


	'name' => __( 'Footer Widget adress', 'landqvist' ),


	'id' => 'footer-adress',


	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),


	'before_widget' => '<aside id="%1$s" class="widget %2$s">',


	'after_widget' => '</aside>',


	'before_title' => '<h3 class="widget-title">',


	'after_title' => '</h3>',


	) );


	register_sidebar( array(


	'name' => __( 'Öppettider', 'landqvist' ),


	'id' => 'opening-hours',


	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),


	'before_widget' => '<aside id="%1$s" class="widget %2$s">',


	'after_widget' => '</aside>',


	'before_title' => '<h3 class="widget-title">',


	'after_title' => '</h3>',


	) );





	register_sidebar( array(


	'name' => __( 'Footer Widget Länkar', 'landqvist' ),


	'id' => 'footer-links',


	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),


	'before_widget' => '<aside id="%1$s" class="widget %2$s">',


	'after_widget' => '</aside>',


	'before_title' => '<h3 class="widget-title">',


	'after_title' => '</h3>',


	) );





	register_sidebar( array(


	'name' => __( 'Header Kontaktinfo', 'landqvist' ),


	'id' => 'header-kontakt',


	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),


	'before_widget' => '<aside id="%1$s" class="widget %2$s">',


	'after_widget' => '</aside>',


	'before_title' => '<h3 class="widget-title">',


	'after_title' => '</h3>',


	) );





}

add_action( 'widgets_init', 'landqvist_widgets_init' );


function tjanst_custom_init() {


    $args = array(


      'public' => true,


      'label'  => 'Referensbilder på förstasidan',


      'description'        => __( 'Showcase-bilder på förstasidan.', 'landqvist' ),


		'public'             => true,


		'publicly_queryable' => true,


		'show_ui'            => true,


		'show_in_menu'       => true,


		'query_var'          => true,


		'rewrite'            => array( 'slug' => 'showcase' ),


		'capability_type'    => 'post',


		'has_archive'        => true,


		'taxonomies'		 => array('category'),


		'hierarchical'       => false,


		'menu_position'      => null,


		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )


    );


    register_post_type( 'showcase', $args );


}


add_action( 'init', 'tjanst_custom_init' );