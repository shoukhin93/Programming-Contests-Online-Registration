$("document").ready(function(){
    $("#search").autocomplete({
        source: 'profileGetdata',
        minLength : 1,
        select: function(event,ui)
        {
            var code = ui.item.value;
            if(code != '')
            {
                var redirect = '/'+code;
                location.href = redirect;
            }
        },
        html: true,
        open: function(event,ui)
        {
            $(".ui-autocomplete").css("z-index",10000);
        },
        autofocus : true
    });
    $("#mem1ID").autocomplete({
        source: 'profileGetdata',
        minLength : 1,
        html: true,
        open: function(event,ui)
        {
            $(".ui-autocomplete").css("z-index",10000);
        },
        autofocus : true
    });

    $("#mem2ID").autocomplete({
        source: 'profileGetdata',
        minLength : 1,
        html: true,
        open: function(event,ui)
        {
            $(".ui-autocomplete").css("z-index",10000);
        },
        autofocus : true
    });

    $("#mem3ID").autocomplete({
        source: 'profileGetdata',
        minLength : 1,
        html: true,
        open: function(event,ui)
        {
            $(".ui-autocomplete").css("z-index",10000);
        },
        autofocus : true
    });
});