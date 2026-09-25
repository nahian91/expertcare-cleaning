<?php
/**
 * Expertcare Cleaning Theme Functions and Definitions
 *
 * @package Expertcare_Cleaning
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function expertcare_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Primary Navigation Menu', 'expertcare-cleaning' ),
    ) );
}
add_action( 'after_setup_theme', 'expertcare_theme_setup' );

function expertcare_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style( 
        'expertcare-fonts', 
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', 
        array(), 
        null 
    );

    // Theme Stylesheet
    wp_enqueue_style( 
        'expertcare-style', 
        get_template_directory_uri() . '/assets/css/style.css', 
        array(), 
        '1.0.0' 
    );

    // Frontend Main Script
    wp_enqueue_script( 
        'expertcare-main-js', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'expertcare_enqueue_scripts' );