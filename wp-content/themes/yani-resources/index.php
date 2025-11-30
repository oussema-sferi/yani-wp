<?php
/**
 * Main template file (fallback)
 *
 * @package Yani Resources
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_content();
            }
        }
        ?>
    </div>
</main>

<?php
get_footer();

