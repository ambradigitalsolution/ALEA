<?php
/**
 * Alea Computer functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function aleacomputer_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'aleacomputer' ),
            'footer' => esc_html__( 'Footer Menu', 'aleacomputer' ),
        )
    );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action( 'after_setup_theme', 'aleacomputer_setup' );

/**
 * Enqueue scripts and styles.
 */
function aleacomputer_scripts() {
    // Google Fonts: Inter
    wp_enqueue_style( 'aleacomputer-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );

    // Theme stylesheet.
    wp_enqueue_style( 'aleacomputer-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Main JS (will be created later)
    wp_enqueue_script( 'aleacomputer-main', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'aleacomputer_scripts' );
