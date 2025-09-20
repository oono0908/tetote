// swiper

jQuery(function ($) {
	var mvSwiper = new Swiper('.mv__swiper', {
    effect: 'fade',
    fadeEffect: { crossFade: true },
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    speed: 6000
  });
});


// drawerの開閉

jQuery(function($) {
  const $hamburger = $('.js-humbuger');
  const $drawer = $('.js-drawer');

  $hamburger.on('click', function() {
    const isOpen = $hamburger.attr('aria-expanded') === 'true';

    if (isOpen) {
      // 閉じる処理
      $hamburger.attr('aria-expanded', 'false').removeClass('is-open');
      $drawer.removeClass('is-open').fadeOut(250); // ふわっと閉じる
    } else {
      // 開く処理
      $hamburger.attr('aria-expanded', 'true').addClass('is-open');
      $drawer.addClass('is-open').fadeIn(250); // ふわっと開く
    }
  });
});
