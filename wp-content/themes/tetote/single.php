<?php get_header(); ?>
  <section class="message-dt">
    <div class="message-dt__inner inner">
      <span class="message-dt__tag"><?php the_category(); ?></span>
      <time datetime="<?php echo get_the_date('Y.m.d'); ?>" class="message-dt__time"><?php echo get_the_date('Y.m.d'); ?></time>
      <h2 class="message-dt__title">
        <?php the_title(); ?>
      </h2>
      <?php
        // ACF 取得
        $img      = get_field('message-dt-img');   // 画像（ID / 配列 / URL いずれも可）

        // 画像HTMLを生成
        $img_html = '';
        $alt_text = $name ?: get_the_title();

        if ( is_array($img) ) {                           // 配列返却
          if ( !empty($img['ID']) ) {
            $img_html = wp_get_attachment_image( $img['ID'], 'large', false, [
              'class' => 'message-dt-img',
              'alt'   => $alt_text,
            ] );
          } elseif ( !empty($img['url']) ) {
            $img_html = '<img src="'.esc_url($img['url']).'" alt="'.esc_attr($alt_text).'" class="message-dt-img" />';
          }
        } elseif ( $img ) {                                // ID or URL
          if ( is_numeric($img) ) {
            $img_html = wp_get_attachment_image( (int)$img, 'large', false, [
              'class' => 'message-dt-img',
              'alt'   => $alt_text,
            ] );
          } else {
            $img_html = '<img src="'.esc_url($img).'" alt="'.esc_attr($alt_text).'" class="message-dt-img" />';
          }
        }
      ?>
      <figure class="message-dt__img-wrap">
          <?php echo $img_html; ?>
      </figure>
      <div class="message-dt__txt01">
        <?php the_field('discription'); ?>
      </div>
       <div class="message-dt__txt02">
        <?php the_field('details'); ?>
      </div>
    </div>
  </section>
  
<?php

// single.pageの前後の記事のページネーション
$same_category = false; 

$prev = get_previous_post( $same_category );
$next = get_next_post( $same_category );

if ($prev || $next): ?>
  <nav class="message-nav">
    <div class="message-nav__inner">
      <?php if ($prev): ?>
      <a href="<?php echo get_permalink($prev->ID); ?>" class="message-nav__item">
        <div class="message-nav__btn _prev"></div>
        <div class="message-nav__title-wrap">
          <p class="message-nav__title"><?php echo get_the_title($prev->ID); ?></p>
          <time class="message-nav__time"><?php echo get_the_date('Y.m.d', $prev->ID); ?></time>
        </div>
      </a>
    <?php endif; ?>

    <?php if ($next): ?>
      <a href="<?php echo get_permalink($next->ID); ?>" class="message-nav__item">
        <div class="message-nav__title-wrap">
          <p class="message-nav__title"><?php echo get_the_title($next->ID); ?></p>
          <time class="message-nav__time"><?php echo get_the_date('Y.m.d', $next->ID); ?></time>
        </div>
        <div class="message-nav__btn _next"></div>
      </a>
    <?php endif; ?>
    </div>
  </nav>
<?php endif; ?>

<?php get_footer(); ?>