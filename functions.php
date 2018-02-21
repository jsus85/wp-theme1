<?php
/**
 * poliexport functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package poliexport
 */

if ( ! function_exists( 'poliexport_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function poliexport_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on poliexport, use a find and replace
		 * to change 'poliexport' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'poliexport', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'poliexport' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'poliexport_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'poliexport_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function poliexport_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'poliexport_content_width', 640 );
}
add_action( 'after_setup_theme', 'poliexport_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function poliexport_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'poliexport' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'poliexport' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'poliexport_widgets_init' );


// Register Sidebars
function general() {

	$args = array(
		'id'            => 'general',
		'class'         => 'general',
		'name'          => __( 'general', 'text_domain' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'general' );

/**
 * Enqueue scripts and styles.
 */
function poliexport_scripts() {
	wp_enqueue_style( 'poliexport-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'poliexport_scripts' );

// ocultar la barra de menu en el front 
add_filter('show_admin_bar', '__return_false' );

// Crear Slider del home
// Register Custom Post Type
function slider_home() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slider Home', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sliders Home', 'text_domain' ),
		'name_admin_bar'        => __( 'Sliders', 'text_domain' ),
		'archives'              => __( '', 'text_domain' ),
		'attributes'            => __( '', 'text_domain' ),
		'parent_item_colon'     => __( '', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Nuevo', 'text_domain' ),
		'add_new'               => __( 'Nuevo Slider', 'text_domain' ),
		'new_item'              => __( 'Nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar Slider', 'text_domain' ),
		'update_item'           => __( 'Actualizar Slider', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver sliders', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Slider Home', 'text_domain' ),
		'description'           => __( 'Banner para el Home', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'register_meta_box_cb' => 'add_sliders_metaboxes',
		'register_meta_box_cb' => 'add_titulo_metaboxes' ,
		'register_meta_box_cb' => 'add_subtitulo_metaboxes'		

	);
	register_post_type( 'slider_home', $args );

}
add_action( 'init', 'slider_home', 0 );

// --------------------------- TITULO ------------------------------------------------
add_action( 'add_meta_boxes', 'add_titulo_metaboxes', 10, 1 );
function add_titulo_metaboxes() {
	add_meta_box('wpt_sliders_titulo', 'Agregar Titulo: ', 'wpt_sliders_titulo', 'slider_home', 'normal', 'high');
}

function wpt_sliders_titulo() {
	 global $post;
	 echo "<textarea id='wps_titulo' name='wps_titulo' rows='4' style='width:100%;'  >".esc_attr( get_post_meta( $post->ID, 'wps_titulo', true ) )."</textarea>";
}
// -------------------------------------------------------------------------------- 


// --------------------------- SUB TITULO ------------------------------------------------
add_action( 'add_meta_boxes', 'add_subtitulo_metaboxes', 10, 1 );
function add_subtitulo_metaboxes() {
	add_meta_box('wpt_sliders_subtitulo', 'Agregar Sub Titulo: ', 'wpt_sliders_subtitulo', 'slider_home', 'normal', 'high');
}

function wpt_sliders_subtitulo() {
	 global $post;
	 echo "<textarea id='wps_subtitulo' name='wps_subtitulo' rows='4' style='width:100%;'  >".esc_attr( get_post_meta( $post->ID, 'wps_subtitulo', true ) )."</textarea>";
}
// -------------------------------------------------------------------------------- 



// --------------------- Add the Events Meta Boxes --- Enlaces
add_action( 'add_meta_boxes', 'add_sliders_metaboxes' );
function add_sliders_metaboxes() {
	add_meta_box('wpt_sliders_location', 'Agregar Enlaces: ', 'wpt_sliders_location', 'slider_home', 'normal', 'high');
}

// The Event Location Metabox
function wpt_sliders_location() {
	 global $post;
// https://cybmeta.com/custom-fields-y-meta-boxes-para-posts-de-wordpress
   ?>
      <p>
         <label class="label" for="cyb_name"><b><?php _e( 'Introduce URL Contactenos', 'cyb_textdomain' ); ?></b></label>
          <input  name="cyb_name" id="cyb_name" style="width: 100%" type="text" value="<?php echo esc_attr( get_post_meta( $post->ID, 'cyb_name', true ) ); ?>">
      </p>
      <p>
		<label class="label" for="cyb_readmore"><b><?php _e( 'Introduce URL Leer mas', 'cyb_textdomain' ); ?></b></label>
		<input  name="cyb_readmore" id="cyb_readmore" style="width: 100%" type="text" value="<?php echo esc_attr( get_post_meta( $post->ID, 'cyb_readmore', true ) ); ?>">
      </p>
   <?php
}


// Guardar Informacion 
add_action( 'save_post', function ($post_id) {

	// titulo 
    if( isset( $_POST['wps_titulo'] ) && $_POST['wps_titulo'] != "" ) {
		update_post_meta($post_id, 'wps_titulo', $_POST['wps_titulo'] );
	}	
	

	// titulo 
    if( isset( $_POST['wps_subtitulo'] ) && $_POST['wps_subtitulo'] != "" ) {
		update_post_meta($post_id, 'wps_subtitulo', $_POST['wps_subtitulo'] );
	}	
	


    if( isset( $_POST['cyb_name'] ) && $_POST['cyb_name'] != "" ) {
		update_post_meta($post_id, 'cyb_name', $_POST['cyb_name'] );
	}

    if( isset( $_POST['cyb_readmore'] ) && $_POST['cyb_readmore'] != "" ) {
		update_post_meta($post_id, 'cyb_readmore', $_POST['cyb_readmore'] );
	}	


});


