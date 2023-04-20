<?php
/**
 * Externals setup
 *
 * @package Quick
 */

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
add_filter( 'wpcf7_autop_or_not', '__return_false' );


add_action(
    'wp_enqueue_scripts',
    function () {
        if ( function_exists( 'wpcf7_enqueue_scripts' ) && is_page_template( 'templates/contact.php' ) ) {
            wpcf7_enqueue_scripts();
        }
    }
);
