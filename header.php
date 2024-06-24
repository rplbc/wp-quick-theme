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
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50 antialiased'); ?>>
    <?php wp_body_open(); ?>

    <div class="min-h-screen flex flex-col">

    <?php get_template_part('parts/core/header') ?>

        <main id="main" class="pt-20">
