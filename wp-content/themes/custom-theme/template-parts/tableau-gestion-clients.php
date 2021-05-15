<div class="tableau-clients">
    <div class="tableau-clients-header flex">
        <h2>Gestion clients</h2><img src="<?php echo get_template_directory_uri(); ?>/img/add.svg" class="ajout-client" alt="bouton ajouter" />
    </div>

    <?php
    get_template_part('template-parts/add-client-modal');
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
                    <h2 class="fiche-technique-titre">Fiche technique de <?php echo get_post_meta(get_the_ID(), '_nom_client', true) ?></h2>
                    <div class="form-container-edit">
                    </div>
                </div>
            </div>

            <!-- créer une nouvelle modale ici pour les information du clients  -->

            <div id="modal-show-<?php echo $post->ID ?>" class="show-client-modal hide-show flex">
                <div class="fiche-technique">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/quitter.svg" class="close-show close-show-<?php echo $post->ID ?>" alt="bouton fermer" />
                    <h2 class="fiche-technique-titre">Fiche technique</h2>
                    <div class="container-information">

                        <p>Information sur le client à venir</p>

                    </div>
                </div>
            </div>

        <?php
        endwhile;
        wp_reset_query();
        ?>

    </table>
</div>
