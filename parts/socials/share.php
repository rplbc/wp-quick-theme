<?php
/**
 * Share
 *
 * @package Quick
 */

$args = wp_parse_args(
    $args,
    [
        'label'   => 'Share',
        'url'     => get_permalink(),
        'sharers' => [
            'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=',
            'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=',
        ],
    ]
);
?>

<div class="socials">
    <p class="socials-label"><?php echo esc_html( $args['label'] ); ?></p>
    <ul class="socials-list">
        <?php
        foreach ( $args['sharers'] as $sharer => $sharer_url ) :
            ?>
            <li class="socials-list-item">
                <?php get_template_part( "parts/socials/links/{$sharer}", false, [ 'url' => $sharer_url . $args['url'] ] ); ?>
            </li>
            <?php
        endforeach;
        ?>
    </ul>
</div>
