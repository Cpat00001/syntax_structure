jQuery(document).ready(function($){

    //if submitted form
    $("#register_event").submit(function(event){
        alert("handler for submit .submit() called.");
        event.preventDefault();
    });

}); //end of ready(function)