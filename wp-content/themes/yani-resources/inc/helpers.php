<?php
/**
 * Theme Helper Functions
 *
 * @package Yani Resources
 */

/**
 * Get hero section data and render hero template
 *
 * @param int    $page_id        Current page ID
 * @param string $field_prefix   ACF field prefix (e.g., 'home_', 'services_', 'about_')
 * @param string $default_image  Default hero image path (optional)
 */
function yani_render_hero( $page_id, $field_prefix, $default_image = '' ) {
    // Get hero image
    $hero_image = get_field( $field_prefix . 'hero_image', $page_id );
    if ( ! $hero_image ) {
        $hero_image = $default_image ?: get_template_directory_uri() . '/assets/images/home-hero.jpg';
    }
    
    // Get hero headline (defaults come from ACF field definitions)
    $hero_headline = get_field( $field_prefix . 'hero_headline', $page_id );
    
    // Pass variables to template part
    set_query_var( 'hero_image', $hero_image );
    set_query_var( 'hero_headline', $hero_headline );
    get_template_part( 'template-parts/components/hero' );
}

