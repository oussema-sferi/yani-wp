<?php
/**
 * Template Name: Home Page
 * 
 * Home Page Template - Can be selected from Page Attributes
 *
 * @package Yani Resources
 */

get_header();

// Enqueue page-specific CSS
wp_enqueue_style( 'yani-home', get_template_directory_uri() . '/assets/css/home.css', array( 'yani-global' ), '1.0.0' );

// Get current page ID for ACF fields
$page_id = get_the_ID();

// Hero Section
yani_render_hero(
    $page_id,
    'home_',
    get_template_directory_uri() . '/assets/images/home-hero.jpg'
);
?>

<!-- Intro Bar -->
<section class="intro">
    <div class="container intro__container">
        <div class="row g-5">
            <div class="col-md-6 intro__text">
                <p class="text-large"><?php echo esc_html( get_field( 'home_intro_text_1', $page_id ) ?: 'Welcome to Yani Resources. Delivering specialised electrical and labour hire services, we are powered by integrity, community, and skilled delivery.' ); ?></p>
            </div>
            <div class="col-md-6 intro__text">
                <p class="text-large"><?php echo esc_html( get_field( 'home_intro_text_2', $page_id ) ?: 'Proudly Aboriginal-owned, we provide high-quality services across construction, mining, government and infrastructure sectors, combining industry expertise with cultural respect.' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services">
    <div class="container">
        <h2 class="services__title heading-primary"><?php echo esc_html( get_field( 'home_services_title', $page_id ) ?: 'Our Core Services' ); ?></h2>
        <div class="row services__grid g-5">
            <div class="col-md-6 services__card">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Electrician.svg' ); ?>" alt="Electrical Icon" class="services__icon">
                <h3 class="services__card-title heading-secondary"><?php echo esc_html( get_field( 'home_services_left_subtitle', $page_id ) ?: 'Electrical & Instrumentation' ); ?></h3>
                <p class="services__card-description text-medium"><?php echo esc_html( get_field( 'home_services_left_text', $page_id ) ?: 'Electrical contracting across installations, maintenance and commissioning. EC16722.' ); ?></p>
                <a href="#" class="btn btn--outline">Learn More</a>
            </div>
            <div class="col-md-6 services__card">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Labour.svg' ); ?>" alt="Labour Icon" class="services__icon">
                <h3 class="services__card-title heading-secondary"><?php echo esc_html( get_field( 'home_services_right_subtitle', $page_id ) ?: 'Labour Hire & Talent Deployment' ); ?></h3>
                <p class="services__card-description text-medium"><?php echo esc_html( get_field( 'home_services_right_text', $page_id ) ?: 'Skilled, site-ready personnel supporting construction, mining and industrial operations.' ); ?></p>
                <a href="#" class="btn btn--outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Logos Section -->
<section class="logos">
    <div class="container logos__container">
        <div class="row align-items-center g-4">
            <div class="col-md-6 logos__item text-center">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Yani-Logo-Pos.png' ); ?>" alt="Yani Resources Logo" class="logos__image logos__image--yani">
            </div>
            <div class="col-md-6 logos__item text-center">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/sn.png' ); ?>" alt="Supply Nation Registered" class="logos__image logos__image--supply-nation">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about">
    <div class="container about__container">
        <div class="row g-5">
            <div class="col-md-6 about__quote">
                <h2 class="about__quote-text heading-primary"><?php echo get_field( 'home_about_quote', $page_id ) ?: '”Yani” is a Noongar word meaning peace.<br>It reflects our mission, to create stronger communities through connection, opportunity and support.'; ?></h2>
            </div>
            <div class="col-md-6 about__content text-medium">
                <p class="about__content-intro"><?php echo esc_html( get_field( 'home_about_intro', $page_id ) ?: 'We\'re committed to building partnerships that deliver on scope, safety and social value. Here\'s why clients choose Yani Resources:' ); ?></p>
                <ul class="about__content-list">
                    <?php
                    $about_list = get_field( 'home_about_list', $page_id );
                    if ( $about_list ) {
                        foreach ( $about_list as $item ) {
                            echo '<li>' . esc_html( $item['item'] ) . '</li>';
                        }
                    } else {
                        // Default fallback
                        echo '<li>Consistent, high-quality project delivery</li>';
                        echo '<li>Workforce capability with cultural responsibility</li>';
                        echo '<li>Clear communication, safety and accountability</li>';
                        echo '<li>Meeting ESG and Indigenous procurement goals</li>';
                    }
                    ?>
                </ul>
                <p class="about__content-text"><?php echo esc_html( get_field( 'home_about_text', $page_id ) ?: 'By building capabilities and creating pathways, we empower our clients to deliver meaningful outcomes, advancing projects, uplifting people, and strengthening the communities they serve.' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Feature Image Section -->
<section class="feature-image">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-banner-logo.webp' ); ?>" alt="Feature Image" class="feature-image__img">
</section>

<!-- Mission Vision Section -->
<section class="mission-vision">
    <div class="container mission-vision__container">
        <div class="row g-5">
            <div class="col-md-6 mission-vision__item">
                <h3 class="mission-vision__title heading-primary"><?php echo esc_html( get_field( 'home_mission_title', $page_id ) ?: 'Our Mission' ); ?></h3>
                <p class="mission-vision__text text-medium"><?php echo esc_html( get_field( 'home_mission', $page_id ) ?: 'To deliver exceptional services while creating long-term employment pathways and cultural empowerment.' ); ?></p>
            </div>
            <div class="col-md-6 mission-vision__item">
                <h3 class="mission-vision__title heading-primary"><?php echo esc_html( get_field( 'home_vision_title', $page_id ) ?: 'Our Vision' ); ?></h3>
                <p class="mission-vision__text text-medium"><?php echo esc_html( get_field( 'home_vision', $page_id ) ?: 'A future where commercial success and community strength go hand in hand.' ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

