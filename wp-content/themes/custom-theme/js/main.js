 jQuery(document).ready(function($) {

   $('#wrapper').show();
   
      $('.modale-accueil-bouton').click(function () {
          $('.arrow').addClass('rotate-arrow');
          $('#wrapper').addClass('close-modale');
      });
      
      $('.modale-accueil-bouton').click(function(){
          $('#wrapper').slideUp(400);
        });
   })
