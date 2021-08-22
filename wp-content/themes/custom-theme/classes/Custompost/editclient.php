<?php

namespace Customgear\Custompost;

class editclient
{

    public function __construct()
    {
        add_action('admin_post_edit_clients_form',  [$this, 'edit_clients']);
    }

    // Créer un nouveau suivis client ainsi qu'un client
    public function edit_clients()
    {
        $edit_client = [
            'ID'          => $_POST['idclient'],
            'post_title'  => $_POST['nom'],
            'post_status' => "publish",
            'post_type'   => 'clients',
        ];

        $thissuivi = wp_update_post($edit_client, true);

        update_post_meta($thissuivi, '_nom_client', $_POST['nom']);
        update_post_meta($thissuivi, '_courriel_client', $_POST['courriel']);
        update_post_meta($thissuivi, '_numero_client', $_POST['numero']);
        update_post_meta($thissuivi, '_date_client', $_POST['date']);
        update_post_meta($thissuivi, '_temps_client', $_POST['temps']);

        update_post_meta($thissuivi, '_statut_client', $_POST['statut']);
        update_post_meta($thissuivi, '_cout_client', $_POST['cout']);
        update_post_meta($thissuivi, '_modele_voiture', $_POST['modele']);
        update_post_meta($thissuivi, '_marque_voiture', $_POST['marque']);
        update_post_meta($thissuivi, '_annee_voiture', $_POST['annee']);

        update_post_meta($thissuivi, '_reparations_voiture', $_POST['reparations']);
        update_post_meta($thissuivi, '_reparations_effectuer', $_POST['reparations-done']);

        $page = get_page_by_title('gestion');
        wp_redirect(get_permalink($page->ID));
        exit;
    }
}
