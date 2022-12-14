$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 300) {
    $(".bg-nav-default").addClass("bg-color-nav");
  } else {
    $(".bg-nav-default").removeClass("bg-color-nav");
  }
});
