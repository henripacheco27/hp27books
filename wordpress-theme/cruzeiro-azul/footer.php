<?php
/**
 * Rodapé do tema.
 *
 * @package CruzeiroAzul
 */
?>
</main>
<footer class="site-footer">
    <div class="ca-container">
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'fallback_cb'    => false,
            'container'      => false,
        ]);
        ?>
        <p><?php bloginfo('name'); ?> &copy; <?php echo esc_html(date_i18n('Y')); ?></p>
        <p><?php esc_html_e('Tema inspirado na força da Nação Azul.', 'cruzeiro-azul'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
