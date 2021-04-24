 jQuery(document).ready(function($) {

   console.log("hello");
      $('.modale-accueil-bouton').click(function () {
          $('.arrow').addClass('rotate-arrow');
        $('#wrapper').addClass('close-modale'); console.log
      });
      
      $('.modale-accueil-bouton').click(function(){
          $('#wrapper').slideUp(400);
        });
   })
