<?php
/**
 * Default page template
 *
 * @package Quick
 */

get_header(); ?>

<article class="inner page-article">
    <div class="page-article-content">
        <?php the_content(); ?>
    </div>
</article>

<?php
get_footer();
