<section class="abonnement u-margin-top-big container">
     <h1 class="heading-primary center u-margin-bottom-big">S'abonner à Effix</h1>
     <article class="abonnement__item u-margin-bottom-mid">
          <h3 class="heading-tertiary u-margin-bottom-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. A aliquam risus metus sed dolor. Id platea tellus diam sed mi. Enim facilisis adipiscing diam integer nec nulla a turpis egestas. Ut nisl fringilla diam congue. Sollicitudin vitae tellus arcu, a, ornare laoreet ac. Nisl lorem mi volutpat quis. Odio feugiat morbi eget enim sit praesent. Eget morbi volutpat et placerat nunc, at dictum donec. Malesuada mauris id lectus tortor viverra lobortis semper sem mauris.</p>
     </article>
     <article class="abonnement__item u-margin-bottom-mid">
          <h3 class="heading-tertiary u-margin-bottom-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. A aliquam risus metus sed dolor. Id platea tellus diam sed mi. Enim facilisis adipiscing diam integer nec nulla a turpis egestas. Ut nisl fringilla diam congue. Sollicitudin vitae tellus arcu, a, ornare laoreet ac. Nisl lorem mi volutpat quis. Odio feugiat morbi eget enim sit praesent. Eget morbi volutpat et placerat nunc, at dictum donec. Malesuada mauris id lectus tortor viverra lobortis semper sem mauris.</p>
     </article>
     <article class="abonnement__item u-margin-bottom-mid">
          <h3 class="heading-tertiary u-margin-bottom-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. A aliquam risus metus sed dolor. Id platea tellus diam sed mi. Enim facilisis adipiscing diam integer nec nulla a turpis egestas. Ut nisl fringilla diam congue. Sollicitudin vitae tellus arcu, a, ornare laoreet ac. Nisl lorem mi volutpat quis. Odio feugiat morbi eget enim sit praesent. Eget morbi volutpat et placerat nunc, at dictum donec. Malesuada mauris id lectus tortor viverra lobortis semper sem mauris.</p>
     </article>
     <div class="abonnement__produit flex">
          <div class="abonnement__produit--detail">
               <h1 class="heading-primary">200$</h1>
               <h4 class="heading-quaternary u-margin-top-small">*abonnement annuel</h4>
          </div>
          <div class="abonnement__produit--panier">
               <?php query_posts('cat=20');
               if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();
                         echo the_content(); ?>
               <?php endwhile;
               endif; ?>
          </div>
     </div>
</section>
