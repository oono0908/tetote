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
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');