<div id="modal" class="add-client-modal hide flex">

    <div class="fiche-technique">
        <img src="<?php echo get_template_directory_uri(); ?>/img/quitter.svg" class="close" alt="bouton fermer" />

        <h2 class="fiche-technique-titre">Fiche technique</h2>

        <div class="form-container">
            <form method="POST" id="formsuivi" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

                <div class="flex form-container-section">
                    <div class="form-add-client-section">

                        <label for="fname">Nom du client</label>
                        <input type="text" name="nom" required>

                        <label for="fname">Courriel du client</label>
                        <input type="email" name="courriel" required>

                        <label for="fname">Numéro de téléphone</label>
                        <input type="number" name="numero" required>

                        <label for="fname">Date et heure de rendez-vous</label>
                        <input type="datetime-local" name="date">
                    </div>


                    <div class="form-add-client-section">
                        <label for="fname">Coût des réparations</label>
                        <input type="text" name="cout">

                        <label for="fname">Modèle de la voiture</label>
                        <input type="text" name="modele">

                        <label for="fname">Marque de la voiture</label>
                        <input type="text" name="marque">

                        <label for="fname">Année de la voiture</label>
                        <input type="text" name="annee">
                    </div>

                </div>

                <div class="contaimer-textarea">
                    <label for="fname">Réparation/inspection à effectuer</label>
                    <textarea type="text" name="reparations"></textarea>
                </div>

                <input type="hidden" name="action" value="add_clients_form" />
                <div class="form__button center">
                    <input type="submit" value="Ajouter" class="btn u-margin-top-normal">
                </div>
            </form>
        </div>

    </div>
</div>
