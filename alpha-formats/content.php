<div class="post" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                    <?php echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');?>
                    <span class="dashicons dashicons-format-audio"></span>
               <?php 

                   // $alph_post = get_post_format();
                   //  if( $alph_post == "audio"){
                   //    echo '<span class="dashicons dashicons-format-audio"></span>';
                   //  } else if($alph_post == "video"){
                   //  echo '<span class="dashicons dashicons-format-video"></span>';
                   //  }else if($alph_post == "image"){
                   //  echo '<span class="dashicons dashicons-images-alt"></span>';
                   //  } else if($alph_post == "quote"){
                   //  echo '<span class="dashicons dashicons-editor-quote"></span>';
                   //  }

                    ?> 
                </div>
                <div class="col-md-8">
                    <p>
                        <?php if(has_post_thumbnail()){
                              the_post_thumbnail('large', array('class'=>'img-fluid'));
                    } ?>
                    </p>
                    <p>
                        <?php 
                        
                      //   if(!post_password_required()){
                      //    the_excerpt();
                      //     }else{
                      //     echo get_the_password_form();
                      // }
                          
                       the_excerpt();
                        
                         ?>
                    </p>
                </div>
            </div>
        </div>
    </div>