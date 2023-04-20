<?php
/**
 * The footer
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 *
 * @package Quick
 */

?>

</main>

<footer class="site-footer">
    <nav class="inner site-footer-nav">
        <?php
        wp_nav_menu(
            [
                'container'      => '',
                'depth'          => 1,
                'fallback_cb'    => false,
                'items_wrap'     => '<ul>%3$s</ul>',
                'theme_location' => 'footer_menu',
            ]
        );
        ?>
    </nav>
</footer>

<?php wp_footer(); ?>

</body>

</html>
