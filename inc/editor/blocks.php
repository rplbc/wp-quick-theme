<?php
/**
 * Block editor setup
 *
 * @package Quick
 */

add_filter(
    'allowed_block_types_all',
    function ( $blocks ) {
        return [ 'core/heading', 'core/image', 'core/list-item', 'core/list', 'core/paragraph', 'core/table', 'core/quote', 'quick/gallery' ];
    }
);

add_action(
    'init',
    function () {
        register_block_type( get_template_directory() . '/blocks/gallery' );
    }
);
