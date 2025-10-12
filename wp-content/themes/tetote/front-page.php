<?php get_header(); ?>
<!--  mainvisual -->
<main class="main">
  <div class="mv js-mv">
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
   <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 1
    ];
    $the_query = new WP_Query($args);
  ?>
  <div class="news">
    <div class="news__title">NEWS</div>
    <div class="news__text">
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php the_title(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>
    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="news__link">VIEW MORE</a>
  </div>
</div>


<!-- aboutセクション -->
  <section class="about">
    <div class="about__inner inner">
      <div class="swiper about__swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about01.jpg')); ?>" alt="オフィスで電話対応する社員" width="271" height="211"/>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about02.jpg')); ?>" alt="ワークスペースで資料を見る社員" width="271" height="211"/>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about03.jpg')); ?>" alt="面談で説明する採用担当者" width="271" height="211"/>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about01.jpg')); ?>" alt="オフィスで電話対応する社員" width="271" height="211"/>
          </li>
          <li class="swiper-slide about__card">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about02.jpg')); ?>" alt="ワークスペースで資料を見る社員" width="271" height="211"/>
          </li>
        </ul>
        <div class="about__card-txt-wrap">
          <p class="about__card-txt">後悔しないキャリアを作る、</p>
          <p class="about__card-txt">それこそが、我々の使命だ</p>
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
      <a class="about__btn btn btn--large btn--white btn--arrow" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">VIEW MORE</a>
    </div>
  </section>


  <!-- memberセクション -->
  <section class="member">
    <div class="member__inner inner">
      <div class="section-title">
        <div class="section-title__main-wrap">
          <h2 class="section-title__main _member"><span class="_underline">人</span>を知る</h2>
          <p class="section-title__back _member">MEMBER</p>
        </div>
        <p class="section-title__sub">TETOTEの社員がどういった信念を持って働いているのか、</br>
           一日のスケジュールや仕事内容などを紹介します。</p>
      </div>
<?php
  $args = [
    'post_type' => 'staff',
    'posts_per_page' => -1
  ];
  $the_query = new WP_Query($args);
?>

<div class="swiper member__slider">
  <ul class="swiper-wrapper member__cards">
    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
          $image = get_field('staff-img');
          $name = get_field('name'); // 名前
          $role = get_field('role'); // 役職
          $message01 = get_field('message01');
          $message02 = get_field('message02');
        ?>
        <li class="swiper-slide member__card">
          <div class="member__card-thum">
            <?php if ( $image ) : ?>
              <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="member__card__img" />
            <?php endif; ?>
            <div class="member__card-title">
              <?php if ( $message01 ) : ?>
                <p class="member__card-text"><?php echo esc_html( $message01 ); ?></p>
              <?php endif; ?>
              <?php if ( $message02 ) : ?>
                <p class="member__card-text"><?php echo esc_html( $message02 ); ?></p>
              <?php endif; ?>
            </div>
          </div>
          <div class="member__card-body">
            <?php if ( $role ): ?>
              <p class="member__card-role">
                <?php echo esc_html( $role ); ?>
              </p>
            <?php endif; ?>
            <?php if ( $name ) : ?>
              <p class="member__card-name"><?php echo esc_html( $name ); ?></p>
            <?php endif; ?>
          </div>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <li>スタッフ情報がありません。</li>
    <?php endif; ?>
  </ul>
</div>

      <div class="member__btns">
        <a class="about__btn btn btn--large btn--white btn--arrow" href="<?php echo esc_url( home_url( '/staff/' ) ); ?>">VIEW MORE</a>
        <div class="swiper__btns md-show">
          <button class="btn-prev btn-round--arrow btn-round--large _right" aria-label="前へ"></button>
          <button class="btn-next btn-round--arrow btn-round--large _left" aria-label="次へ"></button>
        </div>
      </div>

    </div>
  </section>


  <!-- benefitsセクション -->
<section class="benefits">
  <div class="benefits__inner inner">
    <div class="section-title section-title--center">
      <div class="section-title__main-wrap">
        <h2 class="section-title__main _benefits"><span class="_underline">制度・環境</span>を知る</h2>
        <p class="section-title__back _benefits">BENEFITS</p>
      </div>
      <p class="section-title__sub">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
    </div>
    <ul class="benefits__items">
      <li class="benefits__item">
        <a href="<?php echo esc_url( home_url( '/benefits/' ) ); ?>" class="benefits__link">
          <div class="benefits__thum">
            <div class="benefits__title-main">研修制度とキャリアパス</div>
            <div class="benefits__title-sub">Traning And Career</div>
            <button class="benefits__btn btn-round--arrow _left _reverse"></button>
          </div>
          <p class="benefits__body">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
        </a>
      </li>
      <li class="benefits__item">
        <a href="<?php echo esc_url( home_url( '/benefits/' ) ); ?>" class="benefits__link">
          <div class="benefits__thum">
            <div class="benefits__title-main">福利厚生</div>
            <div class="benefits__title-sub">Employee Benefits</div>
            <button class="benefits__btn btn-round--arrow _left _reverse"></button>
          </div>
          <p class="benefits__body">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
        </a>
      </li>
    </ul>
  </div>
</section>



  <!-- blogセクション -->
  <section class="message">
    <div class="message__inner inner">
      <div class="section-title">
        <div class="section-title__main-wrap">
          <h2 class="section-title__main _message">採用ブログ</h2>
          <p class="section-title__back _message">BLOG</p>
        </div>
        <p class="section-title__sub">採用情報やイベント情報、社員の紹介など、</br>日々の現場の様子をご紹介します。</p>
      </div>
<ul class="message__cards">
  <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 4
    ];
    $the_query = new WP_Query($args);
  ?>

  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php
        // ACFから画像を取得
        $message_img = get_field('message-img');
      ?>
      <li class="message__card">
        <figure class="message__img-wrap">
          <?php if ( $message_img ) : ?>
            <img src="<?php echo esc_url( is_array($message_img) ? $message_img['url'] : $message_img ); ?>" 
                 alt="<?php echo esc_attr( get_the_title() ); ?>" 
                 class="message__thumb">
          <?php else : ?>
            <img src="<?php echo esc_url( get_theme_file_uri('./assets/images/noimage.jpg') ); ?>" 
                 alt="<?php echo esc_attr( get_the_title() ); ?>" 
                 class="message__thumb">
          <?php endif; ?>
        </figure>
        <div class="message__body">
          <span class="message__tag">
            <?php
              $category = get_the_category();
              if ( !empty( $category ) ) {
                echo esc_html( $category[0]->name ); // 最初のカテゴリー名
              }
            ?>
          </span>
          <a href="<?php the_permalink(); ?>" class="message__txt"><?php the_title(); ?></a>
          <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>" class="message__time">
            <?php echo esc_html( get_the_date('Y.m.d') ); ?>
          </time>
        </div>
      </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <li>投稿がありません。</li>
  <?php endif; ?>
</ul>

      <a href="<?php echo esc_url(home_url('/blog/')); ?>"class="message__btns">
        <button class="btn-next btn-round--arrow btn-round--large _left" aria-label="採用ブログをもっと見る"></button>
        <span class="message__btn-txt">VIEW MORE</span>
      </a>
    </div>
  </section>

  <section class="recruit">
    <div class="recruit__inner inner">
      <div class="section-title section-title--center">
        <div class="section-title__main-wrap">
          <h2 class="section-title__main _recruit">採用情報</h2>
          <p class="section-title__back _recruit">RECRUITMENT</p>
        </div>
        <p class="section-title__sub">募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。</p>
      </div>
      <div class="recruit__btns">
        <a href="<?php echo esc_url(home_url('/details/')); ?>" class="btn btn--large btn--white btn--arrow recruit__btn">募集要項</a>
        <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="btn btn--large btn--white btn--arrow recruit__btn">よくある質問</a>
        <a href="<?php echo esc_url(home_url('/career/')); ?>" class="btn btn--large btn--white btn--arrow recruit__btn">会社概要</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
