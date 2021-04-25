<?php

namespace Customgear\Utilities;

class Scripts
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    /**
     * [enqueue_styles_effix description]
     * 
     * @return  [type]  [return description]
     */
    public function enqueue_styles()
    {
        wp_enqueue_style('style-principal', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ));
    }
    
}
