$(function() 
{
    $( "#report_incident_date" ).datepicker({
        dateFormat: "mm-dd-yy"
    });
    
    setTimeout(function() {
        $("#report_incident_country").trigger('change');
    },2);
    setTimeout(function() {
        $("#report_residence_country").trigger('change');
    },2);
});

$('#report_residence_country').change(function(){
    
    var id = $(this).val();
    var stateid= $('#report_residence_state').data('stateid');
    var request = $.ajax({
        url: baseUrl+"reviews/get_state_ajax",
        type: "POST",
        data: { id : id,stateid:stateid },
        dataType: "html"
    });
    
    request.done(function( msg ) {
            $( "#report_residence_state" ).html( msg );
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });

});

$('#report_incident_country').change(function(){
    
    var id = $(this).val();
    var stateid= $('#report_incident_state').data('stateid');
    var request = $.ajax({
        url: baseUrl+"reviews/get_state_ajax",
        type: "POST",
        data: { id : id,stateid:stateid },
        dataType: "html"
    });
    
    request.done(function( msg ) {
            $( "#report_incident_state" ).html( msg );
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });
});
