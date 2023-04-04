<?php
/**
 * Docs page template
 *
 * Template name: Docs
 * Template Post Type: page
 *
 * @package Quick
 */

get_header();
?>

<section class="inner page-article">
    <h1>Components</h1>

    <section>
        <h2>Socials</h2>
        <h3>Default params</h3>
        <pre class="params">[
    'label'   => 'Follow Us',
    'socials' => [
        'facebook'  => get_field( 'socials_facebook', 'quick_options' ),
        'instagram' => get_field( 'socials_instagram', 'quick_options' ),
        'linkedin'  => get_field( 'socials_linkedin', 'quick_options' ),
    ],
]</pre>
        <h3>Example</h3>
        <?php get_template_part( 'parts/socials/follow' ); ?>
    </section>

    <section>
        <h2>Share</h2>
        <p>It shares page (default url is <b>get_permalink</b>)</p>

        <h3>Default params</h3>
        <pre class="params">
[
    'label'   => 'Share',
    'url'     => get_permalink(),
    'sharers' => [
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=',
        'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=',
    ],
]
        </pre>

        <h3>Example</h3>
        <?php get_template_part( 'parts/socials/share' ); ?>
    </section>
</section>

<?php
get_footer();
