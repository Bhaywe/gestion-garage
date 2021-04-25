<?php

namespace Customgear\Customclients;

class Metabox
{
    public function __construct()
    {
        add_action("admin_init", [$this, 'add_post_meta_boxes_clients']);
        add_action("save_post_clients", [$this, 'save_post_meta_boxes_clients']);
    }

    // Ajout metabox pour le cpt client
    public function add_post_meta_boxes_clients()
    {
        add_meta_box(
            "post_clients_meta_box",
            "Courriel du client",
            [$this, "display_field_courriel_clients"],
            "client",
            "normal",
            "high"
        );

        add_meta_box(
            "post_clients_meta_box",
            "Numéro de téléphone",
            [$this, "display_field_numero_clients"],
            "client",
            "normal",
            "high"
        );
    }

    // sauvegarde les metabox
    public function save_post_meta_boxes_clients($post_id)
    {
        global $post, $post_type;
        if ($post_type == 'clients') {

            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }
            if (get_post_status($post->ID) === 'auto-draft') {
                return;
            }

            update_post_meta($post->ID, "_courriel_client", sanitize_text_field($_POST["_courriel_client"]));
            update_post_meta($post->ID, "_numero_client", sanitize_text_field($_POST["_numero_client"]));
        }
    }

    // ajout des données aux metabox pour les sauvegarder 
    // s'il y a modification ou ajout
    public function display_field_courriel_client()
    {
        global $post, $post_type;
        if ($post_type == 'clients' && is_admin()) {

            $custom = get_post_custom($post->ID);
            $courrielClient = $custom["_courriel_client"][0];
            $numeroClient = $custom["_numero_client"][0];

            if (isset($courrielClient)) {
                ?>
                <br>
                <div class="flex container">
                    <div class="flex container_courriel-client">
                        <label for="_courriel_client">Courriel du client</label>
                        <input type="email" name="_courriel_client" value="<?php echo $courrielClient ?>">
                    </div>
                </div>
                <br>
                <?php
            }

            if (isset($numeroClient)){
                ?>
                <br>
                    <div class="flex container">
                        <div class="flex container_courriel-client">
                            <label for="_courriel_client">Courriel du client</label>
                            <input type="email" name="_courriel_client" value="<?php echo $courrielClient ?>">
                        </div>
                    </div>
                <br>
                <?php
            }
        }
    }
}
