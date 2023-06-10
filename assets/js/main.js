(function ($) {
    // $(document).ready(function (){
    //     //do something
    //
    // })

    $(window).on('elementor/frontend/init',function (){
        elementorFrontend.hooks.addAction('frontend/element_ready/card_widget_name.default', function () {

        });
    });

})(jQuery);