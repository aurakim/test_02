<?php
session_start();
if(!isset($_SESSION['is_login'])){

  print_r($nick_name);
    // header('Location: login.php');
}
$name=$_SESSION['name'];
$nick_name=$_SESSION['nick_name'];
 ?>
