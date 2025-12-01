<?php
/**
 * Enqueue Styles and Scripts
 *
 * @package Yani Resources
 */

/**
 * Enqueue theme styles and scripts
 */
function yani_resources_enqueue_assets() {
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap', array(), null );
    
    // Theme global styles (always loaded)
    wp_enqueue_style( 'yani-global', get_template_directory_uri() . '/assets/css/global.css', array( 'bootstrap' ), '1.0.0' );
    
    // Page-specific CSS (will be conditionally loaded in templates)
    // home.css and about-us.css will be loaded when needed
    
    // Bootstrap JS
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );
    
    // Theme JS
    wp_enqueue_script( 'yani-script', get_template_directory_uri() . '/assets/js/script.js', array( 'bootstrap' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'yani_resources_enqueue_assets' );

