<?php
    include('connect.php');
    include('session.php'); 
    $getuser = mysqli_query($conn, "SELECT user_name FROM users WHERE user_id = '".$session_id."' ") or die('Error In Session');
    $getname =  mysqli_fetch_array($getuser);
    $sql = mysqli_query($conn,"INSERT INTO userbooks (user_name, hos_name, section_name, doctor_name, book_day_date)
        VALUES ('".$getname['user_name']."','".$_POST['hos_name']."','".$_POST['section_name']."','".$_POST['doc_name']."','".$_POST['doc_date']."') ")
        or die('Error In Session');
    if ($sql) {
        # code...
        header("location: account.php");
    }
?>