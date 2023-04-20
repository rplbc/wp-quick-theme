<?php
/**
 * Default page template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Quick
 */

get_header();
?>

<article class="grid inner page-article">
    <div class="page-article-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</article>

<?php
get_footer();
