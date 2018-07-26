<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero");?>
<h2><?php single_cat_title(); ?></h2>
<div class="posts">
  <h1> 
     post in
     <?php if(is_month()){

     $month= get_query_var("monthnum");
     $dateObject = DateTime::createFromFormat("!m",$month);
     echo $dateObject-> format("F");
     }else if(is_year()){
      echo get_query_var("year");
     }else if(is_day()){
		printf("%s/%s/%s", get_query_var("monthnum"), get_query_var("year"), is_day("day"));
	 } ?>

  </h1>
    <?php while(have_posts()):
      the_post();
      ?>
   <h2> <a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h2> 
    
    
   <?php endwhile; ?>

    <div class="container post-pagination">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php 

                 the_posts_pagination(array(
                  'screen_reader_text' =>' ',

                 ));
                ?>
            </div>
        </div>
    </div>
     
</div>
<?php get_footer(); ?>