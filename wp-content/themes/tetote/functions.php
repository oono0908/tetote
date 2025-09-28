<?php
/* --------------------------------------------
 * scriptとcssを読み込む
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

/* --------------------------------------------
 * サムネイル画像を有効にする
 * -------------------------------------------- */

add_theme_support( 'post-thumbnails' );

/* --------------------------------------------
 * カスタム投稿タイプ[スタッフ】
 * -------------------------------------------- */

function cpt_register_staff(){
	$args = [
		'label' => 'スタッフ',
		'labels' => [
			'singular_name' => 'スタッフ',
			'edit_item' => 'スタッフページを編集',
			'add_new_item' => 'スタッフを追加'
		],
		'public' => true, //カスタム投稿タイプを一般に公開するかどうか
		'show_in_rest' => true, //REST APIにカスタム投稿タイプを含めるかどうか → カスタム投稿タイプでブロックエディタを使うならtrue
		'has_archive' => true, //アーカイブページを持つかどうか
		'delete_with_user' => false, //ユーザーを削除した後、コンテンツも削除するかどうか
		'exclude_from_search' => false, //検索から除外するかどうか
		'hierarchical' => false, //階層化するかどうか
		'query_var' => true, //クエリパラメーターを使えるようにする → プレビュー画面を使うためにはtrue
		'menu_position' => 5, //管理画面に表示するメニューの位置
		'supports' => [
			'title', 'editor', 'thumbnail', 'custom-fields'
		], //カスタム投稿タイプがサポートする機能
	];
	register_post_type('staff', $args);
}
add_action('init', 'cpt_register_staff');