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
  <div class="about">
    <div class="about__inner inner">
      <div class="swiper about__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about01.jpg')); ?>" alt="オフィスで電話対応する社員" width="271" height="211"/>
          </div>
          <div class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about02.jpg')); ?>" alt="ワークスペースで資料を見る社員" width="271" height="211"/>
            <div class="about__card-txt-wrap">
              <p class="about__card-txt">後悔しないキャリアを作る、</p>
              <p class="about__card-txt">それこそが、我々の使命だ</p>
            </div>
          </div>
          <div class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about03.jpg')); ?>" alt="面談で説明する採用担当者" width="271" height="211"/>
          </div>
          <div class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about01.jpg')); ?>" alt="オフィスで電話対応する社員" width="271" height="211"/>
            <div class="about__card-txt-wrap">
              <p class="about__card-txt">後悔しないキャリアを作る、</p>
              <p class="about__card-txt">それこそが、我々の使命だ</p>
            </div>
          </div>
          <div class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about02.jpg')); ?>" alt="ワークスペースで資料を見る社員" width="271" height="211"/>
          </div>
        </div>
      </div>
      <div class="about__body">
        <p class="about__txt">「人手不足」</br>
          今の日本が抱えるこの社会課題に挑み、</br>
          企業と個人の可能性を最大限に引き出す。</br>
          それが私達の役目。
        </p>
        <p class="about__txt">
          単につなぐだけじゃない。</br>
          「手と手」を取り合っていけるような、</br>
          持続可能な社会を、一緒に作りませんか？
        </p>
      </div>
      <a class="about__btn btn btn--large btn--white btn--arrow">VIEW MORE</a>
    </div>
  </div>
  

</main>

<?php get_footer(); ?>