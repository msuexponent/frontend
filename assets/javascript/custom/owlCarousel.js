$(document).ready(function() {

    $("#carousel").owlCarousel({

        autoPlay: 4000,         //Set AutoPlay to 4 seconds
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        navigation : false,     // Hide next and prev buttons
        autoHeight : true

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

});
