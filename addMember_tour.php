<?php
include 'connection.php';
if(!isset($_SESSION['id'])){
    header('Loaction: login.php');
}
$res = $conn->query("INSERT INTO `userpay`(`u_name`, `u_mobile`, `u_blood`, `e_id`, `id`) 
VALUES ('".$_POST['name']."','".$_POST['mobile']."','".$_POST['blood']."','".$_POST['event']."','".$_SESSION['id']."')");
if($res == 1)
    echo "ok";
else
    echo "no";
$conn->close();
?>