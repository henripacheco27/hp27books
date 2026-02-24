<?php
/**
 * Página 404.
 *
 * @package CruzeiroAzul
 */

get_header();
?>
<section class="hero">
    <h1><?php esc_html_e('404 - Página não encontrada', 'cruzeiro-azul'); ?></h1>
    <p><?php esc_html_e('Não encontramos essa página no nosso elenco. Tente uma busca.', 'cruzeiro-azul'); ?></p>
</section>

<div class="content-grid">
    <section class="content-area page-card">
        <?php get_search_form(); ?>
        <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Voltar para a home', 'cruzeiro-azul'); ?></a></p>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
