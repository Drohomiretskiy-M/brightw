<?php

function theme_name_scripts (){
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');  
wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','theme_name_scripts');

//Мініатюра
add_theme_support( 'post-thumbnails' );

register_nav_menu("menu", 'Основне меню');
?>