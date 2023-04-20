<?php
/**
 * Default post template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 *
 * @package Quick
 */

get_header();
?>

<article class="grid inner page-article">
    <div class="page-top">
        <h1><?php the_title(); ?></h1>
        <?php get_template_part( 'parts/socials/share' ); ?>
    </div>
    <div class="with-aspect single-featured-image">
        <?php echo wp_get_attachment_image( get_field( 'featuredImage' ), 'full' ); ?>
    </div>
    <div class="page-article-content">
        <?php the_content(); ?>
    </div>
</article>

<?php
get_footer();
