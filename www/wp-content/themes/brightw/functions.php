<?php

function theme_name_scripts (){
     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');  
     wp_enqueue_style('style', get_stylesheet_uri());
     wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
     wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
     wp_deregister_script( 'jquery' );
     wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
     wp_enqueue_script( 'jquery' );
    
}
add_action('wp_enqueue_scripts','theme_name_scripts');

//Мініатюра
add_theme_support( 'post-thumbnails' );
?>