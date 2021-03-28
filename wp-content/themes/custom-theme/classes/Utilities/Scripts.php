<?php

namespace Effix\Utilities;

class Scripts
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles_effix']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts_effix']);
    }

    /**
     * [enqueue_styles_effix description]
     * 
     * @return  [type]  [return description]
     */
    public function enqueue_styles_effix()
    {
        wp_enqueue_style('style-principal', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('style-effix', get_template_directory_uri() . '/style.css');
        
    }

    public function enqueue_scripts_effix()
    {
        wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ));
    }
    
}
