<?php
/**
 * Blog page template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#home-php
 *
 * @package Quick
 */

get_header();
?>

<div class="inner bp-inner">
<div class="pre-heading">Blog</div>
<h1 class="h1-title">Latest posts</h1>
<?php
if ( have_posts() ) :
    ?>
    <div class="grid bp-grid">
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'parts/blog/excerpt' );
    endwhile;
    ?>
    </div>
    <?php
endif;
?>
</div>

<?php
get_footer();
