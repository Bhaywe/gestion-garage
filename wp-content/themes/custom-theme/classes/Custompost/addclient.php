<?php

namespace Customgear\Custompost;

class addclient
{

    public function __construct()
    {
        add_action('admin_post_add_clients_form',  [$this, 'add_clients']);
    }

    // Créer un nouveau suivis client ainsi qu'un client
    public function add_clients()
    {
        $nouveau_client = [
            'post_title' => $_POST['nom'],
            'post_status' => "publish",
            'post_type' => 'clients',
        ];

        $thissuivi = wp_insert_post($nouveau_client);

        update_post_meta($thissuivi, '_nom_client', $_POST['nom']);
        update_post_meta($thissuivi, '_courriel_client', $_POST['courriel']);
        update_post_meta($thissuivi, '_numero_client', $_POST['numero']);
        update_post_meta($thissuivi, '_date_client', $_POST['date']);
        update_post_meta($thissuivi, '_cout_client', $_POST['cout']);
        update_post_meta($thissuivi, '_statut_client', 'En attente');

        update_post_meta($thissuivi, '_modele_voiture', $_POST['modele']);
        update_post_meta($thissuivi, '_annee_voiture', $_POST['annee']);
        update_post_meta($thissuivi, '_marque_voiture', $_POST['marque']);
        update_post_meta($thissuivi, '_reparations_voiture', $_POST['reparations']);

        $page = get_page_by_title('gestion');
        wp_redirect(get_permalink($page->ID));
        exit;
    }
}
