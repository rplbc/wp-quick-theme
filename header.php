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

    <header class="fixed left-0 top-0 z-50 w-full">
        <div class="flex h-20 border-b border-b-gray-100 bg-white">
            <div class="container flex">
                <h1 class="mr-auto self-center text-2xl">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Quick</a>
                </h1>
                <div class="ml-auto flex items-center gap-8" x-data x-trap="$store.mobileNav.isOpen">
                    <nav aria-label="Main menu" x-cloak x-data x-show="$store.mobileNav.isOpen">
                        <ul class="flex items-center gap-5">
                            <li><a href="#home" @click="$store.mobileNav.hide()">Home</a></li>
                            <li><a href="#about" @click="$store.mobileNav.hide()">About</a></li>
                        </ul>
                    </nav>
                    <button
                        class="self-center rounded bg-indigo-600 px-6 py-2 font-semibold text-white aria-expanded:bg-blue-600"
                        x-data :aria-expanded="$store.mobileNav.isOpen" aria-expanded="false"
                        @click="$store.mobileNav.toggle()">
                        Toggle
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main id="main" class="pt-20">
