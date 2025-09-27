<?php
/* --------------------------------------------
 * 　scriptとcssを読み込む
 * -------------------------------------------- */
function my_theme_scripts(){
  wp_enqueue_style('style_swiper','//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
  wp_enqueue_style('com', get_theme_file_uri('./assets/css/common/style.css'),[],'1.0');
	wp_enqueue_style('top', get_theme_file_uri('./assets/css/top/style.css'), [], '1.0');
	wp_enqueue_script('allpage', get_theme_file_uri('./assets/js/top/script.js'), ['jquery'], '1.0');
  wp_enqueue_script('script_swiper','//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',array(), '1.0.0', true);
  wp_enqueue_style('google-apis','https://fonts.googleapis.com');
  wp_enqueue_style('google-gstatic','https://fonts.gstatic.com');
  wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Viga&display=swap');
  }
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// サムネイル画像を有効にする
add_theme_support( 'post-thumbnails' );