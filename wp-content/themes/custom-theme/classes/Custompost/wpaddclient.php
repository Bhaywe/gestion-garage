<?php

namespace Customgear\Custompost;

class wpaddclient
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
    }
}
