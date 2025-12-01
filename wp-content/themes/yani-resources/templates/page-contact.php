<?php
/**
 * Template Name: Contact
 * 
 * Contact Page Template - Can be selected from Page Attributes
 *
 * @package Yani Resources
 */

get_header();

// Enqueue page-specific CSS
wp_enqueue_style( 'yani-contact', get_template_directory_uri() . '/assets/css/contact.css', array( 'yani-global' ), '1.0.0' );

// Get current page ID for ACF fields
$page_id = get_the_ID();

// Hero Section - Get ACF fields with fallbacks
$hero_image = get_field( 'contact_hero_image', $page_id );
if ( ! $hero_image ) {
    $hero_image = get_template_directory_uri() . '/assets/images/home-hero.jpg';
}
$hero_headline = get_field( 'contact_hero_headline', $page_id );
if ( ! $hero_headline ) {
    $hero_headline = 'Contact Us';
}
// Pass variables to template part
set_query_var( 'hero_image', $hero_image );
set_query_var( 'hero_headline', $hero_headline );
get_template_part( 'template-parts/components/hero' );
?>

<!-- CTA Section -->
<section class="contact-cta">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $cta_text = get_field( 'contact_cta_text', $page_id );
                ?>
                <div class="contact-cta__text">
                    <?php echo apply_filters( 'the_content', $cta_text ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

