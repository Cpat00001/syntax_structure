<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <body>
  <?php
$userErr = $emailErr = "";
$user = $email = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['user'])){
        $userErr = "User is required";
    }else{
        $user = checkInput($_POST['user']);
        if(!preg_match("/^[a-zA-Z ]*$/",$user)){ $userErr = "Only letters and white spaces allowed";}
        //$user = checkInput($_POST['user']);
    }
    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        $email = checkInput($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ $emailErr = "Invalid email format";}
    }
}
function checkInput($dane){
    $dane = trim($dane);
    $dane = stripslashes($dane);
    $dane = htmlspecialchars($dane);
    return $dane;
}
?>

    <h3>Input form</h3>
    <!-- <form action="index.php" method="post"> -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      Name: <input type="text" name="user" value=<?php echo $user; ?> /> <span><?php if(empty($userErr)){ echo "Passed";}else{ echo $userErr; } ?></span></br>
      Email: <input type="text" name="email" value=<?php echo $email; ?> /><span><?php if(empty($emailErr)){ echo "Passed";}else{ echo $emailErr; } ?></span>
      <input type="submit" />
    </form>
  <?php
    //if(empty($user)){echo "User nieznany </br>";}else{ echo "Username: ".$user."</br>";}
    echo empty($user)? "No user given </br>":"you username is: ".$user."</br>";
    echo "</br>";
    echo empty($email)? "No email given</br>" : "your email: ".$email."</br>";
   
  ?>
  
  </body>
</html>
