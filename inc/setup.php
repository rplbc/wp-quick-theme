<?php

/**
 * Setup
 *
 * @package Quick
 */

add_action('wp_enqueue_scripts', function () {
    if (QUICK_ENVIRONMENT === 'production') {
        $manifestPath = get_template_directory() . '/dist/.vite/manifest.json';
        $manifest = wp_json_file_decode($manifestPath, ['associative' => true]);

        if ($manifest) {
            $scriptPath = isset($manifest['src/ts/main.ts']['file']) ? $manifest['src/ts/main.ts']['file'] : '';
            if ($scriptPath) {
                wp_enqueue_script('quick-scripts', get_template_directory_uri() . '/dist/' . esc_attr($scriptPath));
            }

            if (isset($manifest['src/ts/main.ts']['css'])) {
                foreach ($manifest['src/ts/main.ts']['css'] as $css) {
                    wp_enqueue_style('quick-styles', get_template_directory_uri() . '/dist/' . esc_attr($css), []);
                }
            }
        }
    } else {
        add_action('wp_footer', function () {
            echo '<script type="module" src="http://localhost:5173/src/ts/main.ts"></script>';
        });
    }
});
