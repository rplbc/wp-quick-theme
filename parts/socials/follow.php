<?php
/**
 * Follow
 *
 * @package Quick
 */

$args = wp_parse_args(
    $args,
    [
        'label'   => 'Follow Us',
        'socials' => [
            'facebook'  => get_field( 'socials_facebook', 'quick_options' ),
            'instagram' => get_field( 'socials_instagram', 'quick_options' ),
            'linkedin'  => get_field( 'socials_linkedin', 'quick_options' ),
        ],
    ]
)
?>

<div class="socials">
    <p class="socials-label"><?php echo esc_html( $args['label'] ); ?></p>
    <ul class="socials-list">
        <?php
        foreach ( $args['socials'] as $social => $social_url ) :
            ?>
            <li class="socials-list-item">
                <?php get_template_part( "parts/socials/links/{$social}", false, [ 'url' => $social_url ] ); ?>
            </li>
            <?php
        endforeach;
        ?>
    </ul>
</div>