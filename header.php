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
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a href="#main" class="skip-to-content"><?php esc_html_e( 'Skip to content', 'quick' ); ?></a>

    <?php wp_body_open(); ?>

    <header class="w-full fixed z-site-header left-0 top-0">
        <div class="bg-white border-b border-b-gray-100 h-site-header-bar flex">
            <div class="inner flex">
                <h1 class="text-2xl self-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Quick</a></h1>
                <nav class="ml-auto flex gap-8" aria-label="Main menu">
                    <?php
                    wp_nav_menu(
                        [
                            'container'      => '',
                            'depth'          => 1,
                            'fallback_cb'    => false,
                            'items_wrap'     => '<ul class="flex items-center gap-[inherit]">%3$s</ul>',
                            'theme_location' => 'primary_menu',
                        ]
                    );
                    ?>
                    <button class="btn self-center">Call to action</button=>
                </nav>
            </div>
        </div>
    </header>

    <main id="main" class="min-h-screen">
