<?php
/**
 * Wysiwyg setup
 *
 * @package Quick
 */

add_filter(
    'acf/fields/wysiwyg/toolbars',
    function ( $toolbars ) {
        unset( $toolbars['Basic'] );

        $toolbars['Full'][1] = [
            'styleselect',
            'formatselect',
            'bold',
            'bullist',
            'numlist',
            'removeformat',
            'link',
        ];

        $toolbars['Full'][2] = [];

        return $toolbars;
    }
);

add_filter(
    'mce_buttons_2',
    function ( $buttons ) {
        array_unshift( $buttons, 'styleselect' );
        return $buttons;
    }
);
