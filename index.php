<?php
$user = $email = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['user'])){
        $userErr = "User is required";
    }else{
        $user = checkInput($_POST['user']);
    }
    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        $email = checkInput($_POST['email']);
    }
}
function checkInput($dane){
    $dane = trim($dane);
    $dane = stripslashes($dane);
    $dane = htmlspecialchars($dane);
    return $dane;
}

echo "podaj user: ".$user;
echo "</br>";
echo "podaj email: ".$email;
echo "</br>";
if(empty($userErr)){ echo "Passed";}else{ echo $userErr; }
echo "</br>";
if(empty($emailErr)){ echo "Passed";}else{ echo $emailErr; }
?>