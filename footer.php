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

<footer class="bg-white border-t border-t-gray-100 py-8">
    <nav class="inner">
        <?php
        wp_nav_menu(
            [
                'container'      => '',
                'depth'          => 1,
                'fallback_cb'    => false,
                'items_wrap'     => '<ul class="flex justify-center flex-row flex-wrap gap-x-8 gap-y-4">%3$s</ul>',
                'theme_location' => 'footer_menu',
            ]
        );
        ?>
    </nav>
</footer>

<?php wp_footer(); ?>

</body>

</html>
