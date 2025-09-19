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
