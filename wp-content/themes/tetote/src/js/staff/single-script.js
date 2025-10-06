jQuery(function($){
  const sections = $('.staff-dt__main h2');
  const navItems = $('.side-bar__item');

  $(window).on('scroll', function(){
    let scroll = $(this).scrollTop() + 130;
    let current = 0;

    sections.each(function(i){
      if ($(this).offset().top <= scroll) current = i;
    });

    navItems.removeClass('is-active').eq(current).addClass('is-active');
  });
});
