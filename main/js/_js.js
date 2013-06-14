$(document).on("ready", init);

function init () {
    $.getJSON("main/js/tabzilla.json",function(data){

        $.each(data.mz_ele, function( key, val ) {

            $('a[href|="'+val.mz_get+'"]')
                .attr("href", val.mz_href )
                    .text( val.mz_text );

            $("#tabzilla-nav h2:contains('"+ val.mz_get+"')")
                .text( val.mz_text );

            $('input[placeholder|="'+val.mz_get+'"]')
                    .attr("placeholder", val.mz_text );
        });

    });


}