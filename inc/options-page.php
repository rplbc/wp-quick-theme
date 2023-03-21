<?php
/**
 * Options page
 *
 * @package Quick
 */

if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page(
        [
            'page_title' => __( 'Theme options', 'quick' ),
            'menu_title' => __( 'Quick', 'quick' ),
            'menu_slug'  => 'quick-options',
            'icon_url'   => 'dashicons-admin-home',
            'position'   => 1,
            'post_id'    => 'quick_options',
            'redirect'   => false,
        ]
    );
}
