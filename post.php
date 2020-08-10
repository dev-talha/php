<?php
require_once('connect.php');

$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$phone=test_input($_POST["phone"]);
$msg=test_input($_POST["msg"]);


$err=0;


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $err++;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $err++;
    
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
    $err++;
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Only Number allowed";
      $err++;
    
    }
  }
 
  if (empty($_POST["msg"])) {
    $msg = "";
  } else {
    $msg = test_input($_POST["msg"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



if ($err != 0) {
  header("location: index.php?nameErr=$nameErr && emailErr=$emailErr && phoneErr=$phoneErr");
}

$insertq="INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES (NULL, '$name', '$email', '$phone', '$msg')";
$insert=mysqli_query($conn,$insertq);
if($insert){
  header("location: index.php?success=Your message send successful!");
}
else{
  echo"not successfull";
}

?>

