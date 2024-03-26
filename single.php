<?php

/**
 * Default post template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 *
 * @package Quick
 */

get_header();
?>

<article class="inner layout-grid py-12">
    <div class="col-span-full flex flex-col items-center gap-6 text-center lg:col-[2_/_-2] xl:col-[3_/_-3]">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="col-span-full my-12">
        <div class="aspect-video">
            <?php echo wp_get_attachment_image(get_field('featuredImage'), 'full'); ?>
        </div>
    </div>
    <div class="rich-text col-span-full lg:col-[2_/_-2] xl:col-[3_/_-3]">
        <?php the_content(); ?>
    </div>
</article>

<?php get_footer();
