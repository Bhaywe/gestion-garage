<section class="container-big">
     <?php while (have_posts()) : the_post(); ?>

          <form method="POST" id="edit-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

               <div class="flex form-container-section">

                    <div class="form-edit-client-section">
                         <label for="nom">Nom du client</label>
                         <input type="text" name="nom" value="<?php echo get_post_meta(get_the_ID(), '_nom_client', true) ?>" required>

                         <label for="courriel">Courriel du client</label>
                         <input type="email" name="courriel" value="<?php echo get_post_meta(get_the_ID(), '_courriel_client', true) ?>">

                         <label for="numero">Numéro de téléphone</label>
                         <input type="tel" name="numero" value="<?php echo get_post_meta(get_the_ID(), '_numero_client', true) ?>">

                         <label for="date">Date et heure de rendez-vous</label>
                         <input type="datetime-local" value="<?php echo get_post_meta(get_the_ID(), '_date_client', true) ?>" name="date">

                         <label for="temps">Durée des réparation</label>
                         <input type="text" value="<?php echo get_post_meta(get_the_ID(), '_temps_client', true) ?>" name="temps">
                    </div>

                    <div class="form-edit-client-section">
                         <label for="statut">État du suivi</label>
                         <select name="statut" id="statut">
                              <option value="En attente" id="attente" <?php if (get_post_meta(get_the_ID(), '_statut_client', true) == "En attente") {
                                                                           echo "selected";
                                                                      }  ?>>En attente</option>
                              <option value="En cours" id="cours" <?php if (get_post_meta(get_the_ID(), '_statut_client', true) == "En cours") {
                                                                           echo "selected";
                                                                      }  ?>>En cours</option>
                              <option value="Terminé" id="terminer" <?php if (get_post_meta(get_the_ID(), '_statut_client', true) == "Terminé") {
                                                                           echo "selected";
                                                                      }  ?>>Terminé</option>
                         </select>

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
               </div><br>

               <div class="contaimer-textarea">
                    <label for="reparations-done">Réparations effectués</label>
                    <textarea type="text" name="reparations-done" /><?php echo get_post_meta(get_the_ID(), '_reparations_effectuer', true) ?></textarea>
               </div><br>

               <div class="contaimer-textarea">
                    <label for="recommandations">Réparation/inspection à effectuer</label>
                    <textarea type="text" name="recommandations" /><?php echo get_post_meta(get_the_ID(), '_recommandations_voiture', true) ?></textarea>
               </div><br>

               <!-- on enregistre le id afind de pouvoir modifier le post -->
               <input type="hidden" name="idclient" value="<?php echo get_post_meta(get_the_ID(), '_client_id', true) ?>" />

               <input type="hidden" name="action" value="edit_clients_form" />
               <div class="form__button center">
                    <input type="submit" value="Modifier" class="modifier btn u-margin-top-normal">
                    <a href="<?php echo get_delete_post_link($post->ID, '', true) ?>" onclick="return confirm('Are you sure you want to delete this item?');">Supprimer</a>
               </div>

          </form>
</section>

<?php
     endwhile;
?>
