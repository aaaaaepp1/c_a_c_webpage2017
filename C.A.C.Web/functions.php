<?php

//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support( 'title-tag' );
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

add_filter( 'show_admin_bar', '__return_false' );

//カスタムメニュー
add_theme_support( 'menus' );
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

function my_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . 'style.css', array(), '1.0.0', 'all' );
  wp_deregister_script('jquery');
  wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/jquery.easing.1.3.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/jqueryColorPlugin.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/main.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/project.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

