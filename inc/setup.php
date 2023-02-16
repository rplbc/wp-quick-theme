<?php
/**
 * Setup
 *
 * @package Quick
 */

add_action(
    'after_setup_theme',
    function () {
        add_theme_support( 'editor-styles' );
        add_editor_style( 'dist/css/editor-styles.css' );
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/dist/js/main.js', [], QUICK_VERSION, true );
        wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/styles.css', [], QUICK_VERSION );
    }
);
