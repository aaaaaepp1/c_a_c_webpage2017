<?php

//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

function my_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . 'style.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

