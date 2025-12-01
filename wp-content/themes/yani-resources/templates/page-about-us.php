<?php
/**
 * Template Name: About Us
 * 
 * About Us Page Template
 *
 * @package Yani Resources
 */

get_header();

// Enqueue page-specific CSS
wp_enqueue_style( 'yani-about-us', get_template_directory_uri() . '/assets/css/about-us.css', array( 'yani-global' ), '1.0.0' );

// Get current page ID for ACF fields
$page_id = get_the_ID();

// Hero Section
yani_render_hero(
    $page_id,
    'about_',
    get_template_directory_uri() . '/assets/images/about-us-hero.jpg'
);
?>

<!-- Intro Bar -->
<section class="intro">
    <div class="container intro__container">
        <div class="row g-5">
            <div class="col-md-6 intro__text">
                <p><?php echo esc_html( get_field( 'about_intro_text_1', $page_id ) ?: 'Welcome to Yani Resources. Delivering specialised electrical and labour hire services, we are powered by integrity, community, and skilled delivery.' ); ?></p>
            </div>
            <div class="col-md-6 intro__text">
                <p><?php echo esc_html( get_field( 'about_intro_text_2', $page_id ) ?: 'Proudly Aboriginal-owned, we provide high-quality services across construction, mining, government and infrastructure sectors, combining industry expertise with cultural respect.' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team Section -->
<section class="leadership-team">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-8">
                <h2 class="leadership-team__title"><?php echo esc_html( get_field( 'about_leadership_title', $page_id ) ?: 'Yani Resources Leadership Team' ); ?></h2>
            </div>
            <div class="col-md-4 text-end">
                <!--<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Yani-Logo-Pos.png' ); ?>" alt="Yani Resources Logo" class="leadership-team__logo">-->
            </div>
        </div>
        <div class="row g-5">
            <!-- Left Leadership Member -->
            <div class="col-md-6">
                <div class="leadership-team__member">
                    <?php
                    $left_member = get_field( 'about_leadership_left', $page_id );
                    $left_image = $left_member['image'] ?? '';
                    $left_name = $left_member['name'] ?? 'Nathan Wilson';
                    $left_title = $left_member['title'] ?? 'Co-Founder | Director of Business Development';
                    $left_description = $left_member['description'] ?? 'With a strong background in AFL and WAFL, Nathan brings extensive experience in cultural advocacy and community engagement. At Yani Resources, he focuses on building inclusive workplaces and empowering Indigenous Australians in mining and construction industries.';
                    $left_quote = $left_member['quote'] ?? 'We provide quality solutions that meet technical scope while enabling social and economic inclusion';
                    $left_quote_author = $left_member['quote_author'] ?? 'NATHAN';
                    ?>
                    <div class="leadership-team__photo">
                        <?php if ( $left_image ) : ?>
                            <img src="<?php echo esc_url( $left_image ); ?>" alt="<?php echo esc_attr( $left_name ); ?>" class="leadership-team__image">
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/man-1.jpg' ); ?>" alt="<?php echo esc_attr( $left_name ); ?>" class="leadership-team__image">
                        <?php endif; ?>
                    </div>
                    <h3 class="leadership-team__name"><?php echo esc_html( $left_name ); ?></h3>
                    <p class="leadership-team__job-title"><?php echo esc_html( $left_title ); ?></p>
                    <p class="leadership-team__bio"><?php echo esc_html( $left_description ); ?></p>
                    <blockquote class="leadership-team__quote">
                        <p class="leadership-team__quote-text">"<?php echo esc_html( $left_quote ); ?>"</p>
                        <cite class="leadership-team__quote-author"><?php echo esc_html( $left_quote_author ); ?></cite>
                    </blockquote>
                </div>
            </div>
            <!-- Right Leadership Member -->
            <div class="col-md-6">
                <div class="leadership-team__member">
                    <?php
                    $right_member = get_field( 'about_leadership_right', $page_id );
                    $right_image = $right_member['image'] ?? '';
                    $right_name = $right_member['name'] ?? 'Cameron Gibson';
                    $right_title = $right_member['title'] ?? 'Co-Founder | Director of Operations';
                    $right_description = $right_member['description'] ?? 'With over 20 years of experience in commercial electrical services, Cameron brings deep industry expertise to Yani Resources. He is passionate about renewable energy, respects Indigenous culture, and is committed to empowering the next generation with skills and career opportunities.';
                    $right_quote = $right_member['quote'] ?? 'Culturally respectful environments empower both Indigenous and non-Indigenous workers to thrive';
                    $right_quote_author = $right_member['quote_author'] ?? 'CAMERON';
                    ?>
                    <div class="leadership-team__photo">
                        <?php if ( $right_image ) : ?>
                            <img src="<?php echo esc_url( $right_image ); ?>" alt="<?php echo esc_attr( $right_name ); ?>" class="leadership-team__image">
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/man-2.jpg' ); ?>" alt="<?php echo esc_attr( $right_name ); ?>" class="leadership-team__image">
                        <?php endif; ?>
                    </div>
                    <h3 class="leadership-team__name"><?php echo esc_html( $right_name ); ?></h3>
                    <p class="leadership-team__job-title"><?php echo esc_html( $right_title ); ?></p>
                    <p class="leadership-team__bio"><?php echo esc_html( $right_description ); ?></p>
                    <blockquote class="leadership-team__quote">
                        <p class="leadership-team__quote-text">"<?php echo esc_html( $right_quote ); ?>"</p>
                        <cite class="leadership-team__quote-author"><?php echo esc_html( $right_quote_author ); ?></cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="our-values">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Left Side: Image with Overlay -->
            <div class="col-md-6">
                <div class="our-values__image-wrapper">
                    <?php
                    $values_left = get_field( 'about_values_left', $page_id );
                    $values_image = $values_left['image'] ?? '';
                    if ( $values_image ) {
                        echo '<img src="' . esc_url( $values_image ) . '" alt="Our Team" class="our-values__image">';
                    } else {
                        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/Yani-3.jpeg' ) . '" alt="Our Team" class="our-values__image">';
                    }
                    ?>
                    <!-- <h2 class="our-values__overlay-title">Our Values</h2> -->
                </div>
            </div>
            <!-- Right Side: Values List -->
            <div class="col-md-6">
                <div class="our-values__panel">
                    <div class="row g-4 our-values__panel-content">
                    <?php
                    $values_right = get_field( 'about_values_right', $page_id );
                    
                    // Get all 5 values
                    $values = array(
                        $values_right['value_1'] ?? array(),
                        $values_right['value_2'] ?? array(),
                        $values_right['value_3'] ?? array(),
                        $values_right['value_4'] ?? array(),
                        $values_right['value_5'] ?? array(),
                    );
                    
                    // Default values if empty
                    $default_values = array(
                        array( 'title' => 'Community Empowerment', 'description' => 'Building opportunities that last', 'icon' => 'Community.svg' ),
                        array( 'title' => 'Honesty & Reliability', 'description' => 'Doing what we say, every time', 'icon' => 'Reliable.svg' ),
                        array( 'title' => 'Safety & Wellbeing', 'description' => 'Always standing strong together', 'icon' => 'Safety.svg' ),
                        array( 'title' => 'Mateship & Teamwork', 'description' => 'Empowering projects, people and careers', 'icon' => 'Mateship.svg' ),
                        array( 'title' => 'Growth & Development', 'description' => 'Empowering projects, people and careers', 'icon' => 'Growth.svg' ),
                    );
                    
                    foreach ( $values as $index => $value ) :
                        // Use default icon if ACF icon is empty or not set
                        $icon = ! empty( $value['icon'] ) ? $value['icon'] : get_template_directory_uri() . '/assets/images/' . $default_values[$index]['icon'];
                        $title = ! empty( $value['title'] ) ? $value['title'] : $default_values[$index]['title'];
                        $description = ! empty( $value['description'] ) ? $value['description'] : $default_values[$index]['description'];
                    ?>
                        <div class="col-md-6">
                            <div class="our-values__item">
                                <div class="our-values__icon">
                                    <img src="<?php echo esc_url( $icon ); ?>" alt="<?php echo esc_attr( $title ); ?> Icon">
                                </div>
                                <div class="our-values__content">
                                    <h3 class="our-values__item-title"><?php echo esc_html( $title ); ?></h3>
                                    <p class="our-values__item-description"><?php echo esc_html( $description ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries We Support Section -->
<section class="industries">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                $industries_left = get_field( 'about_industries_left', $page_id );
                $industries_title = ! empty( $industries_left['title'] ) ? $industries_left['title'] : 'Industries We<br>Support';
                ?>
                <h2 class="industries__title"><?php echo wp_kses_post( nl2br( $industries_title ) ); ?></h2>
            </div>
            <div class="col-md-6">
                <?php
                $industries_right = get_field( 'about_industries_right', $page_id );
                
                // Get all 5 industries
                $industries = array(
                    $industries_right['industry_1'] ?? array(),
                    $industries_right['industry_2'] ?? array(),
                    $industries_right['industry_3'] ?? array(),
                    $industries_right['industry_4'] ?? array(),
                    $industries_right['industry_5'] ?? array(),
                );
                
                // Default industries with icons
                $default_industries = array(
                    array( 'title' => 'Mining & Resources', 'icon' => 'Mining.svg' ),
                    array( 'title' => 'Local, State & Federal Government', 'icon' => 'Government.svg' ),
                    array( 'title' => 'Defence Industry', 'icon' => 'Defence.svg' ),
                    array( 'title' => 'Strata & Commercial Property', 'icon' => 'Property.svg' ),
                    array( 'title' => 'Industrial & Infrastructure Projects', 'icon' => 'Industry.svg' ),
                );
                ?>
                <ul class="industries__list">
                    <?php foreach ( $industries as $index => $industry ) :
                        $icon = ! empty( $industry['icon'] ) ? $industry['icon'] : get_template_directory_uri() . '/assets/images/' . $default_industries[$index]['icon'];
                        $title = ! empty( $industry['title'] ) ? $industry['title'] : $default_industries[$index]['title'];
                    ?>
                        <li class="industries__item">
                            <div class="industries__icon">
                                <img src="<?php echo esc_url( $icon ); ?>" alt="<?php echo esc_attr( $title ); ?> Icon">
                            </div>
                            <span class="industries__text"><?php echo esc_html( $title ); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Worker Image Section -->
<section class="worker-image">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/worker-electrician.jpg' ); ?>" alt="Industrial Worker" class="worker-image__img">
</section>

<?php
get_footer();

