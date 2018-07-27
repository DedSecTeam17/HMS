<?php
    include('connect.php');
    include('session.php'); 
    echo $_POST['user_name'];

    $sql = mysqli_query($conn,"DELETE FROM `userbooks` WHERE
     `userbooks`.`user_name` = '".$_POST['user_name']."' AND `userbooks`.`doctor_name`= '".$_POST['doctor_name']."'")
        or die('Error In Session');
    if ($sql) {
        # code...
        header("location: account.php");
    }
?>