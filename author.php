<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero");?>
<div class="container">
     <div class="authorsection authorpage">
                    <div class="row">
                        <div class="col-md-3 imggol"> 
                        <?php echo get_avatar(get_the_author_meta("ID")); ?>
                        </div>
                        <div class="col-md-9">
                            <?php echo get_the_author_meta("display_name");  ?>
                            <p><?php echo get_the_author_meta("description");  ?></p>
                        </div>
                    </div>
                </div>
</div>
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