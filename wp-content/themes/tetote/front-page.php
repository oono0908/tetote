<?php get_header(); ?>
<!--  mainvisual -->
<div class="main">
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
    <div class="mv__content">
      <h1 class="mv__title">
        <div class="mv__title-line">BECOME A</div>
        <div class="mv__title-line">CHALLENGER.</div>
      </h1>
      <p class="mv__subtitle">君の挑戦が、意思が、未来を変える</p>
    </div>
</div>


</div>

<?php get_footer(); ?>