<?php

include("connection.php");

$result = $conn->query("SELECT * FROM `user` WHERE `password` = '".$_POST['password']."' and `email`='".$_POST['email']."'");


if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    //echo 'Successfully  Login : '. $row['first__name'] . ' ' .  $row['last_name'];
    $_SESSION["id"] = $row['id'];
    $_SESSION["full_name"] = $row['full_name'];
    $_SESSION["blood"] = $row['blood'];
    $_SESSION["mobile"] = $row['mobile'];
    //echo 'successful';
    header("Location: index.php");
}else{
    header("Location: login.php?msg=Wrong User ID and Password.");
}



