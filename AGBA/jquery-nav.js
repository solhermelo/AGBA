$(document).ready(function(){
    $('.js--mobile-nav-icon').on('click', function(){
        $('.main-nav').toggle("fast");
    });

    $('.js--mobile-nav-1').click(function(){
        $('.dropdown-1').toggle();

        $(document).on("click", function(event){
            var $trigger = $(".js--mobile-nav-1");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $(".dropdown-1").slideUp("fast");
            }            
        });
    });

    $('.js--mobile-nav-2').click(function(){
        $('.dropdown-2').toggle();

        $(document).on("click", function(event){
            var $trigger = $(".js--mobile-nav-2");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $(".dropdown-2").slideUp("fast");
            }            
        });
    });

    $('.js--mobile-nav-3').click(function(){
        $('.dropdown-3').toggle();
        
        $(document).on("click", function(event){
            var $trigger = $(".js--mobile-nav-3");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $(".dropdown-3").slideUp("fast");
            }            
        });
    });

    $('.js--mobile-nav-4').click(function(){
        $('.dropdown-4').toggle();

        $(document).on("click", function(event){
            var $trigger = $(".js--mobile-nav-4");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $(".dropdown-4").slideUp("fast");
            }            
        });
    });

   

});