jQuery(function($) {
  $('.js-scroll').on('click', function(e) {
    e.preventDefault();

    const target = $($(this).data('target'));
    if (!target.length) return;

    // ヘッダーや上部タイトルの高さを考慮
    const headerH = $('.header').outerHeight() || 0;
    const top = target.offset().top - headerH;

    $('html, body').animate({ scrollTop: top }, 400, 'swing');
  });
});
