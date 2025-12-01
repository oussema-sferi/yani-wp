<?php
/**
 * Yani Resources Theme Functions
 *
 * @package Yani Resources
 */

// Load theme includes
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/menus.php';
require_once get_template_directory() . '/inc/acf.php';

/**
 * Register page templates from templates/ folder
 * This allows templates in subfolders to appear in the admin dropdown
 */
function yani_resources_add_page_templates( $templates ) {
    $templates['templates/page-home.php'] = 'Home Page';
    $templates['templates/page-about-us.php'] = 'About Us';
    $templates['templates/page-services.php'] = 'Services';
    $templates['templates/page-indigenous-participation.php'] = 'Indigenous Participation';
    $templates['templates/page-contact.php'] = 'Contact';
    return $templates;
}
add_filter( 'theme_page_templates', 'yani_resources_add_page_templates' );
