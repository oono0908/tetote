jQuery(function ($) {

  $('.js-question').on('click',function () {
    $(this).find(".faq__question").toggleClass("is-open");
    var targetId = $(this).data('target');
    var $answer = $('#' + targetId );

    if ($answer.length) {
      $answer.stop().slideToggle(250);
    }
  });
});