<?php
/**
 * Block editor setup
 *
 * @package Quick
 */

add_filter(
    'allowed_block_types_all',
    function () {
        return [
            'core/heading',
            'core/image',
            'core/list-item',
            'core/list',
            'core/paragraph',
            'core/table',
            'core/quote',
        ];
    }
);
