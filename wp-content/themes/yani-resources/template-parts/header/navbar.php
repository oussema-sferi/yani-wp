<?php
/**
 * Navigation Bar Template Part
 *
 * @package Yani Resources
 */

// Get current page info for active state
$is_home = is_front_page() || is_home();
$is_about = is_page( 'about-us' ) || is_page_template( 'page-about-us.php' );
?>
<header class="header">
    <div class="container header__container">
        <div class="row align-items-center">
            <div class="col-auto">
                <button class="header__hamburger" aria-label="Toggle navigation">
                    <span class="header__hamburger-bar"></span>
                    <span class="header__hamburger-bar"></span>
                    <span class="header__hamburger-bar"></span>
                </button>
            </div>
            <div class="col">
                <nav class="header__nav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'header__nav-list',
                        'fallback_cb'    => 'yani_resources_fallback_menu',
                        'depth'          => 1,
                    ) );
                    ?>
                </nav>
            </div>
            <div class="col-auto">
                <div class="header__logo">
                    YANI RESOURCES
                </div>
            </div>
        </div>
    </div>
</header>

