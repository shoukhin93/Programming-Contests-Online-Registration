$("document").ready(function(){

      $("#input").keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url : "profileGetdata",
                    method : "GET",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#roll').fadeIn();
                        $("#roll").html(data);
                    }
                });
            }
      });
});