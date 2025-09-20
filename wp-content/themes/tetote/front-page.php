<?php get_header(); ?>
<!--  mainvisual -->
<main class="main">
  <div class="mv">
    <div class="mv__inner">
      <div class="swiper mv__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide mv__slide">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/fv01.jpg')); ?>" alt="スーツ姿で歩く新入社員の男性が前を見て進んでいる様子" class="mv__img">
          </div>
          <div class="swiper-slide mv__slide">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/fv02.jpg')); ?>" alt="オフィスで新入社員と先輩社員が笑顔で打ち合わせしている様子" class="mv__img">
          </div>
        </div>
      </div>
    </div>
    <h2 class="mv__title">
      BECOME A</br>CHALLENGER.
    </h2>
    <p class="mv__subtitle">君の挑戦が、意思が、未来を変える</p>
    <div class="news">
      <div class="news__title">NEWS</div>
      <div class="news__text"></div>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="news__link">VIEW MORE</a>
    </div>
  </div>
</main>

<?php get_footer(); ?>