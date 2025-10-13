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
              $name = get_field('name');
              $role = get_field('role');
              $message01 = get_field('message01');
              $message02 = get_field('message02');
            ?>
            <li class="swiper-slide member__card">
              <div class="member__card-thum">
                <?php if ( $image ) : ?>
                  <img src="<?php echo esc_url( $image['url'] ); ?>" 
                    alt="<?php echo esc_attr( $name ); ?>" 
                    class="member__card__img" 
                    width="300" 
                    height="379" 
                  />
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