<?php
/**
 * 404 page
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 *
 * @package Quick
 */

get_header(); ?>

<article class="inner page-article">
    <div class="page-article-content page-404">
        <h1><?php esc_html_e( 'Page not found', 'default' ); ?></h1>
        <style>.page-404{text-align:center;padding:120px 0;}</style>
    </div>
</article>

<?php
get_footer();
