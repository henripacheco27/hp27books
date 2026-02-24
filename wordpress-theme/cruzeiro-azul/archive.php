<?php
/**
 * Template para arquivos.
 *
 * @package CruzeiroAzul
 */

get_header();
?>
<section class="hero">
    <h1><?php the_archive_title(); ?></h1>
    <p><?php the_archive_description(); ?></p>
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
