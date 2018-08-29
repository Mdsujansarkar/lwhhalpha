<?php 
/**
* Template Name: Custom Query
*/

?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero");?>
<h2><?php single_tag_title(); ?></h2>
<?php 
$_p = get_posts(array(
 'post__in' => array(18,9,14),
 'orderby'  =>'post__in'
));
?>
<div class="posts">
  <?php
    foreach($_p as $post){  //post pass korte hobe
    setup_postdata($post); ?>
    <h2> <a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h2> 
 <?php }

wp_reset_postdata();
  ?>
   
    
     
</div>
<?php get_footer(); ?>