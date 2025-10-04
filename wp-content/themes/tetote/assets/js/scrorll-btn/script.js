$(function () {
  $('.js-scroll').on('click', function (e) {
    e.preventDefault();
    const target = $($(this).data('target'));
    if (!target.length) return;

    const headerH = $('.header').outerHeight() || 0;
    const topTitle = $('.top-title').outerHeight() || 0;
    const top = target.offset().top - ( headerH + topTitle);

    $('html, body').animate({ scrollTop: top }, 400, 'swing');
  });
});