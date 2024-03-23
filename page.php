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

<section class="inner py-12">
    <h1 class="mb-4"><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
</section>

<?php
get_footer();
