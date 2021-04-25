<?php

namespace Customgear\Utilities;

class Widgets
{
    public function __construct()
    {
        add_action('widgets_init', [$this, 'contact_form']);
    }

    /**
     * [contact_form description]
     * 
     * @return  [type]  [return description]
     */
    public function contact_form()
    {
        register_sidebar(array(
            'name' => 'Formulaire de contact',
            'id' => 'contact-form',
        ));
    }
}
