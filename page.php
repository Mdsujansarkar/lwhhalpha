<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero-page");?>

            <div class="posts">
    <?php while(have_posts()):
      the_post();
     ?>
     
    <div class="post" <?php post_class(); ?>>
        <div class="container">
         <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2 class="post-title text-center" ><?php the_title(); ?></h2>

                </div>
            </div>

            <div class="row">
            
              <div class="row">
                <div class="col-md-10 offset-md-1">
                   <div class=" testimonials alpha_a text-center"> 
                    <?php 
                      if ( class_exists( 'Attachments' ) ){
                       $attechments = new Attachments('testimonials');
                       if($attechments ->exist()){
                         while($attechment = $attechments -> get()){ ?>

                          <?php echo  $attechments ->image("thumbnail");?>
                          <h4><?php echo esc_html( $attechments ->field("name"));?></h4>
                          <p><?php echo esc_html( $attechments ->field("position"));?></p>
                          <p><?php echo esc_html( $attechments ->field("company"));?></p>
                          <p><?php echo esc_html( $attechments ->field("testimonial"));?></p>
                        <?php  } 
                       }

                      } ?>
                     <h1>hellow</h1>
                  </div>
                </div>
                    <p class="text-center">
                        <strong><?php the_author(); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                    <?php echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');?>
                </div>
                <div class="col-md-10 offset-md-1">
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

             ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

  
</div>

<?php get_footer(); ?>