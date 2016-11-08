<?php

function enqueue_scripts(){
    wp_enqueue_style('frontline-style', get_stylesheet_uri(), array('dashicons'));
    wp_enqueue_script('vendor', get_template_directory_uri() . '/js/dist/vendor.js',array('jquery'));
    wp_enqueue_script('frontline-app', get_template_directory_uri() . '/js/dist/app.js', array('jquery','vendor'));
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

?>
