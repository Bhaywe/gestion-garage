 jQuery(document).ready(function($) {
   
   // Fermeture de la modale
  $('.modale-accueil-bouton').click(function () {
    $('.arrow').addClass('rotate-arrow');
    $('#wrapper').addClass('close-modale');
    $('#wrapper').slideUp(1000);

    setTimeout(function() {
      window.location.href = "/gestion"
     }, 1000);
  });
   
   $('.ajout-client').click(function () {
     $('#modal-add').toggleClass("hide");
   });
   
   $('.close').click(function () {
    $('#modal-add').toggleClass("hide");
   });

  //  $(document).on('change', '#temps', function () {
  //    console.log($('#temps').val())
  //  });

});
