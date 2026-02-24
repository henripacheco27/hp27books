<?php
/**
 * Template de post único.
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
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <p class="entry-meta">
                    <?php echo esc_html(get_the_date()); ?> • <?php the_author(); ?>
                </p>
                <?php the_content(); ?>
                <?php the_tags('<p><strong>Tags:</strong> ', ', ', '</p>'); ?>
            </article>
            <?php
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
