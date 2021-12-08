<?php
include ("connection.php");

if(!isset($_SESSION['id'])){

    header('Location: login.php');
}else {
    $res = $conn->query("SELECT * FROM `rate` WHERE `e_id` = '".$_POST['event']."' and `id` = '".$_SESSION['id']."')");

    if ($res->num_rows > 0) {
        $result = $conn->query("UPDATE `rate` SET `r_value`='" . $_POST['value'] . "' WHERE `e_id` = '".$_POST['event']."' and `id` = '".$_SESSION['id']."'");
    }else {
        $result = $conn->query("INSERT INTO `rate`(`e_id`, `r_value`, `id`) VALUES ('" . $_POST['event'] . "','" . $_POST['value']."','".$_SESSION['id']."')");
    }
}
$conn->close();
?>