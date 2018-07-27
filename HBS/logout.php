<?php
session_start();
session_destroy();
setcookie("conn", "", time() - 3600,'/');
header('location:index.php');

?>