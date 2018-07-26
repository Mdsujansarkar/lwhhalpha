<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero");?>
<h2><?php single_tag_title(); ?></h2>
<div class="posts">
    <?php while(have_posts()):
      the_post();
      ?>
   <h2> <a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h2> 
    
    
   

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
     <?php endwhile; ?>
</div>
<?php get_footer(); ?>