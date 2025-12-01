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

// Hero Section
yani_render_hero(
    $page_id,
    'contact_',
    get_template_directory_uri() . '/assets/images/home-hero.jpg'
);
?>

<!-- CTA Section -->
<section class="contact-cta">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $cta_text = get_field( 'contact_cta_text', $page_id );
                ?>
                <div class="contact-cta__text heading-primary">
                    <?php echo apply_filters( 'the_content', $cta_text ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

