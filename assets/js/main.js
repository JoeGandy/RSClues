$(function() { 
    jQuery.ui.autocomplete.prototype._resizeMenu = function () {
        var ul = this.menu.element;
        ul.outerWidth(this.element.outerWidth());
    }

    $( "#autocomplete" ).autocomplete({
        source: function( request, response ) {
            $.ajax({
              url: "/welcome/get_clues",
              dataType: "json",
              data: {
                q: request.term
              },
              success: function( data ) {
                console.log(data);
                response( data );
              }
            });
        },
        minLength: 1,
        //select
        select: function(e, ui) {
            window.location.href = "/clue?id="+ui.item.id;
        }
    });
  });


$(document).ready(function(){
    $("img").each(function( index ) {
        $(this).attr('src', $(this).data('src'));
        $(this).parent().attr("href", "");
    });
});

