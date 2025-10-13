<!DOCTYPE html>
<html lang="ja">

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="noindex,nofollow">

  <!-- トップページと下層ページでのタイトルとディスクリプションの切り替え -->
  <?php
    if ( is_front_page()) :
      $page_title = '採用特設サイト | 株式会社TETOTE';
      $page_description = 'テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。';
    else :
      $page_title = wp_title('|', false, 'right') . '株式会社TETOTE';
      $page_description = 'テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。このページでは、' . get_the_title() . 'について解説しています。';
    endif;
  ?>

  <title><?php echo esc_html($page_title); ?></title>
  <meta name="description" content="<?php echo esc_attr($page_description); ?>">
  <meta name="keywords" content="Tetote,AI,ビッグデータ,テクノロジー,社会課題解決,採用">

  <!-- OGP -->
  <meta property="og:title" content="<?php echo esc_html($page_title); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url(home_url(add_query_arg(array(), $wp->request))); ?>">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ogp.jpg'); ?>">
  <meta property="og:site_name" content="株式会社TETOTE">
  <meta property="og:description" content="<?php echo esc_attr($page_description); ?>">
  <meta name="twitter:card" content="summary">

  <!-- ファビコン -->
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon.ico'); ?>">
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/apple-touch-icon.png'); ?>">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header js-header">
    <h1 class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="TETOTEのホームページへ戻る">
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/title-black.svg')); ?>" alt="TETOTEサイトのロゴ" class="title-logo--black js-title-logo"/>
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/title-white.svg')); ?>" alt="TETOTEサイトのロゴ" class="title-logo--white"/>
      </a>
    </h1>
    <div class="header__right">
      <div class="header__btns md-show">
        <a class="btn btn--small btn--black" href="<?php echo esc_url(home_url('/details')); ?>">募集要項</a>
        <a class="btn btn--small btn--ochres" href="<?php echo esc_url(home_url('/entry')); ?>">ENTRY</a>
      </div>
      <!-- ハンバーガー -->
      <button class="hamburger js-hamburger" aria-expanded="false" aria-controls="drawer" aria-label="メニューを開閉">
        <div class="hamburger__lines js-hamburger__lines">
          <span></span><span></span><span></span>
        </div>
        <div class="hamburger__text">MENU</div>
      </button>
    </div>
  </header>

<?php
// 下層ページ header 下画像の切り替え
$visual_classes = [
  'about'    => 'about-top-visual',
  'details'   => 'details-top-visual',
  'benefits' => 'benefits-top-visual',
  'career'   => 'career-top-visual',
  'details'  => 'details-top-visual',
  'faq'      => 'faq-top-visual',
];

$wrap_class = '';
$title_main = '';
$ja_main    = '';
$ja_sub     = '';

// 優先順位: ブログトップ → staff アーカイブ → 固定ページ
if ( is_home() ) {
  $wrap_class = 'blog-top-visual';
  $title_main = 'BLOG';
  $ja_main    = '採用ブログ';
  $ja_sub     = '採用情報やイベント情報などをご紹介します';

} elseif ( is_post_type_archive('staff') ) {
  $wrap_class = 'staff-top-visual';
  $title_main = 'STAFF';
  $ja_main    = '社員について';
  $ja_sub     = '弊社社員のリアルな声を紹介しています';

} elseif ( is_page() ) {
  $slug = get_post_field('post_name', get_queried_object_id());
  if ( isset($visual_classes[$slug]) ) {
    $wrap_class = $visual_classes[$slug];
  }
  $title_main = get_the_title();
  $ja_main    = get_field('title') ?: '';
  $ja_sub     = get_field('title-sub') ?: '';
}
?>

<?php if ( $wrap_class ) : ?>
  <div class="<?php echo esc_attr($wrap_class); ?> top-title">
    <div class="top-title__inner">
      <h2 class="top-title__main"><?php echo esc_html($title_main); ?></h2>
      <?php if ( $ja_main !== '' ) : ?><p class="top-title__ja-main"><?php echo esc_html($ja_main); ?></p><?php endif; ?>
      <?php if ( $ja_sub  !== '' ) : ?><p class="top-title__ja-sub"><?php echo esc_html($ja_sub); ?></p><?php endif; ?>
    </div>
  </div>
<?php endif; ?>

<?php if (!is_front_page() & (!is_singular('staff')) & (!is_single()) & (!is_page('entry'))) { ?>
   <?php get_template_part('parts/breadcrumb'); ?>
<?php } ?>

  <!-- Drawer Menu -->
  <div class="drawer js-drawer" role="dialog" aria-labelledby="drawer-menu">
    <div class="drawer__inner">
      <nav class="gnav" aria-label="サイトメニュー" id="drawer-menu">
        <div class="gnav__cols">

          <!-- 左カラム -->
          <div class="gnav__col" aria-label="サイトメニューの左カラム">
            <ul class="gnav__list">
              <li class="gnav__item">
                <a class="gnav__link" href="<?php echo esc_url(home_url('/about')); ?>">
                  <div class="gnav__title">ABOUT US</div>
                  <div class="gnav__subtitle">TETOTEについて</div>
                </a>
              </li>
              <li class="gnav__item">
                <a class="gnav__link" href="<?php echo esc_url(home_url('/staff')); ?>">
                  <div class="gnav__title">STAFF</div>
                  <div class="gnav__subtitle">社員について</div>
                </a>
              </li>
              <li class="gnav__item">
                <a class="gnav__link" href="<?php echo esc_url(home_url('/blog')); ?>">
                  <div class="gnav__title">BLOG</div>
                  <div class="gnav__subtitle">採用ブログ</div>
                </a>
              </li>
            </ul>
          </div>

          <!-- 右カラム -->
          <div class="gnav__col" aria-label="サイトメニューの右カラム">
            <ul class="gnav__list">
              <li class="gnav__item">
                <a class="gnav__link" href="<?php echo esc_url(home_url('/benefits')); ?>">
                  <div class="gnav__title">BENEFITS</div>
                  <div class="gnav__subtitle">福利厚生について</div>
                </a>
              </li>
              <li class="gnav__item">
                <a class="gnav__link" href="<?php echo esc_url(home_url('/career')); ?>">
                  <div class="gnav__title">CAREER</div>
                  <div class="gnav__subtitle">研修制度とキャリアパス</div>
                </a>
              </li>
              <li class="gnav__item">
                <a class="gnav__link" href="<?php echo esc_url(home_url('/faq')); ?>">
                  <div class="gnav__title">FAQ</div>
                  <div class="gnav__subtitle">よくある質問</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="gnav__btns">
          <a class="btn btn--medium btn--ochres" href="<?php echo esc_url(home_url('/details')); ?>">募集要項</a>
          <a class="btn btn--medium btn--black" href="<?php echo esc_url(home_url('/entry')); ?>">ENTRY</a>
        </div>
      </nav>
    </div>
  </div>

