<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero");?>
<div class="contanier">
    <div class="row">
        <div class="col-md-8">
            <div class="posts">
    <?php while(have_posts()):
      the_post();
     ?>
    <div class="post" <?php post_class(); ?>>
        <div class="container">
         <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title text-center" ><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <strong><?php the_author(); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                    <?php echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');?>
                </div>
                <div class="col-md-12">
                    <p>
                       <?php
                        if ( has_post_thumbnail() ) {
                             $thumbnail_url = get_the_post_thumbnail_url(null,"large");
//echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                 printf( '<a href="%s" data-featherlight="image">', $thumbnail_url);
                                the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
                                                echo '</a>';
                                            } ?>
                    </p>
                    <p>
                        <?php 
                     the_content();

                     wp_link_pages();

                     // next_post_link();

                     // echo "<br />";

                     // previous_post_link();
                        
                         ?>
                    </p>
                </div>
                <div class="authorsection">
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
                <?php if(comments_open()): ?>
                <div class="col-md-12">
                    <?php comments_template(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

  
</div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php get_footer(); ?>