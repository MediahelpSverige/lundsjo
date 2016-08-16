<?php


if(function_exists('register_nav_menus')){


	register_nav_menus(


		array(


			'main_nav' => 'Main Navigation Menu',


			'footer_nav' => 'Main Footer Menu'


			)


	);




}


function enqueue_jquery() {


		wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/jquery.js', NULL, false);


}


add_action('wp_enqueue_scripts', 'enqueue_jquery');


function my_enqueue_assets() {





	wp_enqueue_script( 'masonry',  get_template_directory_uri() . '/node_modules/masonry-layout/masonry.js', array( 'jquery' ), NULL, false);


	wp_enqueue_script( 'imagesloaded',  get_template_directory_uri() . '/node_modules/imagesloaded/imagesloaded.pkgd.js', array( 'jquery' ), NULL, false);


    wp_enqueue_script( 'script',  get_template_directory_uri() . '/js/script.js', array( 'jquery' ), NULL, true);


    global $wp_query;

    wp_localize_script( 'script', 'ajaxpagination', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
	'query_vars' => json_encode( $wp_query->query )
	));


}

add_action('wp_enqueue_scripts', 'my_enqueue_assets');



add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );


function my_ajax_pagination() {
    $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

    if ($_POST['page'] != 'allt') {

    	$query_vars['category_name'] = $_POST['page'];

      }

	$query_vars['post_type'] = 'showcase';

     $posts = new WP_Query( $query_vars );


     $GLOBALS['wp_query'] = $posts;


     while ( $posts->have_posts() ) { ?>

     	<?php $posts->the_post(); ?>

     				<div class="project-item">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail('large'); ?>
					<div class="title-bak"><h3 class="project-text"><?php the_title(); ?></h3></div>
				</a>
			</div>

        <?php }





    die();
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


function slideshow_post_init() {

	 $args = array(

	 	'public' => true,


      'label'  => 'Referensbilder på förstasidan',


      'description'        => __( 'Bildspel på förstasidan', 'landqvist' ),


		'public'             => true,


		'publicly_queryable' => true,


		'show_ui'            => true,


		'show_in_menu'       => true,


		'query_var'          => true,


		'rewrite'            => array( 'slug' => 'slide' ),


		'capability_type'    => 'post',


		'has_archive'        => true,


		'taxonomies'		 => array('category'),


		'hierarchical'       => false,


		'menu_position'      => null,


		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )




	);


register_post_type( 'slide', $args );

}


add_action( 'init', 'slideshow_post_init' );


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