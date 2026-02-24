<?php
/**
 * Resultados de busca.
 *
 * @package CruzeiroAzul
 */

get_header();
?>
<div class="content-grid">
    <section class="content-area search-card">
        <h1><?php printf(esc_html__('Resultados para: %s', 'cruzeiro-azul'), '<em>' . esc_html(get_search_query()) . '</em>'); ?></h1>

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
