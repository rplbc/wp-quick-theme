<?php
/**
 * Setup
 *
 * @package Quick
 */

add_action(
    'init',
    function () {
        register_nav_menus(
            [
                'primary_menu' => __( 'Header Menu', 'quick' ),
            ]
        );
    }
);

add_action(
    'after_setup_theme',
    function () {
        add_theme_support( 'editor-styles' );
        add_editor_style( 'dist/css/editor-styles.css' );

        add_theme_support( 'title-tag' );
        remove_theme_support( 'core-block-patterns' );
        remove_theme_support( 'widgets-block-editor' );
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_deregister_style( 'wp-block-library' );
        wp_dequeue_style( 'global-styles' );
        wp_dequeue_style( 'classic-theme-styles' );

        wp_enqueue_script( 'quick-scripts', get_template_directory_uri() . '/dist/js/main.js', [], QUICK_VERSION, true );
        wp_enqueue_style( 'quick-styles', get_template_directory_uri() . '/dist/css/styles.css', [], QUICK_VERSION );
    }
);
