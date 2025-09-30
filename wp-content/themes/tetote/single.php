<?php get_header(); ?>
  <section class="message-dt">
    <div class="message-dt__inner">
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
// ── オプション：同一カテゴリ内だけで前後移動したい場合は true
$same_category = false; // true にすると同一カテゴリ内に限定

$prev = get_previous_post( $same_category );
$next = get_next_post( $same_category );

// ユーティリティ：カード1枚を描画
function render_adjacent_card( $post_obj, $dir = 'prev' ) {
  if ( ! $post_obj ) return;

  $pid   = $post_obj->ID;
  $link  = get_permalink( $pid );
  $title = get_the_title( $pid );
  $date  = get_the_date( 'Y.m.d', $pid );

  // ▼ ACF の例：必要なフィールド名に置き換えてください
  // 例1: テキスト/セレクトなど
  $acf_text = get_field('news_label', $pid);        // 例: 「お知らせ」「採用」など
  // 例2: 画像（返り値=ID 推奨）
  $acf_img_id = get_field('message-img', $pid);     // 画像フィールド例
  $thumb_html = '';
  if ($acf_img_id) {
    $thumb_html = wp_get_attachment_image($acf_img_id, 'medium', false, [
      'class' => 'singlepager__thumb',
      'alt'   => esc_attr($title),
      'loading' => 'lazy',
    ]);
  }

  // 向き
  $arrow = ($dir === 'prev') ? '&larr;' : '&rarr;'; // ← →
  $aria  = ($dir === 'prev') ? '前の記事へ' : '次の記事へ';

  ?>
  <a class="singlepager__item singlepager__item--<?php echo esc_attr($dir); ?>" href="<?php echo esc_url($link); ?>" aria-label="<?php echo esc_attr($aria); ?>">
    <span class="singlepager__arrow" aria-hidden="true"><?php echo $arrow; ?></span>

    <div class="singlepager__meta">
      <?php if ($acf_text): ?>
        <span class="singlepager__label"><?php echo esc_html($acf_text); ?></span>
      <?php endif; ?>
      <span class="singlepager__title"><?php echo esc_html($title); ?></span>
      <time class="singlepager__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d', $pid)); ?>">
        <?php echo esc_html($date); ?>
      </time>
    </div>

    <?php if ($thumb_html): ?>
      <figure class="singlepager__thumbwrap"><?php echo $thumb_html; ?></figure>
    <?php endif; ?>
  </a>
  <?php
}
?>

<?php if ( $prev || $next ): ?>
  <nav class="singlepager" aria-label="記事ナビゲーション">
    <?php render_adjacent_card($prev, 'prev'); ?>
    <span class="singlepager__divider" aria-hidden="true"></span>
    <?php render_adjacent_card($next, 'next'); ?>
  </nav>
<?php endif; ?>

<?php get_footer(); ?>