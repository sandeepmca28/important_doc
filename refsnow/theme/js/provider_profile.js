$(function() 
{    setTimeout(function() {
        $("#pu_user_country").trigger('change');
    },2);
});

$('#pu_user_country').change(function(){
    
    var id = $(this).val();
    var stateid= $('#pu_user_state').data('stateid');
    var request = $.ajax({
        url: baseUrl+"common/get_state_ajax",
        type: "POST",
       data: { id : id,stateid:stateid },
        dataType: "html"
    });
    
    request.done(function( msg ) {
            $( "#pu_user_state" ).html( msg );
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });

});