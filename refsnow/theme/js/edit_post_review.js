$(function() 
{
    $( "#date_of_meeting" ).datepicker({
        dateFormat: "mm-dd-yy"
    });
    
    $(".basic").jRating({
        bigStarsPath:baseUrl+"theme/js/jRating-master/jquery/icons/stars.png",
        phpPath : baseUrl+'theme/js/jRating-master/php/jRating.php',
        canRateAgain : true,
        nbRates : 100,
        decimalLength:0,
        onClick : function(element, rate,data){       
            $('#rateing_experince').val(rate);
        },
        onError : function(){
              jError('Error : please retry');
        }
    });
    
    setTimeout(function() {
        $("#meeting_country").trigger('change');
    },2);
    setTimeout(function() {
        $("#client_country").trigger('change');
    },2);
    
});

$('#meeting_country').change(function(){
    
    var id = $(this).val();
    var stateid= $('#meeting_state').data('stateid');
    var request = $.ajax({
        url: baseUrl+"reviews/get_state_ajax",
        type: "POST",
        data: { id : id,stateid:stateid },
        dataType: "html"
    });
    
    request.done(function( msg ) {
            $( "#meeting_state" ).html( msg );
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });

});

$('#client_country').change(function(){
    
    var id = $(this).val();
    var stateid= $('#client_state').data('stateid');
    var request = $.ajax({
        url: baseUrl+"reviews/get_state_ajax",
        type: "POST",
        data: { id : id,stateid:stateid },
        dataType: "html"
    });
    
    request.done(function( msg ) {
            $( "#client_state" ).html( msg );
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });

});

$('.which_review_website').click(function()
{
    if($("input[name=which_review_website][value=" + 5 + "]").prop('checked'))
     $('#which_review_website_other').show();
    else
       $('#which_review_website_other').hide();
    
});

