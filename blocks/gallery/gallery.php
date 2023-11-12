<?php
/**
 * Gallery block template
 *
 * @package Quick
 */

$images = get_field( 'gallery' );
if ( $images ) : ?>
<div class="grid gap-2.5 sm:grid-cols-2 lg:grid-cols-4" id="<?php echo esc_attr( $block['id'] ); ?>" data-block="gallery">
    <?php foreach ( $images as $i => $image_id ) : ?>
    <div class="aspect-square">
        <?php
        echo wp_get_attachment_image(
            $image_id,
            'large',
            false,
            [
                'class'      => 'h-full w-full cursor-zoom-in object-cover transition-[filter] hover:brightness-75',
                'loading'    => 'lazy',
                'draggable'  => 'false',
                'data-index' => $i,
            ]
        );
        ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
