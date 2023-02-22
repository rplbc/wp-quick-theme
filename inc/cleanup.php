<?php
/**
 * Remove unnecessary defaults
 *
 * @package Quick
 */

add_action(
    'init',
    function () {
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
        remove_action( 'wp_head', 'feed_links_extra', 3 );
        remove_action( 'wp_head', 'feed_links', 2 );
        remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
        remove_action( 'wp_head', 'rsd_link' );
        remove_action( 'wp_head', 'wlwmanifest_link' );
        remove_action( 'wp_head', 'wp_generator' );
        remove_action( 'wp_head', 'wp_maybe_enqueue_oembed_host_js' );
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
        remove_action( 'wp_head', 'wp_resource_hints', 2 );
        remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );

        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );

        remove_action( 'wp_body_open', 'gutenberg_global_styles_render_svg_filters' );
        remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
    }
);
