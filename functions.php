<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/#what-is-functions-php
 *
 * @package Quick
 */

require get_template_directory() . '/inc/cleanup.php';

require get_template_directory() . '/inc/setup.php';

require get_template_directory() . '/inc/options-page.php';

require get_template_directory() . '/inc/editor/blocks.php';

require get_template_directory() . '/inc/editor/wysiwyg.php';

if ( file_exists( get_template_directory() . '/inc/dev-setup.php' ) ) {
    require get_template_directory() . '/inc/dev-setup.php';
}
