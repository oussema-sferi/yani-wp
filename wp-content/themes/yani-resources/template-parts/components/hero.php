<?php
/**
 * Hero Section Template Part
 *
 * @package Yani Resources
 */

// Get variables from query vars (passed via set_query_var) or use defaults
$hero_image = get_query_var( 'hero_image' );
if ( empty( $hero_image ) ) {
    $hero_image = get_template_directory_uri() . '/assets/images/home-hero.jpg';
}

$hero_headline = get_query_var( 'hero_headline' );
if ( empty( $hero_headline ) ) {
    $hero_headline = 'Building<br>Capability.<br>Creating<br>Opportunity.';
}
?>
<section class="hero" style="background-image: url('<?php echo esc_url( $hero_image ); ?>');">
    <div class="container hero__container">
        <div class="hero__logo">
            <div class="hero__logo-image"></div>
        </div>
        <h2 class="hero__headline"><?php echo wp_kses_post( $hero_headline ); ?></h2>
    </div>
</section>

