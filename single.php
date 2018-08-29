<?php 
$layout_class = "col-md-8";
$text_center =" ";
if(!is_active_sidebar("sidebar-1")){
    $layout_class = "col-md-10 offset-md-1";
    $text_center ="text-center";
}

?>

<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero");?>
<div class="contanier">
    <div class="row">
        <div class="<?php echo $layout_class; ?>">
            <div class="posts">
    <?php while(have_posts()):
      the_post();
     ?>
    <div class="post" <?php post_class(); ?>>
        <div class="container">
         <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title <?php echo $text_center; ?>" ><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <strong><?php the_author_posts_link(); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                    <div class="alpha_a"> 
                      <?php 
                      if ( class_exists( 'Attachments' ) ){
                       $attechments = new Attachments('alpha_a');
                       if($attechments ->exist()){
                        while($attechment = $attechments -> get()){ ?>
                        <div>
                          <?php echo $attechments ->image("large");?>
                        </div>
                      <?php  
                       }
                    }
                       }

                      ?>
                    </div>
                    <?php echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');?>
                </div>
                <div class="col-md-12">
                    <p>
                       <?php
                       if ( !class_exists( 'Attachments' ) ){
                        if ( has_post_thumbnail() ) {
                             $thumbnail_url = get_the_post_thumbnail_url(null,"large");
//echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                 printf( '<a href="%s" data-featherlight="image">', $thumbnail_url);
                                the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
                                                echo '</a>';
                                            }
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
                <div class="contanier">
                  <div class="row">
                    
                         
                      <?php 
                      if ( class_exists( 'Attachments' ) ){
                       $attechments = new Attachments('team');
                       if($attechments ->exist()){
                        while($attechment = $attechments -> get()){ ?>
                          <div class="col-md-4"> 
                        <div>
                          <?php echo $attechments ->image("thumbnail");?>
                          <p><?php echo $attechments ->field("tname");?></p>
                          <p><?php echo $attechments ->field("tposition");?></p>
                          <p><?php echo $attechments ->field("tcompany");?></p>
                          <p><?php echo $attechments ->field("ttestimonial");?></p>
                        </div>
                      </div>
                      <?php  
                       }
                    }
                       }

                      ?>
                    
                    
                  </div>
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
        <?php if(is_active_sidebar("sidebar-1")): ?>
        <div class="col-md-4">
            <?php if(is_active_sidebar("sidebar-1")){
              dynamic_sidebar("sidebar-1");
          }
             ?>

        </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>