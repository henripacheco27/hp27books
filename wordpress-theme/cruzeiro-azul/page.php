<?php
/**
 * Template de páginas.
 *
 * @package CruzeiroAzul
 */

get_header();
?>
<div class="content-grid">
    <section class="content-area page-card">
        <?php
        while (have_posts()) :
            the_post();
            the_title('<h1 class="entry-title">', '</h1>');
            the_content();

            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        endwhile;
        ?>
    </section>

    <?php get_sidebar(); ?>
</div>
<?php
get_footer();
