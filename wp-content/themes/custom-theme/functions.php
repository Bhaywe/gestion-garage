<?php

require __DIR__ . '/vendor/autoload.php';

use Customgear\Activator;

$activator = new Activator();

$activator->customgear_init();

function edit_clients()
{

    $nouveau_client = [
        'ID'           => $POST->ID,
        'post_title' => $_POST['nom'],
        'post_status' => "publish",
        'post_type' => 'clients',
    ];

    $thissuivi = wp_update_post($nouveau_client);

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

    // $page = get_page_by_title('gestion');
    // wp_redirect(get_permalink($page->ID));
    // exit;
}

add_action('admin_post_edit_clients_form',  'edit_clients');
