<?php

/**
 * Setup
 *
 * @package Quick
 */

add_action('init', function () {
    register_nav_menus([
        'primary_menu' => __('Header Menu', 'quick'),
        'footer_menu' => __('Footer Menu', 'quick'),
    ]);
});
add_action('after_setup_theme', function () {
    add_theme_support('editor-styles');
    add_editor_style('dist/css/editor-styles.css');
    add_theme_support('title-tag');
    remove_theme_support('core-block-patterns');
    remove_theme_support('widgets-block-editor');
});
add_action('wp_enqueue_scripts', function () {
    $themeVersion = wp_get_theme()->get('Version');
    wp_deregister_style('wp-block-library');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
    wp_enqueue_script('quick-scripts', get_template_directory_uri() . '/dist/js/main.js', [], $themeVersion, true);
    wp_enqueue_style('quick-styles', get_template_directory_uri() . '/dist/css/styles.css', [], $themeVersion);
});
add_action('acf/init', function () {
    if (function_exists('acf_add_options_sub_page')) {
        $root_options_page = acf_add_options_page([
            'page_title' => wp_get_theme()->get('Name'),
            'menu_title' => wp_get_theme()->get('Name'),
            'position' => 1,
            'post_id' => 'quick_options',
            'redirect' => false,
        ]);
        acf_add_options_sub_page([
            'page_title' => 'Subpage',
            'menu_title' => 'Subpage',
            'parent_slug' => $root_options_page['menu_slug'],
        ]);
    }
});
