<!-- THE PLACE TO SHOW SINGLE CLIENT INFORMATION -->

<section class="single container-big">
     <?php while (have_posts()) : the_post(); ?>

          <form method="POST" id="formsuivi" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

               <div class="flex form-container-section">

                    <div class="form-add-client-section">
                         <label for="nom">Nom du client</label>
                         <input type="text" name="nom" value="<?php echo get_post_meta(get_the_ID(), '_nom_client', true) ?>" required>

                         <label for="courriel">Courriel du client</label>
                         <input type="email" name="courriel" value="<?php echo get_post_meta(get_the_ID(), '_courriel_client', true) ?>">

                         <label for="numero">Numéro de téléphone</label>
                         <input type="tel" name="numero" value="<?php echo get_post_meta(get_the_ID(), '_numero_client', true) ?>">

                         <label for="date">Date et heure de rendez-vous</label>
                         <input type="datetime-local" value="<?php echo get_post_meta(get_the_ID(), '_date_client', true) ?>" name="date">
                    </div>

                    <!-- Statut client à rajouter -->

                    <div class="form-add-client-section">
                         <label for="cout">Coût des réparations</label>
                         <input type="text" name="cout" value="<?php echo get_post_meta(get_the_ID(), '_cout_client', true) ?>">

                         <label for="modele">Modèle de la voiture</label>
                         <input type="text" name="modele" value="<?php echo get_post_meta(get_the_ID(), '_modele_voiture', true) ?>">

                         <label for="marque">Marque de la voiture</label>
                         <input type="text" name="marque" value="<?php echo get_post_meta(get_the_ID(), '_marque_voiture', true) ?>">

                         <label for="annee">Année de la voiture</label>
                         <input type="text" name="annee" value="<?php echo get_post_meta(get_the_ID(), '_annee_voiture', true) ?>">
                    </div>

               </div>

               <div class="contaimer-textarea">
                    <label for="reparations">Réparation/inspection à effectuer</label>
                    <textarea type="text" name="reparations" /><?php echo get_post_meta(get_the_ID(), '_reparations_voiture', true) ?></textarea>
               </div>

               <!-- on enregistre le id afind de pouvoir modifier le post -->
               <input type="hidden" name="idclient" value="<?php echo get_post_meta(get_the_ID(), '_client_id', true) ?>" />

               <input type="hidden" name="action" value="edit_clients_form" />
               <div class="form__button center">
                    <input type="submit" value="Modifier" class="modifier btn u-margin-top-normal">
               </div>
          </form>
</section>

<?php
     endwhile;
?>
