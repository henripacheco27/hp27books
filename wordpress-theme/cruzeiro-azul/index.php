<?php
/**
 * Template principal.
 *
 * @package CruzeiroAzul
 */

get_header();
?>
<section class="hero">
    <h1><?php esc_html_e('Bem-vindo ao tema Cruzeiro Azul', 'cruzeiro-azul'); ?></h1>
    <p><?php esc_html_e('Uma base completa para seu site com visual inspirado no Cruzeiro.', 'cruzeiro-azul'); ?></p>
</section>

<div class="content-grid">
    <section class="content-area">
        <?php if (have_posts()) : ?>
            <div class="post-list">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', get_post_type());
                endwhile;
                ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
