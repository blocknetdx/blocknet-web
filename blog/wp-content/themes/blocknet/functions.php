<?php
if ( ! function_exists( 'blocknet_blog_setup' ) ) :

function blocknet_blog_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'blocknet', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'blocknet_blog' ),
        'social'  => __( 'Social Links Menu', 'blocknet_blog' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // blocknet_blog_setup

add_action( 'after_setup_theme', 'blocknet_blog_setup' );


if ( ! function_exists( 'blocknet_blog_init' ) ) :

function blocknet_blog_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // blocknet_blog_setup

add_action( 'init', 'blocknet_blog_init' );


if ( ! function_exists( 'blocknet_blog_custom_image_sizes_names' ) ) :

function blocknet_blog_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'blocknet_blog_custom_image_sizes_names' );
endif;// blocknet_blog_custom_image_sizes_names



if ( ! function_exists( 'blocknet_blog_widgets_init' ) ) :

function blocknet_blog_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'blocknet_blog_widgets_init' );
endif;// blocknet_blog_widgets_init



if ( ! function_exists( 'blocknet_blog_customize_register' ) ) :

function blocknet_blog_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'blocknet_blog_customize_register' );
endif;// blocknet_blog_customize_register


if ( ! function_exists( 'blocknet_blog_enqueue_scripts' ) ) :
    function blocknet_blog_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'blocknet-webfont' );
    wp_enqueue_script( 'blocknet-webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', false, null, false);

    wp_register_script( 'inline-script-1', '', [], '', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'WebFont.load({  google: {    families: ["IBM Plex Sans:300,regular,italic,500,600,700"]  }});');

    wp_register_script( 'inline-script-2', '', [], '', false );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);');

    wp_deregister_script( 'blocknet-jquerydcefc' );
    wp_enqueue_script( 'blocknet-jquerydcefc', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f1960143510ee817fa57da1', false, null, true);

    wp_deregister_script( 'blocknet-webflow' );
    wp_enqueue_script( 'blocknet-webflow', get_template_directory_uri() . '/js/webflow.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */
    wp_enqueue_style( 'wp-webflow-compatibility', get_template_directory_uri().'/css/wp-webflow.css', false, null);

    wp_deregister_style( 'blocknet-normalize' );
    wp_enqueue_style( 'blocknet-normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

    wp_deregister_style( 'blocknet-webflow' );
    wp_enqueue_style( 'blocknet-webflow', get_template_directory_uri() . '/css/webflow.css', false, null, 'all');

    wp_deregister_style( 'blocknet-blocknetwebsiteprojectwebflow' );
    wp_enqueue_style( 'blocknet-blocknetwebsiteprojectwebflow', get_template_directory_uri() . '/css/blocknet-website-project.webflow.css', false, null, 'all');

    wp_deregister_style( 'blocknet-style' );
    wp_enqueue_style( 'blocknet-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'blocknet_blog_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>