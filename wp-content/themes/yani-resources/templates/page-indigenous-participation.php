<?php
/**
 * Template Name: Indigenous Participation
 * 
 * Indigenous Participation Page Template - Can be selected from Page Attributes
 *
 * @package Yani Resources
 */

get_header();

// Enqueue page-specific CSS
wp_enqueue_style( 'yani-indigenous-participation', get_template_directory_uri() . '/assets/css/indigenous-participation.css', array( 'yani-global' ), '1.0.0' );

// Get current page ID for ACF fields
$page_id = get_the_ID();

// Hero Section - Get ACF fields with fallbacks
$hero_image = get_field( 'indigenous_hero_image', $page_id );
if ( ! $hero_image ) {
    $hero_image = get_template_directory_uri() . '/assets/images/home-hero.jpg';
}
$hero_headline = get_field( 'indigenous_hero_headline', $page_id );
if ( ! $hero_headline ) {
    $hero_headline = 'Indigenous Participation';
}
// Pass variables to template part
set_query_var( 'hero_image', $hero_image );
set_query_var( 'hero_headline', $hero_headline );
get_template_part( 'template-parts/components/hero' );
?>

<!-- Intro Bar -->
<section class="intro">
    <div class="container intro__container">
        <div class="row g-5">
            <div class="col-md-6 intro__text">
                <?php
                $intro_text_1 = get_field( 'indigenous_intro_text_1', $page_id );
                ?>
                <p><?php echo esc_html( $intro_text_1 ); ?></p>
            </div>
            <div class="col-md-6 intro__text">
                <?php
                $intro_text_2 = get_field( 'indigenous_intro_text_2', $page_id );
                ?>
                <p><?php echo esc_html( $intro_text_2 ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Indigenous Participation Page Content -->
<section class="indigenous-participation-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Indigenous Participation page content will go here. This section can be customized with ACF fields.</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

