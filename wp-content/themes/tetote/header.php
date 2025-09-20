<!DOCTYPE html>
<html lang="ja">

<head>
	 <meta name="robots" content="noindex,nofollow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0 viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <!-- meta情報-->
    <title>
		<?php
		  wp_title('|', true, 'right');
		  bloginfo('name');
		?>
	</title>
    <meta name="description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。">
    <meta name="keywords" content="Tetote,AI,ビッグデータ,テクノロジー,社会課題解決,採用">
    <!-- ogp-->
    <meta property="og:title" content="TETOTE">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="TETOTE">
    <meta property="og:description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。">
    <meta name="twitter:card" content="summary">
    <!-- ファビコン-->
    <link rel="icon" href="">
    <link rel="apple-touch-icon" href="">
    <!-- Google Fonts-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <h1 class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="TETOTEのホームページへ戻る">
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/title-white.svg')); ?>" alt="TETOTEサイトのロゴ" />
      </a>
    </h1>

    <div class="header__right">
      <div class="header__btns md-show">
        <a class="btn btn--small btn--black" href="<?php echo esc_url(home_url('/')); ?>">募集要項</a>
        <a class="btn btn--small btn--green" href="<?php echo esc_url(home_url('/')); ?>">ENTRY</a>
      </div>
       <!-- ハンバーガー -->
      <button class="hamburger js-humbuger" aria-expanded="false" aria-controls="drawer" aria-label="メニューを開閉">
        <div class="hamburger__lines">
          <span></span><span></span><span></span>
        </div>
        <div class="hamburger__text">MENU</div>
      </button>
    </div>
  </header>

   <!-- Drawer Menu -->
<div class="drawer js-drawer" role="dialog" aria-labelledby="drawer-menu">
  <div class="drawer__inner">

    <!-- 左：ブランド -->
    <div class="drawer__brand md-show">
      <a class="drawer__brand-link" href="/">
        <img class="drawer__brand-logo" src="/assets/logo-tetote.svg" alt="TETOTE Recruiting">
      </a>
    </div>

    <!-- 右：メニューグリッド -->
    <nav class="gnav" aria-label="サイトメニュー" id="drawer-menu">
      <div class="gnav__cols">

        <!-- 左カラム -->
        <div class="gnav__col" aria-label="サイトメニューの左カラム">
          <ul class="gnav__list">
            <li class="gnav__item">
              <a class="gnav__link" href="/about">
                <div class="gnav__title">ABOUT US</div>
                <div class="gnav__subtitle">TETOTEについて</div>
              </a>
            </li>
            <li class="gnav__item">
              <a class="gnav__link" href="/staff">
                <div class="gnav__title">STAFF</div>
                <div class="gnav__subtitle">社員について</div>
              </a>
            </li>
            <li class="gnav__item">
              <a class="gnav__link" href="/blog">
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
              <a class="gnav__link" href="/benefits">
                <div class="gnav__title">BENEFITS</div>
                <div class="gnav__subtitle">福利厚生について</div>
              </a>
            </li>
            <li class="gnav__item">
              <a class="gnav__link" href="/career">
                <div class="gnav__title">CAREER</div>
                <div class="gnav__subtitle">研修制度とキャリアパス</div>
              </a>
            </li>
            <li class="gnav__item">
              <a class="gnav__link" href="/faq">
                <div class="gnav__title">FAQ</div>
                <div class="gnav__subtitle">よくある質問</div>
              </a>
            </li>
          </ul>
        </div>

      </div>

      <!-- 下段：CTAボタン -->
      <div class="drawer__footer">
        <a class="drawer__cta drawer__cta--dark" href="/guidelines">募集要項</a>
        <a class="drawer__cta drawer__cta--primary" href="/entry">ENTRY</a>
      </div>
    </nav>

  </div>
</div>

