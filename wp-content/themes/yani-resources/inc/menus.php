<?php
/**
 * Navigation Menus
 *
 * @package Yani Resources
 */

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
    $is_about = is_page( 'about-us' ) || is_page_template( 'templates/page-about-us.php' );
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

