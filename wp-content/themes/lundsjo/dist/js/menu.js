$(document).ready(function() {


        $(".menu-item-has-children a").click(function(e) {
            var parent = $(event.target).closest("li");
            //$('.sub-menu',this.parent()).slideToggle();
            var submenu = $(parent).children(".sub-menu");
            //console.log(parent);
            $(submenu).first().slideToggle();
        });

});