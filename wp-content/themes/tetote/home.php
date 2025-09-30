<?php get_header(); ?>
	<main>
		<div class="message">
			<div class="message__inner">

        <?php if (have_posts()) : ?>
          <ul class="message__cards">
            <?php while (have_posts()) : the_post(); ?>
              <li class="message__card">
                <?php
                  // ACF 取得
                  $img      = get_field('message-img');   // 画像（ID / 配列 / URL いずれも可）

                  // 画像HTMLを生成
                  $img_html = '';
                  $alt_text = $name ?: get_the_title();

                  if ( is_array($img) ) {                           // 配列返却
                    if ( !empty($img['ID']) ) {
                      $img_html = wp_get_attachment_image( $img['ID'], 'large', false, [
                        'class' => 'message__thumb',
                        'alt'   => $alt_text,
                      ] );
                    } elseif ( !empty($img['url']) ) {
                      $img_html = '<img src="'.esc_url($img['url']).'" alt="'.esc_attr($alt_text).'" class="message__thumb" />';
                    }
                  } elseif ( $img ) {                                // ID or URL
                    if ( is_numeric($img) ) {
                      $img_html = wp_get_attachment_image( (int)$img, 'large', false, [
                        'class' => 'message__thumb',
                        'alt'   => $alt_text,
                      ] );
                    } else {
                      $img_html = '<img src="'.esc_url($img).'" alt="'.esc_attr($alt_text).'" class="message__thumb" />';
                    }
                  }
                ?>
                <figure class="message__img-wrap">
                   <?php echo $img_html; ?>
                </figure>
                <div class="message__body">
                  <span class="message__tag"><?php the_category(); ?></span>
                  <a href="<?php the_permalink(); ?>" class="message__txt"><?php the_title(); ?></a>
                  <time datetime="<?php echo get_the_date('Y.m.d'); ?>" class="message__time"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>

          <!-- ページネーション -->
          <div class="pagination">
            <?php
              the_posts_pagination([
                'mid_size'  => 2,
              ]);
            ?>
          </div>
        <?php endif; ?>

      </div>
		</div>
	</main>
<?php get_footer(); ?>
