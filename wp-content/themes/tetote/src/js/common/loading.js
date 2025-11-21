jQuery(function ($) {
  $(window).on("load", function () {
    const $loading = $(".loading");

    if ($loading.length === 0) return;
    setTimeout(function () {
      $loading.fadeOut(500);
    }, 1000);
  });
  setTimeout(function () {
    const $loading = $(".loading");
    if ($loading.length === 0) return;
    $loading.fadeOut(500);
  }, 5000);
});
