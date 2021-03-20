jQuery(document).ready(function($){

    $('.spinner').hide();
    //if submitted form
    // $("#register_event").submit(function(event){
    //     alert("handler for submit .submit() called.");
    //     event.preventDefault();
    // });
    // prepare ajax call and data
    $("#register_event").click(function(event){
        //stop form from submitting
        if (event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
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
            // nonce: nonce,
            user: us,
            password: pass,
            email: em
        }
        console.log(data); 
        // AJAX request
        $.post(ajax_url,data,function(response){
            //hide spinner message
            $('.spinner').hide();
            console.log('Response: ' + response);
            if(response === '1'){
                $('.msg1').html('Thanks.You are registerd now.Login');
                $('.msg1').css("background-color","green");
                $('.msg1').css("color","white");
                $('.msg1').css("margin","10px");
                $('.msg1').show();
                $('.msg1').delay(3000).fadeOut();
            }else{
                $('.msg1').html('Make sure every fild has a value...');
                $('.msg1').css("background-color","red");
                $('.msg1').css("color","white");
                $('.msg1').css("margin","10px");
                $('.msg1').show();
                $('.msg1').delay(3000).fadeOut();
            }
        });
        //if response

    })

}); //end of ready(function)
// alert("TEST");
