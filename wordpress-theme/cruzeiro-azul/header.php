<?php
/**
 * Cabeçalho do tema.
 *
 * @package CruzeiroAzul
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="ca-container site-branding">
        <div>
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
            <p class="site-description"><?php bloginfo('description'); ?></p>
        </div>

        <nav class="main-navigation" aria-label="<?php esc_attr_e('Menu principal', 'cruzeiro-azul'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'fallback_cb'    => false,
                'container'      => false,
            ]);
            ?>
        </nav>
    </div>
</header>
<main class="ca-container">
