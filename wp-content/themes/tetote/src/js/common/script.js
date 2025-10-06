jQuery(function($) {
  const $hamburger = $('.js-hamburger');
  const $drawer = $('.js-drawer');
  $hamburger.on('click', function() {
    const isOpen = $hamburger.attr('aria-expanded') === 'true';
  
    if (isOpen) {
      // 閉じる処理
      $hamburger.attr('aria-expanded', 'false').removeClass('is-open');
      $drawer.removeClass('is-open').fadeOut(250);

    } else {
      // 開く処理
      $hamburger.attr('aria-expanded', 'true').addClass('is-open');
      $drawer.addClass('is-open').fadeIn(250);
    }
  });
});