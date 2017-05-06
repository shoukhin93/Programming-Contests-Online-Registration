// Here Goes Javascript & jqury for profileUpdate.blade.php

$(document).ready(function(){
	$(document).on('click', '.browse', function() {
        var file = $(this).parent().parent().parent().find('.file');
        file.trigger('click');
    });
    $(document).on('change', '.file', function() {
        $("#displayFileName").val($(this).val().replace(/C:\\fakepath\\/i, ''));
        if($("#displayFileName").val()!=null){
        	$("#SavePropic").css({"visibility":"visible"});
        }
    });

    $('#fail').delay(3000).fadeOut('slow');
    
});
