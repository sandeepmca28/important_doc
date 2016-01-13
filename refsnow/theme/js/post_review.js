jQuery.noConflict();
(function($) 
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
    
    
    
    
$('#meeting_country').change(function(){
    
    var id = $(this).val();
    var request = $.ajax({
        url: baseUrl+"reviews/get_state_ajax",
        type: "POST",
        data: { id : id },
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
    var request = $.ajax({
        url: baseUrl+"reviews/get_state_ajax",
        type: "POST",
        data: { id : id },
        dataType: "html"
    });
    
    request.done(function( data ) {
        
            $( "#client_state" ).html( data );
            
            if($('#state_post_value').val())
            {
                $("#client_state > option").each(function() {
                    if(this.value == $('#state_post_value').val())
                    {
                        $("#client_state").val(this.value);
                    }
                });
            }
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });

});


/*   trigger event      */

$('#client_country').trigger('change');

$('.which_review_website').click(function()
{
    if($("input[name=which_review_website][value=" + 5 + "]").prop('checked'))
     $('#which_review_website_other').show();
    else
       $('#which_review_website_other').hide();
    
});

    
})(jQuery);
