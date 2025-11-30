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

