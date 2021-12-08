<?php
include 'connection.php';
if(!isset($_SESSION['id'])){
    header('Loaction: login.php');
}

$target_dir = "images/";
$target_file = $target_dir.time().'_image.png';
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
    $sdate = new DateTime($_POST['sdate']);
    $edate = new DateTime($_POST['edate']);
    $read = $conn->query("INSERT INTO `event`(`e_title`, `e_description`, `e_min_member`, `e_max_member`, `cost`, `start_date`, `end_date`, `age`, `image`)
 VALUES ('".$_POST['title']."','".$_POST['desc']."','".$_POST['min_member']."','".$_POST['max_member']."','".$_POST['cost']."','".$sdate->getTimestamp()."','".$edate->getTimestamp()."','".$_POST['age']."','".$target_file."')");
    if($read == 1){
        header("Location: tours.php");
    }else{
        header("Location: create_tours.php");
    }
}
?>