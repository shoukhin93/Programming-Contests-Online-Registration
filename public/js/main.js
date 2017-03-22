$(document).ready(function(){
   $(".one").click(function() {
        // do this on hover
        $(".two").hide();
        $(this).animate({
            'borderBottomColor': '#2E9ECE',
            'color': '#2E9ECE'
        }, 'slow');
    });
});
