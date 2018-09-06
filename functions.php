<?php
/**
 * arp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package arp
 */

if ( ! function_exists( 'arp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on arp, use a find and replace
		 * to change 'arp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'arp' ),
			'footer-1' => __( 'Footer Menu 1', '' ),
			'footer-2' => __( 'Footer Menu 2', '' ),
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
		add_theme_support( 'custom-background', apply_filters( 'arp_custom_background_args', array(
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
add_action( 'after_setup_theme', 'arp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'arp_content_width', 640 );
}
add_action( 'after_setup_theme', 'arp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'arp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'arp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function arp_scripts() {
	wp_enqueue_style( 'arp-style', get_template_directory_uri() . '/css/style.css' );

	wp_enqueue_script( 'arp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'arp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'init', 'register_press_post_types' );
function register_press_post_types() {
	$args = array(
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'menu_position'       => 2,
		'hierarchical'        => false,
		'taxonomies'  => array( 'category', 'post_tag' ),
		'rewrite' => array(
			'slug'       => 'projects',
		),
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions',
		),
		'labels' => array(
			'name'               => __( 'Projects' 	),
			'singular_name'      => __( 'Project' 	),
			'menu_name'          => __( 'Projects' 	),
			'name_admin_bar'     => __( 'Projects' 	),
			'add_new'            => __( 'Add New'	),
			'add_new_item'       => __( 'Add New Project'	 ),
			'edit_item'          => __( 'Edit Project'		 ),
			'new_item'           => __( 'New Project'		 ),
			'view_item'          => __( 'View Project'		 ),
			'search_items'       => __( 'Search Projects'		 ),
			'not_found'          => __( 'No Projects found'	 ),
			'not_found_in_trash' => __( 'No Projects found in trash'	 ),
			'all_items'          => __( 'All Projects'			     ),
			'parent_item'        => __( 'Parent Project'				 ),
			'parent_item_colon'  => __( 'Parent Project:'			 ),
			'archive_title'      => __( 'Project'					 ),
		)
	);
	register_post_type(
		'project',
		$args
	);
}
add_action( 'init', 'register_accreditations_post_types' );
function register_accreditations_post_types() {
	$args = array(
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'menu_position'       => 3,
		'hierarchical'        => false,
		'taxonomies'  => array( 'category' ),
		'rewrite' => array(
			'slug'       => 'accreditations',
		),
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions',
		),
		'labels' => array(
			'name'               => __( 'Accreditations' 	),
			'singular_name'      => __( 'Accreditation' 	),
			'menu_name'          => __( 'Accreditations' 	),
			'name_admin_bar'     => __( 'Accreditations' 	),
			'add_new'            => __( 'Add New'	),
			'add_new_item'       => __( 'Add New Accreditation'	 ),
			'edit_item'          => __( 'Edit Accreditation'		 ),
			'new_item'           => __( 'New Accreditation'		 ),
			'view_item'          => __( 'View Accreditation'		 ),
			'search_items'       => __( 'Search Accreditations'		 ),
			'not_found'          => __( 'No Accreditation found'	 ),
			'not_found_in_trash' => __( 'No Accreditation found in trash'	 ),
			'all_items'          => __( 'All Accreditations'			     ),
			'parent_item'        => __( 'Parent Accreditation'				 ),
			'parent_item_colon'  => __( 'Parent Accreditation:'			 ),
			'archive_title'      => __( 'Accreditations'					 ),
		)
	);
	register_post_type(
		'accreditations',
		$args
	);
}
add_action( 'init', 'register_group_post_types' );
function register_group_post_types() {
	$args = array(
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'menu_position'       => 5,
		'hierarchical'        => false,
		'taxonomies'  => array( 'category' ),
		'rewrite' => array(
			'slug'       => 'group-and-associates',
		),
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions',
		),
		'labels' => array(
			'name'               => __( 'Group and Associates' 	),
			'singular_name'      => __( 'G&A Member' 	),
			'menu_name'          => __( 'Group and Associates' 	),
			'name_admin_bar'     => __( 'Group and Associates' 	),
			'add_new'            => __( 'Add New G&A Member'	),
			'add_new_item'       => __( 'Add New G&A Member'	 ),
			'edit_item'          => __( 'Edit G&A Member'		 ),
			'new_item'           => __( 'New G&A Member'		 ),
			'view_item'          => __( 'View G&A Member'		 ),
			'search_items'       => __( 'Search Group and Associates'		 ),
			'not_found'          => __( 'No G&A Member found'	 ),
			'not_found_in_trash' => __( 'No G&A Member found in trash'	 ),
			'all_items'          => __( 'All Group and Associates'			     ),
			'parent_item'        => __( 'Parent G&A Member'				 ),
			'parent_item_colon'  => __( 'Parent G&A Member:'			 ),
			'archive_title'      => __( 'Group and Associates'					 ),
		)
	);
	register_post_type(
		'group',
		$args
	);
}
add_action( 'init', 'register_team_post_types' );
function register_team_post_types() {
	$args = array(
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'menu_position'       => 3,
		'hierarchical'        => false,
		'taxonomies'  => array( 'category' ),
		'rewrite' => array(
			'slug'       => 'team',
		),
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions',
		),
		'labels' => array(
			'name'               => __( 'Team' 	),
			'singular_name'      => __( 'Team Member' 	),
			'menu_name'          => __( 'Team' 	),
			'name_admin_bar'     => __( 'Team' 	),
			'add_new'            => __( 'Add New Team Member'	),
			'add_new_item'       => __( 'Add New Team Member'	 ),
			'edit_item'          => __( 'Edit Team Member'		 ),
			'new_item'           => __( 'New Team Member'		 ),
			'view_item'          => __( 'View Team Member'		 ),
			'search_items'       => __( 'Search Team'		 ),
			'not_found'          => __( 'No Team Member found'	 ),
			'not_found_in_trash' => __( 'No Team Member found in trash'	 ),
			'all_items'          => __( 'All Team Members'			     ),
			'parent_item'        => __( 'Parent Team Member'				 ),
			'parent_item_colon'  => __( 'Parent Team Member:'			 ),
			'archive_title'      => __( 'Team'					 ),
		)
	);
	register_post_type(
		'team',
		$args
	);
}

add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','team',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function setup_image_sizes() {
    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'homepage-slider', 1140, 520, true );
    }
}
add_action( 'after_setup_theme', 'setup_image_sizes' );

function post_image_sizes($sizes){
    $custom_sizes = array(
        'homepage-slider' => 'Homepage Slider'
    );
    return array_merge( $sizes, $custom_sizes );
}
add_filter('image_size_names_choose', 'post_image_sizes');
?>