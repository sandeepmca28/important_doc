$(document).ready(function(){
    
    setTimeout(function() {
        $("#client_residence_country").trigger('change');
    },2);
});

$('#client_residence_country').change(function(){
    
    var id = $(this).val();
    var stateid= $('#client_residence_state').data('stateid');
    var request = $.ajax({
        url: baseUrl+"client/get_state_ajax",
        type: "POST",
        data: { id : id,stateid:stateid },
        dataType: "html"
    });
    
    request.done(function( msg ) {
            $( "#client_residence_state" ).html( msg );
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });

});
