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

    <header class="site-header">
        <div class="site-header-bar">
            <div class="inner site-header-inner">
                <h1 class="site-header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Quick</a></h1>
                <nav class="site-header-nav">
                    <?php
                    wp_nav_menu(
                        [
                            'container'      => '',
                            'depth'          => 1,
                            'fallback_cb'    => false,
                            'items_wrap'     => '<ul>%3$s</ul>',
                            'theme_location' => 'primary_menu',
                        ]
                    );
                    ?>
                    <a href="#cta" class="btn site-header-cta">Call to action</a>
                </nav>
            </div>
        </div>
    </header>

    <main id="main">
