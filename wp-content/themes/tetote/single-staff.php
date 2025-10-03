<?php get_header(); ?>

<div class="staff-dt-top">
  <div class="staff-dt-top__inner inner">
    <div class="staff-dt-top__body">
      <div class="staff-dt-top__txt-main">
        <p class="staff-dt-top__txt01"><?php echo esc_html(get_field('message01')); ?></p>
        <p class="staff-dt-top__txt02"><?php echo esc_html(get_field('message02')); ?></p>
        <p class="staff-dt-top__role"><?php echo esc_html(get_field('staff-role')); ?></p>
        <p class="staff-dt-top__name"><?php echo esc_html(get_field('staff-name')); ?></p><span class="staff-dt-top__year"><?php echo esc_html(get_field('year')); ?></span>
      </div>
      <div class="staff-dt-top__career"><?php echo esc_html(get_field('career')); ?></div>
    </div>
    <div class="staff-dt-top__thumb">
      <?php
        // ACF 取得
        $img      = get_field('staff-img');   // 画像（ID / 配列 / URL いずれも可）

        // 画像HTMLを生成
        $img_html = '';
        $alt_text = $name ?: get_the_title();

        if ( is_array($img) ) {                           // 配列返却
          if ( !empty($img['ID']) ) {
            $img_html = wp_get_attachment_image( $img['ID'], 'large', false, [
              'class' => 'member__card__img',
              'alt'   => $alt_text,
            ] );
          } elseif ( !empty($img['url']) ) {
            $img_html = '<img src="'.esc_url($img['url']).'" alt="'.esc_attr($alt_text).'" class="member__card__img" />';
          }
        } elseif ( $img ) {                                // ID or URL
          if ( is_numeric($img) ) {
            $img_html = wp_get_attachment_image( (int)$img, 'large', false, [
              'class' => 'member__card__img',
              'alt'   => $alt_text,
            ] );
          } else {
            $img_html = '<img src="'.esc_url($img).'" alt="'.esc_attr($alt_text).'" class="member__card__img" />';
          }
        }
        ?>
        <?php echo $img_html; ?>
    </div>
  </div>
</div>
  <section class="staff-dt">
    <div class="staff-dt__inner inner">
      <div class="staff-dt__container">
        <div class="staff-dt__main">
          <h2 class="staff-dt__title">業務内容について</h2>
          <p class="staff-dt__txt"><?php the_field( 'job-description'); ?></p>
          <h2 class="staff-dt__title">学生時代に力を入れたことは？</h2>
          <p class="staff-dt__txt"><?php echo esc_html(get_field('student-era')); ?></p>
          <h2 class="staff-dt__title">TETOTEを志望した理由は？</h2>
          <p class="staff-dt__txt"><?php echo esc_html(get_field('reasons')); ?></p>
          <h2 class="staff-dt__title">やりがいを感じる瞬間は？</h2>
          <p class="staff-dt__txt"><?php echo esc_html(get_field('challenge')); ?></p>
          <h2 class="staff-dt__title">どんな人と一緒に働きたい？</h2>
          <p class="staff-dt__txt"><?php echo esc_html(get_field('college')); ?></p>
          <h2 class="staff-dt__title">応募者へのメッセージ</h2>
          <p class="staff-dt__txt"><?php echo esc_html(get_field('message')); ?></p>
        </div>
        <div class="staff-dt__side-bar">
          <p class="side-bar__title">目次</p>
          <ul class="side-bar__items">
            <li class="side-bar__item">&#46;普段の業務内容について</li>
            <li class="side-bar__item">&#46;学生時代に力を入れたことは？</li>
            <li class="side-bar__item">&#46;TETOTEを志望した理由は？</li>
            <li class="side-bar__item">&#46;やりがいを感じる瞬間は？</li>
            <li class="side-bar__item">&#46;どんな人と一緒に働きたい？</li>
            <li class="side-bar__item">&#46;応募者へのメッセージ</li>
          </ul>
        </div>
      </div>
      <!-- 「その他のメンバー」 -->
      <div class="staff-dt__bottom">
        <h2 class="staff-dt__bottom-title">その他のメンバー</h2>

        <?php
        // 現在の投稿ID
        $current_id = get_the_ID();

        // ランダムで3件（現在の投稿を除外）
        $args = array(
          'post_type'      => 'staff',         // ← カスタム投稿タイプが staff の想定
          'posts_per_page' => 3,
          'orderby'        => 'rand',
          'post__not_in'   => array( $current_id ),
          'no_found_rows'  => true,            // パフォーマンス最適化
          'ignore_sticky_posts' => true,
        );

        $q = new WP_Query( $args );
        ?>

        <?php if ( $q->have_posts() ) : ?>
          <ul class="staff__cards">
            <?php while ( $q->have_posts() ) : $q->the_post(); ?>
              <?php
                // ---- ACFの取得（存在しない場合は空文字になるので安全）----
                $img      = get_field('staff-img');   // 画像（ID / 配列 / URL いずれも可）
                $message1 = get_field('message01');   // 1行目
                $message2 = get_field('message02');   // 2行目
                $role     = get_field('role');        // 役職等
                $name     = get_field('name');        // 氏名

                // 画像HTML生成
                $img_html = '';
                $alt_text = $name ?: get_the_title();

                if ( is_array($img) ) {
                  if ( !empty($img['ID']) ) {
                    $img_html = wp_get_attachment_image( $img['ID'], 'large', false, array(
                      'class' => 'member__card__img',
                      'alt'   => $alt_text,
                    ) );
                  } elseif ( !empty($img['url']) ) {
                    $img_html = '<img src="' . esc_url($img['url']) . '" alt="' . esc_attr($alt_text) . '" class="member__card__img" />';
                  }
                } elseif ( $img ) {
                  if ( is_numeric($img) ) {
                    $img_html = wp_get_attachment_image( (int) $img, 'large', false, array(
                      'class' => 'member__card__img',
                      'alt'   => $alt_text,
                    ) );
                  } else {
                    $img_html = '<img src="' . esc_url($img) . '" alt="' . esc_attr($alt_text) . '" class="member__card__img" />';
                  }
                }
              ?>

              <li class="staff__card">
                <a href="<?php the_permalink(); ?>">
                  <div class="staff__card-thum">
                    <?php echo $img_html; ?>
                    <div class="staff__card-title">
                      <?php if ( $message1 ) : ?><p class="staff__card-text"><?php echo esc_html($message1); ?></p><?php endif; ?>
                      <?php if ( $message2 ) : ?><p class="staff__card-text"><?php echo esc_html($message2); ?></p><?php endif; ?>
                    </div>
                  </div>
                  <div class="staff__card-body">
                    <?php if ( $role ) : ?><p class="staff__card-role"><?php echo esc_html($role); ?></p><?php endif; ?>
                    <?php if ( $name ) : ?><p class="staff__card-name"><?php echo esc_html($name); ?></p><?php endif; ?>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
<!-- 「その他のメンバー」 -->

    </div>
  </section>
</div>

<?php get_footer(); ?>