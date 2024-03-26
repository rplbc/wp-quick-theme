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
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_script('quick-scripts');
    wp_dequeue_style('quick-styles');
    wp_enqueue_script('quick-dev-runtime', 'http://localhost:3003/js/runtime.js', [], null, true);
    wp_enqueue_script('quick-dev-scripts', 'http://localhost:3003/js/main.js', [], null, true);
    wp_enqueue_script('quick-dev-helpers', 'http://localhost:3003/js/dev.js', [], null, true);
});
