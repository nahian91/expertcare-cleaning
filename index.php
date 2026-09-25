<?php
/**
 * Fallback main template file
 *
 * @package Expertcare_Cleaning
 */

get_header(); ?>

<main class="ifs-excl-section-wrapper" style="padding-top: 140px;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 style="font-size: 36px; margin-bottom: 20px;"><?php the_title(); ?></h1>
                <div style="font-size: 16px; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'expertcare-cleaning' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>