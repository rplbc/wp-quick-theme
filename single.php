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

<article class="max-w-4xl mx-auto py-12">
    <h1><?php the_title(); ?></h1>
    <div class="rich-text"><?php the_content(); ?></div>
</article>

<?php get_footer();
