<?php
function add_file()
{
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('all', get_template_directory_uri() . '/css/all.css');
    wp_enqueue_style('fontawsome', get_template_directory_uri() . '/css/fontawsome.css');
    if (is_front_page()) {
        wp_enqueue_script('smooth', get_template_directory_uri() . '/js/smoothscroll.js', array(), null, true);
        wp_enqueue_script('page-link', get_template_directory_uri() . '/js/page-link.js', array(), null, true);
        wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css');
    } else {
        wp_enqueue_style('work', get_template_directory_uri() . '/css/work.css');
    }
}

// CSSとJS ファイルを追加
add_action('wp_enqueue_scripts', 'add_file');

// pタグの自動挿入を無効化する
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');