<?php

function register(){
   
    $u = htmlspecialchars($_POST['user']);
    $p = htmlspecialchars($_POST['password']);
    $e = htmlspecialchars($_POST['email']);
    //var_dump($u);
    //addd more security and validatrion on FRONTEND/backend

   
    //prepare 
    if(!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['email'])){
        $g = '1';

         //prepare data from ajax to insert to DB
        $userdata = array(
            'user_login' => $u,
            'user_pass' => $p,
            'user_email' => $e
        );
    //insert data to DB Table
    $insert_user = wp_insert_user($userdata);
    echo $g;
    
    }else{
        $ng = '0';
        echo $ng;
    }
    die();
}
add_action( 'wp_ajax_register', 'register' );
add_action("wp_ajax_nopriv_register","register");


?>