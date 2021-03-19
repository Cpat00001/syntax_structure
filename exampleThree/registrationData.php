<?php

add_action("wp_ajax_nopriv_register","remove_product_from_list");

function register(){
    echo "<h1>Hello RegistrationData Processing Here</h1>";
    $n = htmlspecialchars($_POST['user']);
    echo $n;
}


?>