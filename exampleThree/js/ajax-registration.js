jQuery(document).ready(function($){

    $('.spinner').hide();
    //if submitted form
    // $("#register_event").submit(function(event){
    //     alert("handler for submit .submit() called.");
    //     event.preventDefault();
    // });
    // prepare ajax call and data
    $("#register_event").submit(function(event){
        //stop form from submitting
        event.preventDefault();
        //show message for user
        $('.spinner').show();
        //get values from submitted form
        const nonce = $('name_of_nonce_field').val();
        const us = $('#username').val();
        const pass = $('#pass').val();
        const em = $('#email').val();
        // url where pass data 
        // const ajax_url = $(this).attr('action');
        const ajax_url = frontend_ajax_object.ajax_url;
        console.log(ajax_url);
        //data to send
        data = {
            action: 'register',
            nonce: nonce,
            user: us,
            password: pass,
            email: em
        }
        console.log(data); 
        // AJAX request
        const posting = $.post(ajax_url,data,function(response){
            if(response === true){
                $('#msg1').html('Data submited sucesfully');
                $('#msg1').css('background-color:green');
                $('#msg1').show();
            }else{
                $('#msg1').html('Huston we have problem...');
                $('#msg1').css('background-color:red');
                $('#msg1').show();
            }
        });
        //if response

    })

}); //end of ready(function)

// alert("TEST");
