<?php
/**
 * Dev setup
 *
 * @package Quick
 */

namespace Quick\Dev;

add_action(
    'after_setup_theme',
    function () {
        add_editor_style( 'http://localhost:3003/css/editor-styles.css' );
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_dequeue_script( 'quick-scripts' );
        wp_dequeue_style( 'quick-styles' );

        // Keep the order or webpack fails.
        wp_enqueue_script( 'dev', 'http://localhost:3003/js/dev.js', [], null, true );
        wp_enqueue_script( 'scripts-dev', 'http://localhost:3003/js/main.js', [], null, true );
    }
);

/**
 * Add modal with ACF fields
 */
add_action(
    'wp_footer',
    function() { ?>

    <div class="acf-preview">
        <div class="acf-preview-content">
            <?php quick_json( get_fields() ); ?>
            <?php quick_json( get_fields( 'quick_options' ) ); ?>
        </div>
    </div>

        <?php
    }
);

/**
 * Outputs json encoded data.
 *
 * @param mixed $data Data to encode.
 */
function quick_json( mixed $data ) {
    echo '<pre>' . esc_html( wp_json_encode( $data, JSON_PRETTY_PRINT ) ) . '</pre>';
}
