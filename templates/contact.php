<?php
/**
 * Contact page template
 *
 * Template name: Contact
 * Template Post Type: page
 *
 * @package Quick
 */

get_header();
?>

<section class="inner layout-grid py-12">
    <div class="col-span-full lg:col-[3_/_-3] xl:col-[3_/_-3] 2xl:col-[4_/_-4]">
        <h1 class="mb-4"><?php the_field( 'title' ); ?></h1>
        <?php echo do_shortcode( get_field( 'formShortcode' ) ); ?>
    </div>
</section>

<?php
get_footer();
