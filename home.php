<?php
/**
 * Blog page template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#home-php
 *
 * @package Quick
 */

get_header();
?>

<section class="inner inner py-12">
    <h1 class="mb-4">Latest posts</h1>
    <?php
    if ( have_posts() ) :
        ?>
        <div class="layout-grid">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'parts/blog/excerpt' );
        endwhile;
        ?>
        </div>
        <?php
    endif;
    ?>
</section>

<?php
get_footer();
