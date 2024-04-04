<?php

/**
 * The header
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
 *
 * @package Quick
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="bg-gray-50 antialiased">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="z-50 fixed left-0 top-0 w-full">
        <div class="h-20 flex border-b border-b-gray-100 bg-white">
            <div class="container flex">
                <h1 class="self-center text-2xl">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Quick</a>
                </h1>
                <nav class="ml-auto flex gap-8" aria-label="Main menu">
                    <?php
                    wp_nav_menu([
                        'container' => '',
                        'depth' => 1,
                        'fallback_cb' => false,
                        'items_wrap' => '<ul class="flex items-center gap-[inherit]">%3$s</ul>',
                        'theme_location' => 'primary_menu',
                    ]);
                    ?>
                    <button class="self-center rounded bg-indigo-600 px-4 py-2 font-semibold text-white">
                        Call to action
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <main id="main" class="min-h-screen pt-[--headerHeight]">
