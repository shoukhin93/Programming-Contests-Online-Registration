$("document").ready(function(){
     $("nav").addClass("navbar-fixed-top");
     $("div#ContentOfBody").removeClass("container-fluid");
     var test = $(window).scrollTop();
     $(document).scroll(function(){
        var v = $(window).scrollTop();
        if(v>90 && v>test && v <= 180){
            $(".add").text("ScrollTop "+v);
            $(".cover-text").css("display","block");
            $(".cover-text").animate({"margin-top": ($(window).scrollTop())+100 + "px"},"fast");
        }
        else if(v<=90)
        {
            $(".cover-text").css("display","table-cell");
        }
        else if(v < test && v <=180){
            $(".cover-text").animate({"margin-top": ($(window).scrollTop())+100 + "px"},"fast");
        }
        test = v;
     });
    
});