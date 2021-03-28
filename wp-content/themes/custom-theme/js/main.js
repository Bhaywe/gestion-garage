$(function () {
     $('.header__burger').click(() => {
          $('.header__nav').toggleClass('translate');
          $('.header__burger').toggleClass('toggle');
     });
});

// $(document).ready(function () {
//      $('#loader').css('display', 'none');
//      $('#wrapper').css('display', 'block');
// });

$(document).ready(function () {
     $('#loader').hide();
     $('#wrapper').show();
});
