
<div class="footer">
    <div class="container">
        <div class="row">
        	<div class="col-md-12"> 
        		<div class="navigation">
             <?php 
             wp_nav_menu(array(
             	'theme_location' =>'footer-menu',
             	'menu_id'        =>' ',
             	'menu_class'     => 'list-inline text-center'

             ));
             ?>
             </div>
        	</div>
            <div class="col-md-12">

                &copy; LWHH - All Rights Reserved
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>