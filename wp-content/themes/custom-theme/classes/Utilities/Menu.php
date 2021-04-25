<?php

namespace Customgear\Utilities;

class Menu
{
    public function __construct()
    {
        add_filter('woocommerce_account_menu_items', [$this, 'effix_menu']);
    }

    /**
     * [effix_menu description]
     *
     * @return  [type]  [return description]
     */
    public function effix_menu()
    {
        $menu = [
            'dashboard'              => __('Compte', 'woocommerce'),
            'orders'                 => __('Commandes', 'woocommerce'),
            'edit-account'           => __('Détails du compte', 'woocommerce'),
        ];
        return $menu;
    }
}
