<?php
/**
 * Formulário de busca.
 *
 * @package CruzeiroAzul
 */
?>
<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="screen-reader-text"><?php esc_html_e('Buscar por:', 'cruzeiro-azul'); ?></label>
    <input id="search-field" type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php esc_attr_e('Pesquisar...', 'cruzeiro-azul'); ?>" />
    <input type="submit" value="<?php esc_attr_e('Buscar', 'cruzeiro-azul'); ?>" />
</form>
