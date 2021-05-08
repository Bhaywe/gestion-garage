<div class="tableau-clients">
    <div class="tableau-clients-header flex">
        <h2>Gestion clients</h2><img src="<?php echo get_template_directory_uri(); ?>/img/add.svg" class="ajout-client" alt="bouton ajouter" />
    </div>

    <!--  get template uri add-client-modal -->
    <?php

    get_template_part('template-parts/add-client-modal');
    // get_template_part('template-parts/edit-client-modal');

    ?>

    <table>
        <tr>
            <th>#id</th>
            <th>Nom du client</th>
            <th>Numéro de téléphone</th>
            <th>Date et heure<br> du rendez-vous</th>
            <th>Coûts des réparations</th>
            <th>Statut</th>
        </tr>
        <tr id="separation-line">
            <td colspan="6">
                <hr>
            </td>
        </tr>

        <!-- customer loop here -->
        <?php
        $loop = new WP_Query(
            array(
                'post_type' => 'Clients',
                'posts_per_page' => -1
            )
        );
        ?>

        <?php while ($loop->have_posts()) : $loop->the_post();
            $post_id = get_the_ID();

            $date = get_post_meta(get_the_ID(), '_date_client', true);
            $date = str_replace('T', ' ', $date);
            $date = str_replace(':', 'h', $date);
        ?>

            <script>
                jQuery(document).ready(function($) {
                    $('._nom_client-<?php echo $post->ID ?>').click(function() {
                        $('#modal-edit-<?php echo $post->ID ?>').toggleClass("hide-edit");
                    });

                    $('.close-edit-<?php echo $post->ID ?>').click(function() {
                        $('#modal-edit-<?php echo $post->ID ?>').toggleClass("hide-edit");
                    });
                });
            </script>

            <tr>
                <td><a href="<?php the_permalink($post->ID); ?>" id="<?php echo $post->ID ?>"><?php echo $post->ID ?> </a> </td>
                <td class="_nom_client-<?php echo $post->ID ?>"><?php echo get_post_meta(get_the_ID(), '_nom_client', true) ?></td>
                <td><?php echo get_post_meta(get_the_ID(), '_numero_client', true) ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo get_post_meta(get_the_ID(), '_cout_client', true) ?></td>
                <td><?php echo get_post_meta(get_the_ID(), '_statut_client', true) ?></td>
            </tr>

            <div id="modal-edit-<?php echo $post->ID ?>" class="edit-client-modal hide-edit flex">

                <div class="fiche-technique">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/quitter.svg" class="close-edit-<?php echo $post->ID ?>" alt="bouton fermer" />

                    <h2 class="fiche-technique-titre">Fiche technique</h2>

                    <div class="form-container">
                        <form method="PUT" id="formsuivi" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

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

                            <input type="hidden" name="theid" value="edit_clients_form<?php get_the_ID() ?>" />

                            <div class="form__button center">
                                <input type="submit" value="Modifier" class="modifier btn u-margin-top-normal">
                            </div>
                        </form>
                    </div>

                </div>
            </div>


        <?php

        endwhile;

        wp_reset_query();

        ?>

    </table>
</div>
