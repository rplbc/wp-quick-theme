<?php
/**
 * Dev setup
 *
 * @package Quick
 */

namespace Quick\Dev;

/**
 * Replaces theme's stylesheets and scripts with dev server script
 */
add_action(
    'wp_enqueue_scripts',
    function () {
        wp_dequeue_script( 'quick-scripts' );
        wp_dequeue_style( 'quick-styles' );

        wp_enqueue_script( 'quick-dev-runtime', 'http://localhost:3003/js/runtime.js', [], null, true );
        wp_enqueue_script( 'quick-dev-scripts', 'http://localhost:3003/js/main.js', [], null, true );
        wp_enqueue_script( 'quick-dev-helpers', 'http://localhost:3003/js/dev.js', [], null, true );
    }
);

/**
 * Adds modal with ACF
 */
add_action(
    'wp_footer',
    function() { ?>

    <div class="dev-acf-preview">
        <div class="dev-acf-preview-content">
            <?php pre_json( get_fields() ); ?>
            <?php pre_json( get_fields( 'quick_options' ) ); ?>
        </div>
    </div>

        <?php
    }
);

/**
 * Adds floating grid helper
 */
add_action(
    'wp_footer',
    function() {
        ?>

    <div class="dev-floating-grid">
        <div class="inner h-full layout-grid">
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
            <div class="dev-floating-grid-col"></div>
        </div>
    </div>

        <?php
    }
);

/**
 * Outputs json encoded data
 *
 * @param mixed $data Data to encode.
 */
function pre_json( mixed $data ) {
    echo '<pre>' . esc_html( wp_json_encode( $data, JSON_PRETTY_PRINT ) ) . '</pre>';
}
