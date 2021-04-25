<?php

namespace Customgear\Utilities;

class Title
{
    public function __construct()
    {
        add_action('init', [$this, 'change_post_title']);
    }

    /**
     * [change_post_title description]
     * 
     * @return  [type]  [return description]
     */
    public function change_post_title()
    {
        $connected_title = 'Mon compte';
        $visitor_title = 'Se connecter';

        if (is_user_logged_in()) {
            $post_update = array(
                'ID'         => 19,
                'post_title' => $connected_title
            );
            wp_update_post($post_update);
        } else {
            $post_update = array(
                'ID'         => 19,
                'post_title' => $visitor_title
            );
            wp_update_post($post_update);
        }
    }
}
