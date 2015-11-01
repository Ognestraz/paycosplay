$(function() {

    $('.boxgrid.caption2').hover(function(){
       $(".cover", this).stop().animate({top:'80px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'140px'},{queue:false,duration:160});
    });

});
