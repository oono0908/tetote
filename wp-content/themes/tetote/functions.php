<?php
/* --------------------------------------------
 * scriptとcssを読み込む
 * -------------------------------------------- */
function my_theme_scripts() {

  wp_enqueue_style( 'common-css', get_theme_file_uri('assets/css/common/style.css'), [], '1.0' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Viga&display=swap', [], null );

  if ( is_front_page() ) {
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', [], '8' );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', [], '8', true );
    wp_enqueue_style( 'top-css', get_theme_file_uri('assets/css/top/style.css'), [], '1.0' );
    wp_enqueue_script( 'top-js', get_theme_file_uri('assets/js/top/script.js'), ['jquery','swiper-js'], '1.0', true );
  }

  elseif ( is_page('about') ) {
    wp_enqueue_style( 'about-css', get_theme_file_uri('assets/css/about/style.css'), [], '1.0' );
    wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );
  }

  elseif (is_post_type_archive('staff')) {
    wp_enqueue_style( 'staff-css', get_theme_file_uri('assets/css/staff/style.css'), [], '1.0' );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }

  elseif (is_singular( 'staff' ) ) {
    wp_enqueue_style( 'staff-single-css', get_theme_file_uri('assets/css/staff/single-style.css'), [], '1.0' );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );
  wp_enqueue_script( 'staff-single-js', get_theme_file_uri('assets/js/staff/single-script.js'), ['jquery'], '1.0', true );


  }
  
  elseif (is_home( 'blog' ) ) {
    wp_enqueue_style( 'blog-css', get_theme_file_uri('assets/css/blog/style.css'), [], '1.0' );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }

    elseif (is_single() ) {
    wp_enqueue_style( 'blog-single-css', get_theme_file_uri('assets/css/blog/single-style.css'), [], '1.0' );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }
  elseif (is_page('benefits') ) {
    wp_enqueue_style( 'benefits-css', get_theme_file_uri('assets/css/benefits/style.css'), [], '1.0' );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }
  elseif (is_page('career') ) {
    wp_enqueue_style( 'career-css', get_theme_file_uri('assets/css/career/style.css'), [], '1.0' );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }
  elseif (is_page('details') ) {
    wp_enqueue_style( 'details-css', get_theme_file_uri('assets/css/details/style.css'), [], '1.0' );
    wp_enqueue_script( 'scroll-btn-js', get_theme_file_uri('assets/js/scroll-btn/script.js'), ['jquery'], '1.0', true );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }
  elseif (is_page('faq') ) {
    wp_enqueue_style( 'faq-css', get_theme_file_uri('assets/css/faq/style.css'), [], '1.0' );
    wp_enqueue_script( 'scroll-btn-js', get_theme_file_uri('assets/js/scroll-btn/script.js'), ['jquery'], '1.0', true );
    wp_enqueue_script( 'faq-js', get_theme_file_uri('assets/js/faq/script.js'), ['jquery'], '1.0', true );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }
  elseif (is_page('entry') ) {
    wp_enqueue_style( 'entry-css', get_theme_file_uri('assets/css/entry/style.css'), [], '1.0' );
  wp_enqueue_script( 'common-js', get_theme_file_uri('assets/js/common/script.js'), ['jquery'], '1.0', true );

  }
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

/* --------------------------------------------
 * サムネイル画像を有効にする
 * -------------------------------------------- */

add_theme_support( 'post-thumbnails' );

/* --------------------------------------------
 * カスタム投稿タイプ[スタッフ】
 * -------------------------------------------- */

function cpt_register_staff(){
	$args = [
		'label' => 'staff',
		'labels' => [
			'singular_name' => 'staff',
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

