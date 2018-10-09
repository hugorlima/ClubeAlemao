<?php

function custom_add_scripts() {

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), '3.3.1', false);
    wp_enqueue_script('jquery');

}

add_action('wp_enqueue_scripts', 'custom_add_scripts');