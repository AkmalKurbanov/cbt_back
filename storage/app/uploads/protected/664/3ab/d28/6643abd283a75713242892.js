$('.hamburger').on('click', function () {
  $('.header .nav').toggleClass('open');
  $('body').toggleClass('no-scroll');
});

$(document).mouseup(function (e) {
  var div = $(".nav.open, .booking-popup");
  if (!div.is(e.target) &&
    div.has(e.target).length === 0) {
    div.removeClass('open');
    $('body').removeClass('no-scroll');
  }
});