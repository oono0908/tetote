<?php

$btn_sets = [
  'details' => [ 'コンサルタント', 'ソリューション営業', 'システムエンジニア' ],
  'faq'      => [ '応募・選考について', 'キャリアについて', '福利厚生について' ],
];

$current_btns = [];

if ( is_page('details') ) {
  $current_btns = $btn_sets['details'];
} elseif ( is_page('faq') ) {
  $current_btns = $btn_sets['faq'];
}

?>

<div class="scroll__btns">
  <?php foreach ( $current_btns as $label ) : ?>
    <button class="scroll__btn"><?php echo esc_html( $label ); ?></button>
  <?php endforeach; ?>
</div>
