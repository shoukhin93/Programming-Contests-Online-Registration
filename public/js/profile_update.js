// Here Goes Javascript & jqury for profileUpdate.blade.php

$(document).ready(function(){
	$(document).on('click', '.browse', function(){
	      var file = $(this).parent().parent().parent().find('.file');
	      file.trigger('click');
	    });
});
