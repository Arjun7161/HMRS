<?php
 if (isset($_POST['loginemail']) && isset($_POST['loginpassword'])) {

 function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return   $data;
 }

 
 $loginemail= validate($_POST['loginemail']);
 $loginpassword= validate($_POST['loginpassword']);

 if (empty($loginemail)){
    header("Location: login.php?error=Email Is Required");
    exit();

 

 }else if (empty($loginpassword)){
    header("Location: login.php?error=Password Is Required");
    exit();

 }else{
    echo "Valid Input";
 }
 }else{
    header("Location: login.php");
    exit();
 }

