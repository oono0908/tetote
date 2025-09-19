<?php get_header(); ?>
<!-- Main / Hero -->
  <main class="hero">
    <!-- Swiper コンテナ（3枚フェード） -->
    <div class="swiper" id="hero-swiper" aria-label="メインビジュアル">
      <div class="swiper-wrapper">
        <!-- 画像は差し替えてください -->
        <div class="swiper-slide" style="background-image:url('./img/hero1.jpg')"></div>
        <div class="swiper-slide" style="background-image:url('./img/hero2.jpg')"></div>
        <div class="swiper-slide" style="background-image:url('./img/hero3.jpg')"></div>
      </div>
    </div>

    <!-- コピー -->
    <div class="hero__copy">
      <h1 class="display">
        <span class="break">BECOME A</span>
        <span class="break">CHALLENGER.</span>
      </h1>
      <div class="sub">君の挑戦が、意思が、未来を変える</div>
    </div>

    <!-- News 帯 -->
    <div class="news">
      <div class="news__pill">NEWS</div>
      <div class="news__card">
        <span>新入社員向けに、入社前研修を行いました。</span>
        <button class="news__more" type="button">VIEW MORE</button>
      </div>
    </div>
  </main>

<?php get_footer(); ?>