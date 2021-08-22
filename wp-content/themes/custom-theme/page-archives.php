<?php
/*
Template Name: Name To Appear In The Dropdown
*/
get_header();
?>
<div class="tableau-clients">
    <div class="tableau-clients-header flex">
        <h2>Archives</h2>
    </div>
    <table id="archives">
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

        <?php
        $loop = new WP_Query(
            array(
                'post_type' => 'Clients',
                'posts_per_page' => -1,
                'meta_query' => array(
                    array(
                        'key' => '_statut_client',
                        'value' => ['Terminé'],
                    ),
                ),
            )
        );
        ?>

        <?php while ($loop->have_posts()) : $loop->the_post();

            $date = get_post_meta(get_the_ID(), '_date_client', true);
            $date = str_replace('T', ' ', $date);
            $date = str_replace(':', 'h', $date);
        ?>

            <script>
                jQuery(document).ready(function($) {
                    $('._nom_client-<?php echo $post->ID ?>').click(function() {
                        $('#modal-edit-<?php echo $post->ID ?>').toggleClass("hide-edit");
                        $('.form-container-edit').load('<?php the_permalink($post->ID); ?>');
                    });

                    $('.close-edit-<?php echo $post->ID ?>').click(function() {
                        $('#modal-edit-<?php echo $post->ID ?>').toggleClass("hide-edit");
                    });

                    $('._id_client-<?php echo $post->ID ?>').click(function() {
                        $('#modal-show-<?php echo $post->ID ?>').toggleClass("hide-show");
                    });

                    $('.close-show-<?php echo $post->ID ?>').click(function() {
                        $('#modal-show-<?php echo $post->ID ?>').toggleClass("hide-show");
                    });
                });
            </script>

            <tr>
                <td class="_id_client-<?php echo $post->ID ?>"><?php echo $post->ID ?></td>
                <td class="_nom_client-<?php echo $post->ID ?>"><?php echo get_post_meta(get_the_ID(), '_nom_client', true) ?></td>
                <td><?php echo get_post_meta(get_the_ID(), '_numero_client', true) ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo get_post_meta(get_the_ID(), '_cout_client', true) ?></td>
                <td><?php echo get_post_meta(get_the_ID(), '_statut_client', true) ?></td>
            </tr>

            <div id="modal-edit-<?php echo $post->ID ?>" class="edit-client-modal hide-edit flex">
                <div class="edit-fiche-technique">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/quitter.svg" class="close-edit close-edit-<?php echo $post->ID ?>" alt="bouton fermer" />
                    <h2 class="fiche-technique-titre-edit">Fiche technique de <?php echo get_post_meta(get_the_ID(), '_nom_client', true) ?></h2>
                    <div class="form-container-edit">
                    </div>
                </div>
            </div>

            <!-- créer une nouvelle modale ici pour les information du clients  -->

            <div id="modal-show-<?php echo $post->ID ?>" class="show-client-modal hide-show flex">
                <div class="fiche-technique">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/quitter.svg" class="close-show close-show-<?php echo $post->ID ?>" alt="bouton fermer" />
                    <h2 class="fiche-technique-titre-show">Fiche technique</h2>
                    <div class="container-information">
                        <div class="container-information-split">
                            <p>Nom du client: <span><?php echo get_post_meta(get_the_ID(), '_nom_client', true) ?></span></p>

                            <p>Courriel du client: <span><?php echo get_post_meta(get_the_ID(), '_courriel_client', true) ?></span></p>

                            <p>Numéro de téléphone: <span><?php echo get_post_meta(get_the_ID(), '_numero_client', true) ?></span></p>

                            <p>Date et heure de rendez-vous: <span><?php echo $date ?></span></p>

                            <p>Durée des réparation: <span><?php echo get_post_meta(get_the_ID(), '_temps_client', true) ?></span></p>

                            <p>Réparations effectués: <span><?php echo get_post_meta(get_the_ID(), '_reparations_voiture', true) ?></span></p>
                        </div>

                        <div class="container-information-split">
                            <p>État du suivi: <span><?php echo get_post_meta(get_the_ID(), '_statut_client', true) ?></span></p>

                            <p>Coût des réparations: <span><?php echo get_post_meta(get_the_ID(), '_cout_client', true) ?></span></p>

                            <p>Modèle de la voiture: <span><?php echo get_post_meta(get_the_ID(), '_modele_voiture', true) ?></span></p>

                            <p>Marque de la voiture: <span><?php echo get_post_meta(get_the_ID(), '_marque_voiture', true) ?></span></p>

                            <p>Année de la voiture: <span><?php echo get_post_meta(get_the_ID(), '_annee_voiture', true) ?></span></p>

                            <p>Réparation/inspection à effectuer: <span><?php echo get_post_meta(get_the_ID(), '_reparations_effectuer', true) ?></span></p>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        endwhile;
        wp_reset_query();
        ?>

    </table>
</div>
