<?php

define('THEME_VERSION', '1.0.0');
define('THEME_URI', get_template_directory_uri());

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Menu Principal', 'gymupper'),
        'footer'  => __('Menu Rodapé', 'gymupper'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-main', THEME_URI . '/assets/css/main.css', [], THEME_VERSION);
    wp_enqueue_script('theme-main', THEME_URI . '/assets/js/main.js', [], THEME_VERSION, true);

    wp_localize_script('theme-main', 'themeData', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('theme_nonce'),
    ]);
});

add_action('after_setup_theme', function () {
    add_image_size('hero', 1920, 800, true);
    add_image_size('card', 600, 400, true);
});

add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

require_once get_template_directory() . '/inc/acf-fields.php';
require_once get_template_directory() . '/inc/helpers.php';
