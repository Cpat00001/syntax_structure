<?php
function login_user(){

// Login Page
$log_form .= "<form id='login_event'>";
$log_form .= "<div class='login_form'>";
$log_form .= "<h3>Login form: </h3>";
$log_form .= "<label for='username'>Username</label><br>";
$log_form .= "<input type='text' name='login_username' id='login_username'><br><br>";
$log_form .= "<label for='username'>Password</label><br>";
$log_form .= "<input type='text' name='login_username' id='login_username'><br><br>";
$log_form .= "<input type='submit' value='Login'>";
$log_form .= "</div>";
$log_form .= "</form>";
return $log_form;
}
add_shortcode('login_form','login_user');

?>