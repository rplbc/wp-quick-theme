<?php
/**
 * Functions and definitions
 *
 * @package Quick
 */

defined( 'QUICK_VERSION' ) || define( 'QUICK_VERSION', 1.0 );

/**
 * Define only in dev mode
 */
define( 'QUICK_SERVE', true );

if ( defined( 'QUICK_SERVE' ) ) {
    require get_template_directory() . '/inc/dev-setup.php';
} else {
    require get_template_directory() . '/inc/setup.php';
}
