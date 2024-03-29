<?php
/**
 * Blog post
 *
 * @package Quick
 */

?>

<article class="col-span-full border border-gray-100 shadow-md lg:col-span-6 xl:col-span-4">
    <div class="aspect-video">
        <?php echo wp_get_attachment_image( get_field( 'featuredImage', get_the_ID() ), 'large' ); ?>
    </div>
    <div class="flex flex-col gap-2 bg-white p-4">
        <div class="flex gap-2">
            <div class=""><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></div>
            <span class="h-1 w-1 flex-shrink-0 self-center rounded-full bg-slate-300"></span>
            <div class=""><?php echo get_the_date(); ?></div>
        </div>
        <h2 class="h4 line-clamp-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="line-clamp-4"><?php the_field( 'excerpt', get_the_ID() ); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn mt-2 self-start"><?php esc_html_e( 'Read more', 'default' ); ?></a>
    </div>
</article>
