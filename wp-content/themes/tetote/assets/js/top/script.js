// mvの画像表示切り替えのswiper

jQuery(function ($) {
	const mvSwiper = new Swiper('.mv__swiper', {
    effect: 'fade',
    fadeEffect: { crossFade: true },
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    preventClicks: true,
    preventClicksPropagation: true,
    speed: 6000
  });
});


// aboutセクションのswiper

const aboutSwiper = new Swiper('.about__swiper', {
  slidesPerView: 'auto',
  spaceBetween: 16,
  loop: true,
  loopAdditionalSlides: 10,
  speed: 12000,
  allowTouchMove: false,
  simulateTouch: false,
  freeMode: true,
  freeModeMomentum: false,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
    pauseOnMouseEnter: false
  },
  preventClicks: true,
  preventClicksPropagation: true
});




// memberセクションのswiper
jQuery(function($){
  const memberSwiper = new Swiper('.member__slider', {
        slidesPerView: "auto",
        spaceBetween: 20,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      navigation: {
      nextEl: '.member .btn-next',
      prevEl: '.member .btn-prev',
    },
   });
});

// scroll時のheaderの背景変化
jQuery(function ($) {
  const $header = $('.js-header');
  const $hamburger = $('.js-hamburger');
  const $drawer = $('.js-drawer');
  const $lines = $('.js-hamburger__lines');
  const $logo = $('.js-title-logo');
  const $mv = $('.js-mv');
  const mvHeight = $mv.outerHeight();

  // ==== スクロールによる色変更 ====
  $(window).on('scroll', function () {
    const scrollTop = $(this).scrollTop();
    const isDrawerOpen = $hamburger.attr('aria-expanded') === 'true';

    if (scrollTop > mvHeight || isDrawerOpen) {
      // mvエリアを超えた or ドロワー開閉中は色変更
      $header.addClass('is-open');
      $lines.addClass('is-open');
      $logo.addClass('is-open');
    } else {
      // mvエリア内かつドロワー閉じている時のみ元に戻す
      $header.removeClass('is-open');
      $lines.removeClass('is-open');
      $logo.removeClass('is-open');
    }
  });

  // ハンバーガーメニュー開閉
  $hamburger.on('click', function () {
    const isOpen = $hamburger.attr('aria-expanded') === 'true';
    const scrollTop = $(window).scrollTop();

    if (isOpen) {
      // 閉じる
      $hamburger.attr('aria-expanded', 'false').removeClass('is-open');
      $drawer.removeClass('is-open').fadeOut(250);

      // mvエリア内なら色を戻す
      if (scrollTop < mvHeight) {
        $header.removeClass('is-open');
        $lines.removeClass('is-open');
        $logo.removeClass('is-open');
      }
    } else {
      // 開く
      $hamburger.attr('aria-expanded', 'true').addClass('is-open');
      $drawer.addClass('is-open').fadeIn(250);

      // 開いている間は常に色を変更
      $header.addClass('is-open');
      $lines.addClass('is-open');
      $logo.addClass('is-open');
    }
  });
});








