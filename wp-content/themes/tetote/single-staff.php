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
        $image = get_field('staff-img');
      ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo get_the_title(); ?>" class="staff__card__img" width="286" height="368" />
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

  <section class="staff-dt">
    <div class="staff-dt__inner inner">
      <div class="staff-dt__container">
        <div class="staff-dt__main">
          <h2 class="staff-dt__title">業務内容について</h2>
          <p class="staff-dt__txt"><?php the_field( 'job-description'); ?></p>
          <h2 class="staff-dt__title">学生時代に力を入れたことは？</h2>
          <p class="staff-dt__txt"><?php echo get_field('student-era'); ?></p>
          <h2 class="staff-dt__title">TETOTEを志望した理由は？</h2>
          <p class="staff-dt__txt"><?php echo get_field('reasons'); ?></p>
          <h2 class="staff-dt__title">やりがいを感じる瞬間は？</h2>
          <p class="staff-dt__txt"><?php echo get_field('challenge'); ?></p>
          <h2 class="staff-dt__title">どんな人と一緒に働きたい？</h2>
          <p class="staff-dt__txt"><?php echo get_field('college'); ?></p>
          <h2 class="staff-dt__title">応募者へのメッセージ</h2>
          <p class="staff-dt__txt"><?php echo get_field('message'); ?></p>
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
          'post_type'      => 'staff',
          'posts_per_page' => 3,
          'orderby'        => 'rand',
          'post__not_in'   => array( $current_id ),
          'no_found_rows'  => true,
          'ignore_sticky_posts' => true,
        );

        $q = new WP_Query( $args );
        ?>

        <?php if ( $q->have_posts() ) : ?>
          <ul class="staff__cards">
            <?php while ( $q->have_posts() ) : $q->the_post(); ?>
              <?php
                $img      = get_field('staff-img');
                $message1 = get_field('message01');
                $message2 = get_field('message02');
                $role     = get_field('role');
                $name     = get_field('name');
                $img_html = '';
                $alt_text = get_the_title();

                if (  !empty($img['url']) ) {
                    $img_html = '<img src="' . esc_url($img['url']) . '" alt="' . esc_attr($alt_text) . '" class="member__card__img" width="300" height="379" />';
                  } 
              ?>

              <li class="staff__card">
                <a href="<?php the_permalink(); ?>">
                  <div class="staff__card-thum">
                    <?php echo $img_html; ?>
                    <div class="staff__card-title">
                      <?php if ( $message1 ) : ?><p class="staff__card-text"><?php echo $message1; ?></p><?php endif; ?>
                      <?php if ( $message2 ) : ?><p class="staff__card-text"><?php echo $message2; ?></p><?php endif; ?>
                    </div>
                  </div>
                  <div class="staff__card-body">
                    <?php if ( $role ) : ?><p class="staff__card-role"><?php echo $role; ?></p><?php endif; ?>
                    <?php if ( $name ) : ?><p class="staff__card-name"><?php echo $name; ?></p><?php endif; ?>
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