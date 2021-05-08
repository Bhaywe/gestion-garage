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

  //  $('._nom_client').click(function () {
  //   $('#modal-edit').toggleClass("hide-edit");
  //  });
   
  //  $('.close-edit').click(function () {
  //   $('#modal-edit').toggleClass("hide-edit");
  //  });
   

});
