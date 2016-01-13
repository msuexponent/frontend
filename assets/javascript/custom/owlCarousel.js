$(document).ready(function() {

    $("#carousel").owlCarousel({

        navigation : false, // Hide next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        autoHeight : true

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

});
