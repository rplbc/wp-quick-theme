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
            <div class="cp-contacts">
                <?php $tel = get_field( 'contactPhone', 'quick_options' ); ?>
                <?php if ( $tel ) : ?>
                <a href="tel:<?php echo esc_attr( $tel ); ?>"><?php echo esc_html( $tel ); ?></a>
                <?php endif; ?>

                <?php $mail = get_field( 'contactEmail', 'quick_options' ); ?>
                <?php if ( $mail ) : ?>
                <a href="tel:<?php echo esc_attr( $mail ); ?>"><?php echo esc_html( $mail ); ?></a>
                <?php endif; ?>

                <?php $address = get_field( 'contactAddress', 'quick_options' ); ?>
                <?php if ( $address ) : ?>
                <p><?php echo $address; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
            </div>
            <?php get_template_part( 'parts/socials/follow' ); ?>
        </div>

        <div class="col-6 cp-form default-margins">
            <h2><?php the_field( 's2_title' ); ?></h2>
            <?php echo do_shortcode( get_field( 's2_formShortcode' ) ); ?>
        </div>
    </div>
</section>

<?php
get_footer();
