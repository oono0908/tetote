jQuery(function($){
  const sections = $('.staff-dt__main h2');
  const navItems = $('.side-bar__item');

  // スクロール中にアクティブ切り替え
  $(window).on('scroll', function(){
    let scroll = $(this).scrollTop();
    let current = 0;
    sections.each(function(i){
      if ($(this).offset().top - 320 <= scroll) current = i;
    });
    navItems.removeClass('is-active').eq(current).addClass('is-active');
  });

  // クリックで該当箇所へスムーススクロール
  navItems.on('click', function(){
    const index = $(this).index();
    const target = sections.eq(index).offset().top - 118;
    $('html, body').animate({ scrollTop: target }, 500);
    return false;
  });
});
