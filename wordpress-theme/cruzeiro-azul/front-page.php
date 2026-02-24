<?php
/**
 * Página inicial estática.
 *
 * @package CruzeiroAzul
 */

get_header();
?>
<section class="hero">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php esc_html_e('Crie páginas institucionais, blog, notícias e campanhas com identidade azul celeste.', 'cruzeiro-azul'); ?></p>
</section>

<div class="content-grid">
    <section class="content-area page-card">
        <?php
        while (have_posts()) :
            the_post();
            the_title('<h2 class="entry-title">', '</h2>');
            the_content();
        endwhile;
        ?>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
