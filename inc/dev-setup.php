<?php
/**
 * Dev setup
 *
 * @package Quick
 */

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_dequeue_script( 'scripts' );
        wp_dequeue_style( 'styles' );

        // Keep the order or webpack fails.
        wp_enqueue_script( 'scripts-dev', 'http://localhost:3003/js/main.js', [], null, true );
        wp_enqueue_script( 'dev', 'http://localhost:3003/js/dev.js', [], null, true );
    }
);

add_action(
    'wp_footer',
    function() {
        echo '
<div class="acf-preview">
    <pre>' . esc_html( wp_json_encode( get_fields(), JSON_PRETTY_PRINT ) ) . '</pre>
    <pre>' . esc_html( wp_json_encode( get_fields( 'quick_options' ), JSON_PRETTY_PRINT ) ) . '</pre>
</div>';
    }
);
