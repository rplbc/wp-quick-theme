<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/#what-is-functions-php
 *
 * @package Quick
 */

defined( 'QUICK_VERSION' ) || define( 'QUICK_VERSION', 1.0 );

// Define only in dev mode.
define( 'QUICK_SERVE', true );

require get_template_directory() . '/inc/cleanup.php';

require get_template_directory() . '/inc/setup.php';

if ( defined( 'QUICK_SERVE' ) ) {
    require get_template_directory() . '/inc/dev-setup.php';
}

require get_template_directory() . '/inc/options-page.php';

require get_template_directory() . '/inc/editor/blocks.php';

require get_template_directory() . '/inc/editor/wysiwyg.php';
