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

// Hero Section - Get ACF fields with fallbacks
$hero_image = get_field( 'services_hero_image', $page_id );
if ( ! $hero_image ) {
    $hero_image = get_template_directory_uri() . '/assets/images/home-hero.jpg';
}
$hero_headline = get_field( 'services_hero_headline', $page_id );
if ( ! $hero_headline ) {
    $hero_headline = 'Our Services';
}
// Pass variables to template part
set_query_var( 'hero_image', $hero_image );
set_query_var( 'hero_headline', $hero_headline );
get_template_part( 'template-parts/components/hero' );
?>

<!-- Services Page Content -->
<section class="services-page">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Content -->
            <div class="col-md-6">
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

<?php
get_footer();

