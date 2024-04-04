<?php

/**
 * 404 page
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 *
 * @package Quick
 */

get_header(); ?>

<section class="container flex flex-col items-center gap-4 py-12">
    <h1 class="text-center"><?php esc_html_e('Page not found', 'default'); ?></h1>
    <a href="/" class="rounded bg-indigo-600 px-4 py-2 font-semibold text-white">
        <?php esc_html_e('Homepage', 'default'); ?>
    </a>
</section>

<?php get_footer();
