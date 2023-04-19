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
            'formatselect',
            'styleselect',
            'link',
            'bold',
            'italic',
            'bullist',
            'numlist',
            'removeformat',
            'undo',
            'redo',
            'wp_help',
        ];

        $toolbars['Full'][2] = [];

        return $toolbars;
    }
);

add_filter(
    'tiny_mce_before_init',
    function( $args ) {
        $styleFormats = [
            [
                'title' => __( 'Size', 'default' ),
                'items' => [
                    [
                        'title'    => 'Heading 1',
                        'classes'  => 'h1',
                        'selector' => 'h1,h2,h3,p,div',

                    ],
                    [
                        'title'    => 'Heading 2',
                        'classes'  => 'h2',
                        'selector' => 'h1,h2,h3,p,div',
                    ],
                    [
                        'title'    => 'Heading 3',
                        'classes'  => 'h3',
                        'selector' => 'h1,h2,h3,p,div',
                    ],
                ],
            ],
        ];

        $args['style_formats']  = wp_json_encode( $styleFormats );
        $args['block_formats']  = 'Heading 1=h1;Heading 2=h2;Heading 3=h3;Paragraph=p;Div=div';
        $args['plugins']        = 'lists,paste,tabfocus,WordPress,wpautoresize,wplink,wpdialogs,wptextpattern,wpview';
        $args['preview_styles'] = '';

        return $args;
    }
);
