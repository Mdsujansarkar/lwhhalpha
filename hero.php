<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<?php if(current_theme_supports("custom-logo")): ?>
            	<div class="custom-logo">
            		<?php the_custom_logo(); ?>
            	</div>
            <?php endif; ?>
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
</div>