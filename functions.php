<?php
function alphas_setup_theme(){
	load_theme_textdomain('alphas');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');


}
add_action('after_setup_theme','alphas_setup_theme');


function alphas_enqueue_scripts(){
  wp_enqueue_style('alphas','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
  wp_enqueue_style('alphas_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','alphas_enqueue_scripts');
