<?php 
$alpha_feat_image = get_the_post_thumbnail_url(null,"large");
?>
<div class="header page-header" style="background-image: url(<?php echo $alpha_feat_image; ?>); ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo('description'); ?></h3>
                <h1 class="align-self-center display-1 text-center heading"><?php bloginfo('name'); ?></h1>
            </div>
            <div class="col-md-12">
            	<div class="navigation"> 
                    <?php 
                     wp_nav_menu(array(
                     'theme_location' => 'header-menu',
                     'menu_id'        => '',
                     'menu_class'     => 'list-inline text-center'
                     ));
                    ?>
                  
            	</div>
            </div>
        </div>
    </div>
      <div class="contanier">
       <div class="row">
         <div class="col-md-12 text-center"> 
        
          <?php if(is_search()){ ?>
            <h3>your search query:<?php the_search_query(); ?></h3>
          <?php } ?>
        <?php echo get_search_form(); ?>
         </div>
       </div>
     </div>
</div>