<?php
/**
 * The header
 *
 * @package Quick
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a href="#main" class="skip-to-content"><?php esc_html_e( 'Skip to content', 'quick' ); ?></a>

    <?php wp_body_open(); ?>

    <header class="site-header">
        <?php
        wp_nav_menu(
            [
                'container'       => 'nav',
                'container_class' => 'site-header-nav',
                'depth'           => 1,
                'fallback_cb'     => false,
                'items_wrap'      => '<ul>%3$s</ul>',
                'theme_location'  => 'primary_menu',
            ]
        );
        ?>
    </header>

    <main id="main">
