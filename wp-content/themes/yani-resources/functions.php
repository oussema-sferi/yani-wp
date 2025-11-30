<?php
/**
 * Yani Resources Theme Functions
 *
 * @package Yani Resources
 */

/**
 * Enqueue styles and scripts
 */
function yani_resources_enqueue_assets() {
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap', array(), null );
    
    // Theme global styles (always loaded)
    wp_enqueue_style( 'yani-global', get_template_directory_uri() . '/css/global.css', array( 'bootstrap' ), '1.0.0' );
    
    // Page-specific CSS (will be conditionally loaded in templates)
    // home.css and about-us.css will be loaded when needed
    
    // Bootstrap JS
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );
    
    // Theme JS
    wp_enqueue_script( 'yani-script', get_template_directory_uri() . '/js/script.js', array( 'bootstrap' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'yani_resources_enqueue_assets' );

/**
 * Configure ACF to save/load JSON from theme folder
 * 
 * ACF field groups are stored as JSON files in /acf-json/
 * This allows for version control and easier editing.
 */
function yani_resources_acf_json_save_point( $path ) {
    // Update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // Return the path
    return $path;
}
add_filter( 'acf/settings/save_json', 'yani_resources_acf_json_save_point' );

function yani_resources_acf_json_load_point( $paths ) {
    // Remove original path (optional)
    unset( $paths[0] );
    
    // Append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    // Return paths
    return $paths;
}
add_filter( 'acf/settings/load_json', 'yani_resources_acf_json_load_point' );

