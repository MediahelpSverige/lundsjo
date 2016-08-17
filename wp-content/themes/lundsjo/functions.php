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
	$query_vars['posts_per_page'] = -1;
	

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


      'label'  => 'Bildspel på förstasidan',


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


class My_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl(&$output, $depth) {

    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"hidden-menu\">\n";



  }

function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		if ($depth != 0) {
			
			unset($classes);
			$classes = array();
			$classes[] = 'trigger-cat';

		}

		/**
		 * Filter the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param array  $args  An array of arguments.
		 * @param object $item  Menu item data object.
		 * @param int    $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filter the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
		 * @param int    $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filter the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
		 * @param int    $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		/**
		 * Filter the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param object $item  The current menu item.
		 * @param array  $args  An array of {@see wp_nav_menu()} arguments.
		 * @param int    $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filter a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string $title The menu item's title.
		 * @param object $item  The current menu item.
		 * @param array  $args  An array of {@see wp_nav_menu()} arguments.
		 * @param int    $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		//print_r($item);

		if ($item->menu_item_parent == 0){



		}



		if ($item->post_name == 'portfolio') {

		$item_output = $args->before;
		$item_output .= '<a data-menuanchor="Portfolio" href="#Portfolio" class="toggle-child"'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
			
		}else if ($item->post_name == 'referenser'){

		$item_output = $args->before;
		$item_output .= '<a data-menuanchor="Om" '. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		}else if($item->post_name == 'om-os'){

			$item_output = $args->before;
		$item_output .= '<a data-menuanchor="Kontakt" '. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		} else if($item->post_name == 'kontakt'){

			$item_output = $args->before;
		$item_output .= '<a data-menuanchor="Kontakt" '. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		}else{

					$item_output = $args->before;
		$item_output .= '<a data-menuanchor="Om" '. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		}

		/**
		 * Filter a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string $item_output The menu item's starting HTML output.
		 * @param object $item        Menu item data object.
		 * @param int    $depth       Depth of menu item. Used for padding.
		 * @param array  $args        An array of {@see wp_nav_menu()} arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}


  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    	$output .= "</li>\n";
  }


}
