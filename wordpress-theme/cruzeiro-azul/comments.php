<?php
/**
 * Template de comentários.
 *
 * @package CruzeiroAzul
 */

if (post_password_required()) {
    return;
}
?>
<section id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2><?php esc_html_e('Comentários', 'cruzeiro-azul'); ?></h2>
        <ol>
            <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
        </ol>
        <div class="pagination"><?php paginate_comments_links(); ?></div>
    <?php endif; ?>

    <?php comment_form(); ?>
</section>
