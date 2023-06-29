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
    <div class="flex flex-col gap-6 items-center text-center col-span-full lg:col-[2_/_-2] xl:col-[3_/_-3]">
        <h1><?php the_title(); ?></h1>
        <?php get_template_part( 'parts/socials/share' ); ?>
    </div>
    <div class="my-12 col-span-full">
        <div class="aspect-video">
            <?php echo wp_get_attachment_image( get_field( 'featuredImage' ), 'full' ); ?>
        </div>
    </div>
    <div class="rich-content col-span-full lg:col-[2_/_-2] xl:col-[3_/_-3]">
        <?php the_content(); ?>
    </div>
</article>

<?php
get_footer();
