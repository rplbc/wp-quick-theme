<?php
/**
 * Remove unnecessary defaults
 *
 * @package Quick
 */

add_action(
    'init',
    function () {
        remove_action( 'wp_body_open', 'gutenberg_global_styles_render_svg_filters' );
        remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
    }
);
