<?php
function novel_theme_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', [], '1.0', 'all');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'novel_theme_scripts');
function novel_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'novel_theme_setup');
require get_template_directory() . '/inc/custom-post-types.php';
