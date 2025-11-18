</div>

<footer class="footer">
  <div class="footer__inner">
    <div class="footer__bcg">
      <div class="footer__btn-wrap">
        <p class="footer__btn-txt">わたしたちと一緒に働く仲間を募集中です。<br>
        少数精鋭のチームで<br>
        あなたも会社も一緒に<br class="md-none">成長していきましょう。
        </p>
        <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="footer__entry-btn btn btn--arrow">ENTRY</a>
      </div>
    </div>
    <div class="footer__body">
      <div class="footer__body-upper">
        <div class="footer__logo md-show">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo-link">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/footer/title-black.svg')); ?>" alt="タイトルロゴ" class="footer__logo-img" loading="lazy">
          </a>
        </div>
        <nav class="footer__nav">
          <ul class="footer__items">
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__link">ホーム</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="footer__link">TETOTEについて</a>
            </li>
             <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/staff/' ) ); ?>" class="footer__link">人を知る</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/career/' ) ); ?>" class="footer__link">研修制度とキャリアパス</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/benefits/' ) ); ?>" class="footer__link">福利厚生</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="footer__link">採用ブログ</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/details/' ) ); ?>" class="footer__link">募集要項</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="footer__link">よくある質問</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="footer__link">会社概要</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="footer__body-lower">
        <ul class="footer__sns-items">
          <li class="footer__sns-item">
            <a href="" class="footer__sns-link">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/footer/facebook-icon.svg')); ?>" alt="フェースブックのアイコン" class="footer__sns-img" loading="lazy">
            </a>
          </li>
          <li class="footer__sns-item">
            <a href="" class="footer__sns-link">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/footer/twitter-icon.svg')); ?>" alt="ツイッターのアイコン" class="footer__sns-img" loading="lazy">
            </a>
          </li>
          <li class="footer__sns-item">
            <a href="" class="footer__sns-link">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/footer/yutube-icon.svg')); ?>" alt="ユーチューブのアイコン" class="footer__sns-img" loading="lazy">
            </a>
          </li>
        </ul>
        <div class="footer__logo md-none">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo-link">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/footer/title-black.svg')); ?>" alt="タイトルロゴ" class="footer__logo-img" loading="lazy">
          </a>
        </div>
        <p class="footer__copy">&copy;&nbsp;2024&nbsp;TETOTE&nbsp;All&nbsp;Right&nbsp;Reserved.</p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>