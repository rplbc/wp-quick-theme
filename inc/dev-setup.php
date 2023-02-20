<?php
/**
 * Dev setup
 *
 * @package Quick
 */

add_action(
    'admin_enqueue_scripts',
    function () {
        wp_enqueue_script( 'editor-styles', 'http://localhost:3003/js/editor-styles.js', [], null, true );
        remove_editor_styles();
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_dequeue_script( 'scripts' );
        wp_dequeue_style( 'styles' );

        wp_enqueue_script( 'scripts-dev', 'http://localhost:3003/js/main.js', [], null, true );
        wp_enqueue_script( 'styles-dev', 'http://localhost:3003/js/styles.js', [], null, true );
    }
);
