<?php

namespace Customgear\Utilities;

class Supports
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'effix_supports']);
    }

    /**
     * [effix_supports description]
     * theme support
     * @return  [type]  [return description]
     */
    public function effix_supports()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('woocommerce');
        add_theme_support('menus');
        register_nav_menu('main_nav', 'Navigation');
        register_nav_menu('login_nav', 'Login');

        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets'
            ]
        );
    }
}
