<?php
/**
 * Advanced Custom Fields Configuration
 *
 * @package Yani Resources
 */

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

/**
 * Configure ACF to load JSON from theme folder
 */
function yani_resources_acf_json_load_point( $paths ) {
    // Remove original path (optional)
    unset( $paths[0] );
    
    // Append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    // Return paths
    return $paths;
}
add_filter( 'acf/settings/load_json', 'yani_resources_acf_json_load_point' );

