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

<section class="max-w-4xl mx-auto py-12">
    <h1 class="mb-4"><?php the_title(); ?></h1>
    <div class="rich-text"><?php the_content(); ?></div>
</section>

<?php
get_footer();
