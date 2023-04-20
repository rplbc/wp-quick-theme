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

<section class="inner skip-header cp">
    <h1 class="h1-title"><?php the_title(); ?></h1>
    <div class="grid">
        <div class="col-6 cp-info default-margins">
            <?php the_field( 's1Content' ); ?>
            <?php get_template_part( 'parts/socials/follow' ); ?>
        </div>

        <div class="col-6 cp-form default-margins">
            <h2><?php the_field( 's2_title' ); ?></h2>
            <?php echo do_shortcode( get_field( 's2_formShortcode' ) ); ?>
        </div>
    </div>

<?php
get_footer();
