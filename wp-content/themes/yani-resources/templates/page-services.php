<?php
/**
 * Template Name: Services
 * 
 * Services Page Template - Can be selected from Page Attributes
 *
 * @package Yani Resources
 */

get_header();

// Enqueue page-specific CSS
wp_enqueue_style( 'yani-services', get_template_directory_uri() . '/assets/css/services.css', array( 'yani-global' ), '1.0.0' );

// Get current page ID for ACF fields
$page_id = get_the_ID();

// Hero Section
yani_render_hero(
    $page_id,
    'services_',
    get_template_directory_uri() . '/assets/images/home-hero.jpg'
);
?>

<!-- Services Page Content -->
<section class="services-page">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <div class="services-page__content-wrapper">
                    <?php
                    // Get ACF fields - defaults are handled in ACF field definitions
                    $license = get_field( 'services_license', $page_id );
                    $title = get_field( 'services_title', $page_id );
                    $content = get_field( 'services_content', $page_id );
                    ?>
                    
                    <p class="services-page__license"><?php echo esc_html( $license ); ?></p>
                    <h2 class="services-page__title"><?php echo wp_kses_post( $title ); ?></h2>
                    <div class="services-page__content"><?php echo apply_filters( 'the_content', $content ); ?></div>
                </div>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6">
                <div class="services-page__image-wrapper">
                    <?php
                    $services_image = get_field( 'services_image', $page_id );
                    if ( $services_image ) {
                        echo '<img src="' . esc_url( $services_image ) . '" alt="Electrical Services" class="services-page__image">';
                    } else {
                        // Default placeholder or no image
                        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/worker-electrician.jpg' ) . '" alt="Electrical Services" class="services-page__image">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Second Services Section (Labour Hire) -->
<section class="services-page services-page--reversed">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Image -->
            <div class="col-md-6">
                <div class="services-page__image-wrapper">
                    <?php
                    $section_2_image = get_field( 'services_section_2_image', $page_id );
                    if ( $section_2_image ) {
                        echo '<img src="' . esc_url( $section_2_image ) . '" alt="Labour Hire Services" class="services-page__image">';
                    } else {
                        // Default placeholder or no image
                        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/worker-electrician.jpg' ) . '" alt="Labour Hire Services" class="services-page__image">';
                    }
                    ?>
                </div>
            </div>
            
            <!-- Right Column: Content -->
            <div class="col-md-6">
                <div class="services-page__content-wrapper">
                    <?php
                    $section_2_title = get_field( 'services_section_2_title', $page_id );
                    $section_2_content = get_field( 'services_section_2_content', $page_id );
                    ?>
                    
                    <h2 class="services-page__title"><?php echo wp_kses_post( $section_2_title ); ?></h2>
                    <div class="services-page__content"><?php echo apply_filters( 'the_content', $section_2_content ); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

