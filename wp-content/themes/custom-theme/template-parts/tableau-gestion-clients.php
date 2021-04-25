<div class="tableau-clients">
    <div class="tableau-clients-header flex">
        <h2>Gestion clients</h2><img src="<?php echo get_template_directory_uri(); ?>/img/add.svg" class="add" alt="bouton ajouter" />
    </div>

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
            <td colspan="6"><hr></td>
        </tr>

        <!-- customer loop here -->
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'Clients',
                'posts_per_page' => -1
                )
            );
        ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
        $date = get_post_meta( get_the_ID(), '_date_client' ,true );
        $date = str_replace('T',' ', $date);
        $date = str_replace(':','h', $date);
        ?>

        <tr>
            <td><a href="<?php the_permalink($post->ID); ?>"><?php echo $post->ID ?> </a> </td>
            <td><?php echo get_post_meta( get_the_ID(), '_nom_client' ,true ) ?></td>
            <td><?php echo get_post_meta( get_the_ID(), '_numero_client' ,true ) ?></td>
            <td><?php echo $date ?></td>
            <td><?php echo get_post_meta( get_the_ID(), '_cout_client' ,true ) ?></td>
            <td><?php echo get_post_meta( get_the_ID(), '_statut_client' ,true ) ?></td>
        </tr>

        <?php endwhile; wp_reset_query(); ?>

    </table>
</div>
