<?php
/**
 * Conteúdo de páginas.
 *
 * @package CruzeiroAzul
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('page-card'); ?>>
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <?php the_content(); ?>
</article>
