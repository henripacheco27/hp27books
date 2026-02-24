<?php
/**
 * Conteúdo padrão de posts.
 *
 * @package CruzeiroAzul
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    <?php the_title(sprintf('<h2><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
    <p class="entry-meta"><?php echo esc_html(get_the_date()); ?> • <?php the_author(); ?></p>
    <?php the_excerpt(); ?>
</article>
