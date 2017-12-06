<?php
session_start();
if(!isset($_SESSION['is_login'])){
    // header('Location: login.php');
}

echo ('sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss');
echo $_SESSION['user_id'];



 ?>
