<?php
function alphas_setup_theme(){
	load_theme_textdomain('alphas');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	$alpha_text_color_color =array(
		'header-text' =>true,
		'default-text-color' =>"#222"
	);
	add_theme_support('custom-header',$alpha_text_color_color);
	$alpha_logo_color=array(
		"width" => "100",
		"height" =>"100",
		"height" => 1200,
		"width"  =>600,
		"flex-height" => true,
		"flex-width"  => true
	);

	add_theme_support('post-formats',array(

    'gallery',
    'aside',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat'
	));

	add_theme_support("custom-logo", $alpha_logo_color);
	register_nav_menu('header-menu',__('Top menu','alphas'));
	register_nav_menu('footer-menu',__('footer menu','alphas'));

 
}
add_action('after_setup_theme','alphas_setup_theme');
function alpha_header_image_load(){
	if(is_front_page()){
		if(current_theme_supports("custom-header")){
			?>
			<style> 
              .header{
              	background-image: url(<?php echo header_image(); ?>);
              }
            .heading{
           	color:#<?php echo get_header_textcolor(); ?>;
           }
           <?php 

           if(!display_header_text() ){
           	echo "display:none";
           }
           ?>
		   </style>
		<?php }
	}
}
add_action("wp_head","alpha_header_image_load",11);


function alphas_enqueue_scripts(){
	wp_enqueue_style('alphas-style',get_stylesheet_uri());
  wp_enqueue_style('alphas-css','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
  wp_enqueue_style('feather-alphas','//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css');
  wp_enqueue_style('dashicons');
  wp_enqueue_script('feather-light','//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js', array('jquery'),'0.0.1',true);
  // wp_enqueue_script('main-js', get_theme_file_uri("/assetes/js/main.js"), array("jquery"),"0.0.1", true);
  
}
add_action('wp_enqueue_scripts','alphas_enqueue_scripts');

function alpha_the_excerpt($excerpt){

  if(! post_password_required()){
  	return $excerpt;
  }else{
  	echo get_the_password_form();
  }
}

add_filter('the_excerpt','alpha_the_excerpt');

function alpha_title_change(){
	return "%s";
}


add_filter("protected_title_format","alpha_title_change");

function alpha_menu_item($classes, $items){

	$classes[]="list-inline-item";

	return $classes; 

}
add_filter("nav_menu_css_class","alpha_menu_item",10,2);