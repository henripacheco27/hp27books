<?php
/**
 * Página de posts.
 *
 * @package CruzeiroAzul
 */

get_header();
?>
<section class="hero">
    <h1><?php single_post_title(); ?></h1>
    <p><?php esc_html_e('Acompanhe as últimas publicações.', 'cruzeiro-azul'); ?></p>
</section>

<div class="content-grid">
    <section class="content-area">
        <?php if (have_posts()) : ?>
            <div class="post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_type()); ?>
                <?php endwhile; ?>
            </div>
            <div class="pagination"><?php the_posts_pagination(); ?></div>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
