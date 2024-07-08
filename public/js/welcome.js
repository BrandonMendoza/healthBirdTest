

/** Function to submit zipcode Form asynchronously */
$('#formZipcode').submit(function(e) {
    e.preventDefault();
    
    // Serialize the form data 
    const formData =  $('#formZipcode').serialize();
    // Send an AJAX request
    $.ajax({
        type: 'POST',
        url: globalRouteStoreZipcode,
        data: formData,
        dataType: 'json',
        success: function(successResponse) {
            //send the response to 
            console.log("SUCCESS");
            console.log(successResponse);
            submitMessage(true, 'Your zipcode have been submitted successfully! '+ JSON.stringify(successResponse));
        },
        error: function(errorResponse) {
            console.log("ERROR");
            console.log(errorResponse);
            submitMessage(false,errorResponse.responseJSON.message);
        }
    });
});


/* Allows only number on zipcode input */
$("#inputZipcode").on('input', function() {
    var zipcode = this.value;
    zipcode = zipcode.replace(/[^0-9]/g, '');
    this.value = zipcode;
});

/* Validate if the zipcode input is empty */
$("#btnGetStarted").on('click', function() {
    zipcode = $('#inputZipcode').val();
    if(zipcode == ''){
        submitMessage(false,'Please enter a zipcode.');
        return false;
    }else if(zipcode.length < 5 ){
        submitMessage(false,'Please enter a 5 digit zipcode.');
        return false;
    }
});

//Clean the text message when focus in the zipcode input
$('#inputZipcode').on('click focusin', function() {
    $('#responseMessage').text("");
});

/* Function to change the little validation message*/
function submitMessage(success,message) {
    //Recivde the response from the server and shows in the message form
    $('#responseMessage').text(message);
    //if true show the message in positive style
    if(success){
        $('#inputZipcode').val("");
        $('#responseMessage').removeClass('little-quote-error');
        $('#responseMessage').addClass('little-quote-success');
    }else{
        //if not show the text on negative stlye
        $('#responseMessage').addClass('little-quote-error');
        $('#responseMessage').removeClass('little-quote-success');
    }
}

