<?php
/**
 * Funções do tema Cruzeiro Azul.
 *
 * @package CruzeiroAzul
 */

if (!defined('ABSPATH')) {
    exit;
}

function cruzeiro_azul_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Menu Principal', 'cruzeiro-azul'),
        'footer' => __('Menu Rodapé', 'cruzeiro-azul'),
    ]);
}
add_action('after_setup_theme', 'cruzeiro_azul_setup');

function cruzeiro_azul_widgets_init(): void
{
    register_sidebar([
        'name'          => __('Sidebar Principal', 'cruzeiro-azul'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets exibidos na barra lateral principal.', 'cruzeiro-azul'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'cruzeiro_azul_widgets_init');

function cruzeiro_azul_scripts(): void
{
    wp_enqueue_style('cruzeiro-azul-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'cruzeiro_azul_scripts');

function cruzeiro_azul_excerpt_more(string $more): string
{
    if (is_admin()) {
        return $more;
    }

    return '&hellip;';
}
add_filter('excerpt_more', 'cruzeiro_azul_excerpt_more');
