<div id="modal" class="add-client-modal hide flex">

    <div class="fiche-technique">
        <img src="<?php echo get_template_directory_uri(); ?>/img/quitter.svg" class="close" alt="bouton fermer" />

        <h2 class="fiche-technique-titre">Fiche technique</h2>

        <div class="form-container">
            <form method="POST" id="formsuivi" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

                <div class="flex form-container-section">
                    <div class="form-add-client-section">
                        <input type="text" name="nom" placeholder="Nom du client" required>

                        <input type="email" name="courriel" placeholder="Courriel du client" required>

                        <input type="number" name="numero" placeholder="Numéro de téléphone" required>

                        <input type="datetime-local" name="date" placeholder="Date et heure de rendez-vous" required>
                    </div>


                    <div class="form-add-client-section">
                        <input type="text" name="cout" placeholder="Coût des réparations" required>

                        <input type="text" name="modele" placeholder="Modèle de la voiture" required>

                        <input type="text" name="marque" placeholder="Marque de la voiture" required>

                        <input type="text" name="annee" placeholder="Année de la voiture" required>
                    </div>

                </div>

                <div class="contaimer-textarea">
                    <textarea type="text" name="reparations" placeholder="Réparation/inspection à effectuer" required></textarea>
                </div>

                <input type="hidden" name="action" value="add_clients_form" />
                <div class="form__button center">
                    <input type="submit" value="Envoyer" class="btn u-margin-top-normal">
                </div>
            </form>
        </div>


    </div>
</div>
