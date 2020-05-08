$(document).ready(function() {
    // * Sticky navigation */
    $('.js-section-servicios').waypoint(function(direction) {
        if (direction === "down") {
             $('nav').addClass('sticky');
        } else {
             $('nav').removeClass('sticky');
         }
     }, {
         offset: '60px'
         });

        // Animation Scroll
     $('.js-wp-1').waypoint(function(direction) {
         $('.js-wp-1').addClass('animated fadeIn');
     }, {
             offset: '50%'
         });

     })

    