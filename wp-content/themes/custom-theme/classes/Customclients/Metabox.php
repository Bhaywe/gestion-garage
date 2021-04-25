<?php

namespace Customgear\Customclients;

class Metabox
{
    public function __construct()
    {
        // add_action("add_meta_boxes", [$this, 'add_post_meta_boxes_clients']);
        add_action("admin_init", [$this, 'add_post_meta_boxes_clients']);
        add_action("save_post_clients", [$this, 'save_post_meta_boxes_clients']);
    }

    // Ajout metabox pour le cpt client
    public function add_post_meta_boxes_clients()
    {
        add_meta_box(
            "post_clients_meta_box",
            "Fiche client",
            [$this, "display_field"],
            "clients",
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
            update_post_meta($post->ID, "_date_client", sanitize_text_field($_POST["_date_client"]));
            update_post_meta($post->ID, "_cout_client", sanitize_text_field($_POST["_cout_client"]));
            update_post_meta($post->ID, "_statut_client", sanitize_text_field($_POST["_statut_client"]));
        }
    }

    // ajout des données aux metabox pour les sauvegarder 
    // s'il y a modification ou ajout
    public function display_field()
    {
        global $post, $post_type;
        if ($post_type == 'clients' && is_admin()) {

            $custom = get_post_custom($post->ID);
            $courrielClient = $custom["_courriel_client"][0];
            $numeroClient = $custom["_numero_client"][0];
            $dateClient = $custom["_date_client"][0];
            $coutClient = $custom["_cout_client"][0];
            $statutClient = $custom["_statut_client"][0];


            if (isset($statutClient)) {
                switch ($statutClient) {
                    case 'En attente':
                        $attenteSelected = "selected";
                        break;
                    case 'En cours':
                        $encoursSelected = "selected";
                        break;
                    case 'Terminé':
                        $terminerSelected = "selected";
                        break;
                }
            }

                ?>
                <br>
                <div class="flex container">
                    <div class="flex container_courriel">
                        <label for="_courriel_client">Courriel client</label>
                        <input type="email" name="_courriel_client" value="<?php echo $courrielClient ?>">
                    </div>
                </div>
                <br>

                <br>
                <div class="flex container">
                    <div class="flex container_numero">
                        <label for="_numero_client">Numéro de téléphone</label>
                        <input type="text" name="_numero_client" value="<?php echo $numeroClient ?>">
                    </div>
                </div>
                <br>

                <br>
                <div class="flex container">
                    <div class="flex container_date">
                        <label for="_date_client">Date et heure du rendez-vous</label>
                        <input type="datetime-local" name="_date_client" value="<?php echo $dateClient ?>">
                    </div>
                </div>
                <br>
                <br>
                <div class="flex container">
                    <div class="flex container_cout">
                        <label for="_cout_client">Coûts des réparations</label>
                        <input type="text" name="_cout_client" value="<?php echo $coutClient ?>">
                    </div>
                </div>
                <br>
                <br>
                <div class="flex container">
                    <div class="flex container_statut">
                        <label for="_statut_client">Statut</label>
                        <input type="text" name="_statut_client" value="<?php echo $statutClient ?>">
                    </div>
                </div>

                <div class="flex container_etat-suivi">
                    <label for="_statut_client">État du suivi</label>
                    <select name="_statut_client" id="_statut_client">
                        <option value="En attente" id="state-en-cours" <?php echo $attenteSelected ?>>En attente</option>
                        <option value="En cours" id="state-en-cours" <?php echo $encoursSelected ?>>En cours</option>
                        <option value="Terminé" id="state-done" <?php echo $terminerSelected ?>>Terminé</option>
                    </select>
                </div>
                <br>
                <?php
            
        }
    }
}
