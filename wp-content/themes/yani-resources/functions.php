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
 * Register navigation menu
 */
function yani_resources_register_menus() {
    register_nav_menu( 'primary', 'Primary Navigation Menu' );
}
add_action( 'after_setup_theme', 'yani_resources_register_menus' );

/**
 * Add custom classes to menu items
 */
function yani_resources_nav_menu_css_class( $classes, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
        $classes[] = 'header__nav-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'yani_resources_nav_menu_css_class', 10, 3 );

/**
 * Add custom classes to menu links
 */
function yani_resources_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
        $atts['class'] = 'header__nav-link';
        
        // Add active class if current page
        if ( in_array( 'current-menu-item', $item->classes ) || in_array( 'current-page-item', $item->classes ) ) {
            $atts['class'] .= ' active';
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'yani_resources_nav_menu_link_attributes', 10, 3 );

/**
 * Fallback menu if no menu is assigned
 */
function yani_resources_fallback_menu() {
    $is_home = is_front_page() || is_home();
    $is_about = is_page( 'about-us' ) || is_page_template( 'page-about-us.php' );
    ?>
    <ul class="header__nav-list">
        <li class="header__nav-item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__nav-link <?php echo $is_home ? 'active' : ''; ?>">Home</a>
        </li>
        <li class="header__nav-item">
            <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="header__nav-link <?php echo $is_about ? 'active' : ''; ?>">About Us</a>
        </li>
        <li class="header__nav-item"><a href="#" class="header__nav-link">Services</a></li>
        <li class="header__nav-item"><a href="#" class="header__nav-link">Indigenous Participation</a></li>
        <li class="header__nav-item"><a href="#" class="header__nav-link">Contact</a></li>
    </ul>
    <?php
}

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

