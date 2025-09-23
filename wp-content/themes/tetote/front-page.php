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
        <ul class="swiper-wrapper">
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about01.jpg')); ?>" alt="オフィスで電話対応する社員" width="271" height="211"/>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about02.jpg')); ?>" alt="ワークスペースで資料を見る社員" width="271" height="211"/>
            <div class="about__card-txt-wrap">
              <p class="about__card-txt">後悔しないキャリアを作る、</p>
              <p class="about__card-txt">それこそが、我々の使命だ</p>
            </div>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about03.jpg')); ?>" alt="面談で説明する採用担当者" width="271" height="211"/>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about01.jpg')); ?>" alt="オフィスで電話対応する社員" width="271" height="211"/>
            <div class="about__card-txt-wrap">
              <p class="about__card-txt">後悔しないキャリアを作る、</p>
              <p class="about__card-txt">それこそが、我々の使命だ</p>
            </div>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about02.jpg')); ?>" alt="ワークスペースで資料を見る社員" width="271" height="211"/>
          </li>
        </ul>
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
  <section class="member">
    <div class="member__inner inner">
      <div class="section-title">
        <h2 class="section-title__main"><span class="_underline">人</span>を知る</h2>
        <p class="section-title__sub">TETOTEの社員がどういった信念を持って働いているのか、</br>
           一日のスケジュールや仕事内容などを紹介します。</p>
      </div>
      <div class="swiper member__slider">
        <ul class="swiper-wrapper member__cards">
          <!-- Slide / Card -->
          <li class="swiper-slide member__card">
            <div class="member__card-thum">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/member01.jpg')); ?>" alt="西村 優" class="member__card__img" />
              <div class="member__card-title">
                <p class="member__card-text">「あなたが担当で良かった」</p>
                <p class="member__card-text">この一言が、最高のやりがい</p>
              </div>
            </div>
            <div class="member__card-body">
              <p class="member__card-role">コンサルタント 2011年入社</p>
              <p class="member__card-name">西村 優</p>
            </div>
          </li>

        <li class="swiper-slide member__card">
            <div class="member__card-thum">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/member02.jpg')); ?>" alt="西村 優" class="member__card__img" />
              <div class="member__card-title">
                <p class="member__card-text">「あなたが担当で良かった」</p>
                <p class="member__card-text">この一言が、最高のやりがい</p>
              </div>
            </div>
            <div class="member__card-body">
              <p class="member__card-role">コンサルタント 2011年入社</p>
              <p class="member__card-name">西村 優</p>
            </div>
          </li>

          <li class="swiper-slide member__card">
            <div class="member__card-thum">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/member03.jpg')); ?>" alt="西村 優" class="member__card__img" />
              <div class="member__card-title">
                <p class="member__card-text">「あなたが担当で良かった」</p>
                <p class="member__card-text">この一言が、最高のやりがい</p>
              </div>
            </div>
            <div class="member__card-body">
              <p class="member__card-role">コンサルタント 2011年入社</p>
              <p class="member__card-name">西村 優</p>
            </div>
          </li>

          <li class="swiper-slide member__card">
            <div class="member__card-thum">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/member04.jpg')); ?>" alt="西村 優" class="member__card__img" />
              <div class="member__card-title">
                <p class="member__card-text">「あなたが担当で良かった」</p>
                <p class="member__card-text">この一言が、最高のやりがい</p>
              </div>
            </div>
            <div class="member__card-body">
              <p class="member__card-role">コンサルタント 2011年入社</p>
              <p class="member__card-name">西村 優</p>
            </div>
          </li>

          <li class="swiper-slide member__card">
            <div class="member__card-thum">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/member05.jpg')); ?>" alt="西村 優" class="member__card__img" />
              <div class="member__card-title">
                <p class="member__card-text">「あなたが担当で良かった」</p>
                <p class="member__card-text">この一言が、最高のやりがい</p>
              </div>
            </div>
            <div class="member__card-body">
              <p class="member__card-role">コンサルタント 2011年入社</p>
              <p class="member__card-name">西村 優</p>
            </div>
          </li>

          <li class="swiper-slide member__card">
            <div class="member__card-thum">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/member06.jpg')); ?>" alt="西村 優" class="member__card__img" />
              <div class="member__card-title">
                <p class="member__card-text">「あなたが担当で良かった」</p>
                <p class="member__card-text">この一言が、最高のやりがい</p>
              </div>
            </div>
            <div class="member__card-body">
              <p class="member__card-role">コンサルタント 2011年入社</p>
              <p class="member__card-name">西村 優</p>
            </div>
          </li>
          <!-- 以降、必要な数だけ .swiper-slide を追加 -->
        </ul>
      </div>
      <div class="member__btns">
        <a class="about__btn btn btn--large btn--white btn--arrow">VIEW MORE</a>
        <div class="swiper__btns md-show">
          <button class="btn-prev btn-round--arrow btn-round--large _reverse" aria-label="前へ"></button>
          <button class="btn-next btn-round--arrow btn-round--large _origin" aria-label="次へ"></button>
        </div>
      </div>

    </div>
  </section>
  <section class="benefits">
    <div class="benefits__inner inner">
      <div class="section-title section-title--center">
        <h2 class="section-title__main"><span class="_underline">制度・環境を知る</span>を知る</h2>
        <p class="section-title__sub">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
      </div>
      <ul class="benefits__items">
        <li class="benefits__item">
          <div class="benefits__thum">
            <div class="nbenefits__title-main">研修制度とキャリアパス</div>
            <div class="benefits__title-sub">Traning And Career</div>
            <button class="benefits__btn"></button>
          </div>
          <p class="benefits__body">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
        </li>
        <li class="benefits__item">
           <div class="benefits__thum">
            <div class="nbenefits__title-main">福利厚生</div>
            <div class="benefits__title-sub">Employee Benefits</div>
            <button class="benefits__btn"></button>
          </div>
          <p class="benefits__body">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
        </li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>