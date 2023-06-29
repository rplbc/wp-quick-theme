<?php
/**
 * 404 page
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 *
 * @package Quick
 */

get_header(); ?>

<section class="inner py-12 flex flex-col items-center gap-4">
    <h1 class="text-center"><?php esc_html_e( 'Page not found', 'default' ); ?></h1>
    <a href="/" class="btn"><?php esc_html_e( 'Homepage', 'default' ); ?></a>
</section>

<?php
get_footer();
