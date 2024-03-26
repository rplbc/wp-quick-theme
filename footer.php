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

<footer class="border-t border-t-gray-100 bg-white py-8">
    <div class="inner">
        <?php
        wp_nav_menu([
            'container' => '',
            'depth' => 1,
            'fallback_cb' => false,
            'items_wrap' => '<ul class="flex justify-center flex-row flex-wrap gap-x-8 gap-y-4">%3$s</ul>',
            'theme_location' => 'footer_menu',
        ]);
        ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
