<?php
/**
 * Share
 *
 * @package Quick
 */

$args = wp_parse_args(
    $args,
    [
        'label'   => 'Share on:',
        'url'     => get_permalink(),
        'sharers' => [
            'Facebook' => 'https://www.facebook.com/sharer/sharer.php?u=',
            'Linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=',
        ],
    ]
);
?>

<div class="flex items-center gap-6">
    <h2 class="text-base"><?php echo esc_html( $args['label'] ); ?></h2>
    <ul class="flex items-center gap-4">
        <?php
        foreach ( $args['sharers'] as $sharer => $sharerUrl ) :
            ?>
            <li class="socials-list-item">
                <a href="<?php echo esc_url( $sharerUrl . $args['url'] ); ?>" target="_blank"><?php echo esc_html( $sharer ); ?></a>
            </li>
            <?php
        endforeach;
        ?>
    </ul>
</div>
