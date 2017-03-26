$("document").ready(function(){
     $("nav").addClass("navbar-fixed-top");
     $("div#ContentOfBody").removeClass("container-fluid");
     var test = $(window).scrollTop();
     $(document).scroll(function(){
        var v = $(window).scrollTop();
        if(v>90 && v>test){
            $(".add").text("ScrollTop "+v);
            $(".cover-text").css("display","block");
            
        }
        else if(v<=90)
        {
            $(".cover-text").css("display","table-cell");
        }
        else{

        }
        test = v;
     });
    
});