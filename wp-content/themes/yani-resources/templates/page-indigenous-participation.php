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

<!-- Partnering Section -->
<section class="indigenous-participation-page">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Content -->
            <div class="col-md-6">
                <div class="indigenous-participation-page__content-wrapper">
                    <?php
                    $partnering_title = get_field( 'indigenous_partnering_title', $page_id );
                    $partnering_content = get_field( 'indigenous_partnering_content', $page_id );
                    $partnering_subtitle = get_field( 'indigenous_partnering_subtitle', $page_id );
                    $partnering_partners = get_field( 'indigenous_partnering_partners', $page_id );
                    ?>
                    
                    <h2 class="indigenous-participation-page__title"><?php echo wp_kses_post( $partnering_title ); ?></h2>
                    <div class="indigenous-participation-page__content"><?php echo apply_filters( 'the_content', $partnering_content ); ?></div>
                    
                    <?php if ( $partnering_subtitle ) : ?>
                        <h3 class="indigenous-participation-page__subtitle"><?php echo esc_html( $partnering_subtitle ); ?></h3>
                    <?php endif; ?>
                    
                    <div class="indigenous-participation-page__content"><?php echo apply_filters( 'the_content', $partnering_partners ); ?></div>
                </div>
            </div>
            
            <!-- Right Column: Image -->
            <div class="col-md-6">
                <div class="indigenous-participation-page__image-wrapper">
                    <?php
                    $partnering_image = get_field( 'indigenous_partnering_image', $page_id );
                    if ( $partnering_image ) {
                        echo '<img src="' . esc_url( $partnering_image ) . '" alt="Partnering with Yani" class="indigenous-participation-page__image">';
                    } else {
                        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/worker-electrician.jpg' ) . '" alt="Partnering with Yani" class="indigenous-participation-page__image">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quotes Section -->
<section class="indigenous-quotes">
    <div class="container">
        <div class="row g-5">
            <!-- Left Quote -->
            <div class="col-md-6">
                <div class="indigenous-quotes__item">
                    <?php
                    $quote_left = get_field( 'indigenous_quote_left', $page_id );
                    $quote_left_text = $quote_left['quote'] ?? '';
                    $quote_left_name = $quote_left['name'] ?? '';
                    $quote_left_title = $quote_left['title'] ?? '';
                    ?>
                    <?php if ( $quote_left_text ) : ?>
                        <p class="indigenous-quotes__text">”<?php echo esc_html( $quote_left_text ); ?>”</p>
                    <?php endif; ?>
                    <?php if ( $quote_left_name ) : ?>
                        <p class="indigenous-quotes__name"><?php echo esc_html( $quote_left_name ); ?></p>
                    <?php endif; ?>
                    <?php if ( $quote_left_title ) : ?>
                        <p class="indigenous-quotes__title"><?php echo esc_html( $quote_left_title ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Right Quote -->
            <div class="col-md-6">
                <div class="indigenous-quotes__item">
                    <?php
                    $quote_right = get_field( 'indigenous_quote_right', $page_id );
                    $quote_right_text = $quote_right['quote'] ?? '';
                    $quote_right_name = $quote_right['name'] ?? '';
                    $quote_right_title = $quote_right['title'] ?? '';
                    ?>
                    <?php if ( $quote_right_text ) : ?>
                        <p class="indigenous-quotes__text">”<?php echo esc_html( $quote_right_text ); ?>”</p>
                    <?php endif; ?>
                    <?php if ( $quote_right_name ) : ?>
                        <p class="indigenous-quotes__name"><?php echo esc_html( $quote_right_name ); ?></p>
                    <?php endif; ?>
                    <?php if ( $quote_right_title ) : ?>
                        <p class="indigenous-quotes__title"><?php echo esc_html( $quote_right_title ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="indigenous-gallery">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="indigenous-gallery__wrapper">
                    <?php
                    $gallery_image_1 = get_field( 'indigenous_gallery_image_1', $page_id );
                    if ( ! $gallery_image_1 ) {
                        $gallery_image_1 = get_template_directory_uri() . '/assets/images/Yani-1_1.jpeg';
                    }
                    ?>
                    <img src="<?php echo esc_url( $gallery_image_1 ); ?>" alt="Gallery Image 1" class="indigenous-gallery__image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="indigenous-gallery__wrapper">
                    <?php
                    $gallery_image_2 = get_field( 'indigenous_gallery_image_2', $page_id );
                    if ( ! $gallery_image_2 ) {
                        $gallery_image_2 = get_template_directory_uri() . '/assets/images/Yani-1_2.jpeg';
                    }
                    ?>
                    <img src="<?php echo esc_url( $gallery_image_2 ); ?>" alt="Gallery Image 2" class="indigenous-gallery__image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="indigenous-gallery__wrapper">
                    <?php
                    $gallery_image_3 = get_field( 'indigenous_gallery_image_3', $page_id );
                    if ( ! $gallery_image_3 ) {
                        $gallery_image_3 = get_template_directory_uri() . '/assets/images/Yani-1_3.jpeg';
                    }
                    ?>
                    <img src="<?php echo esc_url( $gallery_image_3 ); ?>" alt="Gallery Image 3" class="indigenous-gallery__image">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

