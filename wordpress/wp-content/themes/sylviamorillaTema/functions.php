<?php
/**
 * Essense functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Essense
 * @since Essense 1.0
 */

/**
 * Essense only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// 	'gallery',
	// 	'status',
	// 	'audio',
	// 	'chat',
	// ) );




	//CUstom POst Type
	include 'inc/essense-cpt.php';
	//custom metabox
	include 'inc/cmb2-conf.php';

	//Custom admin users
	include 'inc/essense-useradmin.php';

	//Custom roles
	include 'inc/essense-roles.php';

	//Admin customize
	include 'inc/essense-admincustomize.php';


	//Require Plgugins com Tgm
	require_once get_template_directory() . '/PluginActivate/class-tgm-plugin-activation.php';
	add_action( 'tgmpa_register', 'cmb2_require_register_required_plugins' );

	function cmb2_require_register_required_plugins() {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(

			// This is an example of how to include a plugin bundled with a theme.
			array(
				'name'               => 'cmb2', // The plugin name.
				'slug'               => 'cmb2', // The plugin slug (typically the folder name).
				'source'             => get_template_directory() . '/lib/cmb2.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			array(
				'name'               => 'cmb2-relation', // The plugin name.
				'slug'               => 'cmb2-relation', // The plugin slug (typically the folder name).
				'source'             => get_template_directory() . '/lib/cmb2-relations.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			array(
				'name'               => 'ctfrom7', // The plugin name.
				'slug'               => 'ctfrom7', // The plugin slug (typically the folder name).
				'source'             => get_template_directory() . '/lib/contact-form-7.4.4.2.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			)
		);

		//settings
		$config = array(
			'id'           => 'cmb2-require',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => 'O Plguin CMB2 não pode ser instalado, instale-o manualmente',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => 'Active agora mesmo o Plgugin CMB2',                      // Message to output right before the plugins table.

		);

		tgmpa( $plugins, $config );
	}


}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );


/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );




/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */

 function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', true, '1.8.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');







		// add_action('admin_enqueue_scripts', 'my_enqueue');

function twentysixteen_scripts() {



	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Theme stylesheet Sylvia Morilla.
	wp_enqueue_style( 'twentysixteen-sm_styles', get_template_directory_uri() . '/stylesheets/styles.css', array( 'twentysixteen-style' ), '20160412' );
	wp_enqueue_style( 'twentysixteen-sm_carousel', get_template_directory_uri() . '/stylesheets/owl.carousel.css', array( 'twentysixteen-style' ), '20160412' );
	wp_enqueue_style( 'twentysixteen-sm_animate', get_template_directory_uri() . '/stylesheets/animate.css', array( 'twentysixteen-style' ), '20160412' );

	// THEME JS Sylvia Morilla


//	wp_enqueue_script( 'twentysixteen-sm-bootstrap', get_template_directory_uri() . '/bootstrap.min.js', array(), '20160412', true );
	// wp_enqueue_script( 'twentysixteen-sm-greensock', get_template_directory_uri() . '/js/greensock/TweenMax.min.js', array('jquery'), '20160412', true );
	// wp_enqueue_script( 'twentysixteen-sm-scrollmagic', get_template_directory_uri() . '/js/scrollmagic/uncompressed/ScrollMagic.js', array('jquery'), '20160412', true );
	// wp_enqueue_script( 'twentysixteen-sm-scrollmagicIdicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array('jquery'), '20160412', true );
	// wp_enqueue_script( 'twentysixteen-sm-jscarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20160412', true );
	// wp_enqueue_script( 'twentysixteen-sm-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20160412', true );


	// <script src="bootstrap.min.js"></script>
	// <script type="text/javascript" src="js/greensock/TweenMax.min.js"></script>
	// <script type="text/javascript" src="js/scrollmagic/uncompressed/ScrollMagic.js"></script>
	// <script type="text/javascript" src="js/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
	// <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	// <script src="js/owl.carousel.min.js"></script>
	// <script src="js/scripts.js"></script>

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	//wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


// blog
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
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );
