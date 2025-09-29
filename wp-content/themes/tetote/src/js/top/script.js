// mvの画像表示切り替えのswiper

jQuery(function ($) {
	var mvSwiper = new Swiper('.mv__swiper', {
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

jQuery(function($){
  const aboutSwiper = new Swiper('.about__swiper', {
    slidesPerView: 'auto',
    spaceBetween: 16,
    loop: true,
    loopAdditionalSlides: 10,
    speed: 12000,
    allowTouchMove: false,
    freeMode: true,
    freeModeMomentum: false,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      pauseOnMouseEnter: false
    },
    preventClicks: true,
    preventClicksPropagation: true
  });
});

jQuery(function($){
  var memberSwiper = new Swiper('.member__slider', {
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






