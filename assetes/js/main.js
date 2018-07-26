; (function($){
    $(document).ready(function(){
        var slider = tns({
            container: '.alpha_a',
            speed:300,
            autoplayTimeout:3000,
            items: 1,
            autoplay: true,
            autoHeight:true,
            controls:false,
            nav:false,
            autoplayButtonOutput:false
        });
    });
})(jQuery);