<?php
include 'connection.php';

$result = $conn->query("INSERT INTO `user`(`password`, `full_name`, `mobile`, `blood`, `email`, `emergency_contact`) VALUES 
('".$_POST['password']."','".$_POST['fname']." ".$_POST['lname']."','".$_POST['mobile']."','".$_POST['blood']."','".$_POST['email']."','".$_POST['emobile']."')");


if($result == 1){
    echo 'Successfully Sign up. ' ;
}else{
    echo 'Try Again.' ;
}
?>

<a href="login.php"> Login</a>
