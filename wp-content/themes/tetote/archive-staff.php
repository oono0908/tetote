<?php get_header(); ?>
<div id="container" class="container_archive_course w_inner">
	<main>
    <div class="staff">
      <div class="staff__inner">
        <?php if (have_posts()) : ?>
          <ul class="staff__cards">
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <?php
                  // ACF 取得
                  $img      = get_field('staff-img');   // 画像（ID / 配列 / URL いずれも可）
                  $message1 = get_field('message01');   // 1行目
                  $message2 = get_field('message02');   // 2行目
                  $role     = get_field('role');        // 役職・入社年など
                  $name     = get_field('name');        // 氏名

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
                  
                  <li class="staff__card">
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
                  </li>
                </a>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>
  <?php get_footer(); ?>