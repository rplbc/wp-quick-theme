<?php
/**
 * Blog post
 *
 * @package Quick
 */

?>

<article class="bp-card">
    <div class="with-aspect bp-card-media">
        <?php echo wp_get_attachment_image( get_field( 'featuredImage', get_the_ID() ), 'large' ); ?>
    </div>
    <div class="bp-card-content">
        <div class="bp-card-date"><?php echo get_the_date(); ?></div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_field( 'excerpt', get_the_ID() ); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn bp-card-cta"><?php esc_html_e( 'Read article', 'quick' ); ?></a>
    </div>
</article>
