<?php
include('connect.php');
include('session.php'); 
    

    $result=mysqli_query($conn, "SELECT * FROM users WHERE user_id='$session_id'") or die('Error In Session');
    $row = mysqli_fetch_array($result);
    $doc_result = mysqli_query($conn, "DELETE FROM `userbooks` WHERE user_name ='".$row['user_name']."' ") or die('Error In Session');
    if($doc_result){
        header('location:account.php');
    }
?>