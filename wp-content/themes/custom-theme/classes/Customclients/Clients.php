<?php

namespace Customgear\Customclients;

class Clients
{
    public function __construct()
    {
        $this->custom_post_type_clients();
        $this->create_taxonomy_categorie_clients();
    }

    public function custom_post_type_clients()
    {
        $label = array(
            'name'               => __('Clients', 'custom gear'),
            'singular name'      => __('Client', 'custom gear'),
            'menu_name'          => _x('Clients', 'Admin menu name', 'custom gear'),
            'add_new'            => __('Ajouter un client', 'custom gear'),
            'add_new_item'       => __('Ajouter un nouveau client', 'custom gear'),
            'edit'               => __('Modifier la fiche client', 'custom gear'),
            'new_item'           => __('Nouveau client', 'custom gear'),
            'view'               => __('Voir la fiche client', 'custom gear'),
            'view_item'          => __('Voir la fiche', 'custom gear'),
            'search_items'       => __('Rechercher une fiche client', 'custom gear'),
            'not_found'          => __('Aucune fiche trouvé', 'custom gear'),
            'not_found_in_trash' => __('Aucune fiche trouvé dans la corbeille', 'custom gear'),
            'parent'             => __('Article parent', 'custom gear'),
        );

        $args = array(
            'labels'              => $label,
            'public'              => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest'        => true,
            'rest_base'           => 'client',
            'supports'            => array('title', 'custom-fields'),
            'rewrite'             => array('slug' => 'client', 'with_front' => true)
        );
        register_post_type('clients', $args);
    }


    public function create_taxonomy_categorie_clients()
    {
        $labels = [
            'name'                  => _x('Catégorie de client', 'taxonomy general name', 'custom gear'),
            'singular_name'         => _x('Catégorie de client', 'taxonomy singular name', 'custom gear'),
            'search_items'          => __('Recherche de catégorie', 'custom gear'),
            'all_items'             => __('Toutes les catégories', 'custom gear'),
            'parent_item'           => __('Catégorie parent', 'custom gear'),
            'parent_item_colon'     => __('Catégorie parent', 'custom gear'),
            'edit_item'             => __('Éditer la catégorie', 'custom gear'),
            'update_item'           => __('Mettre à jour la catégorie', 'custom gear'),
            'add_new_item'          => __('Ajouter une nouvelle catégorie', 'custom gear'),
            'new_item_name'         => __('Nouvelle catégorie', 'custom gear'),
            'menu_name'             => __('Catégories des clients', 'custom gear')
        ];

        $args = [
            'hierarchical'          => true,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => true,
            'show_in_rest'          => true,
            'query_var'             => true,
            'rewrite'               => array('slug' => 'categorie', 'with_front' => true),
        ];
        register_taxonomy('clients', array('client'), $args);
    }
}
