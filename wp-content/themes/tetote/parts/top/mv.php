<main class="main">
  <div class="mv js-mv">
    <div class="mv__inner">
      <div class="swiper mv__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide mv__slide">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/top/fv01.jpg')); ?>" alt="スーツ姿で歩く新入社員の男性が前を見て進んでいる様子" class="mv__img" loading="lazy">
          </div>
          <div class="swiper-slide mv__slide">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/top/fv02.jpg')); ?>" alt="オフィスで新入社員と先輩社員が笑顔で打ち合わせしている様子" class="mv__img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
    <h2 class="mv__title">
      BECOME A</br>CHALLENGER.
    </h2>
    <p class="mv__subtitle">君の挑戦が、意思が、未来を変える</p>

   <!-- 最新の投稿を1件だけ表示 -->
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