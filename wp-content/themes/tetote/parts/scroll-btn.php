<?php

$btn_sets = [
  'details' => [
    'コンサルタント'   => '#section01',
    'ソリューション営業' => '#section02',
    'システムエンジニア' => '#section03',
  ],
  'faq' => [
    '応募・選考について' => '#section01',
    'キャリアについて'   => '#section02',
    '福利厚生について'   => '#section03',
  ],
];

$current_btns = [];

if ( is_page('details') ) {
  $current_btns = $btn_sets['details'];
} elseif ( is_page('faq') ) {
  $current_btns = $btn_sets['faq'];
}

?>

<div class="scroll__btns md-show-for-flex">
  <?php foreach ( $current_btns as $label => $target ) : ?>
    <button class="scroll__btn js-scroll" data-target="<?php echo esc_attr( $target ); ?>">
      <?php echo esc_html( $label ); ?>
    </button>
  <?php endforeach; ?>
</div>
