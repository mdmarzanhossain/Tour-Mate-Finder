
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
    $read = $conn->query("INSERT INTO `hotel_discount`( `name`, `location`, `s_date`, `e_date`, `cost`, `description`, `image`)
 VALUES ('".$_POST['title']."','".$_POST['location']."','".$sdate->getTimestamp()."','".$edate->getTimestamp()."','".$_POST['cost']."','".$_POST['desc']."','".$_POST['location']."')");
    if($read == 1){
        header("Location: hotels.php");
    }else{
        header("Location: create_hotel_discount.php");
    }
}
?>