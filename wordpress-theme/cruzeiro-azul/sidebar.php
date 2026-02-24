<?php
/**
 * Sidebar principal.
 *
 * @package CruzeiroAzul
 */
?>
<aside class="widget-area">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <section class="widget">
            <h3><?php esc_html_e('Sobre o tema', 'cruzeiro-azul'); ?></h3>
            <p><?php esc_html_e('Adicione widgets em Aparência > Widgets para personalizar esta área.', 'cruzeiro-azul'); ?></p>
        </section>
    <?php endif; ?>
</aside>
