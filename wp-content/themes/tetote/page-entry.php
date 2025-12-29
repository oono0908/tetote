<?php get_header(); ?>

<main>
<!-- パンくず -->
<div class="contact">
<?php get_template_part('parts/breadcrumb'); ?>
  <div class="contact__inner inner">
    <div class="contact__title-wrap">
      <p class="contact__title-eng">ENTRY FORM</p>
      <h2 class="contact__title-ja">
        <span class="contact__title--red">新卒・中途採用</span><br class="md-none">エントリーフォーム
      </h2>
      <p class="contact__txt">
        当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<br>
        <span class="contact__txt--red">&#8251;</span>は必須項目になります。
      </p>
    </div>

    <div class="contact__body-wrap">
      <div class="contact__body">
        <?php
          echo do_shortcode('[contact-form-7 id="756867" title="コンタクトフォーム 1"]');
        ?>
      </div>
    </div>
  </div>
</div>
</main>

<?php get_footer(); ?>








