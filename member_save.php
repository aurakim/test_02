<?php
require_once('conn.php');

if(!isset($_POST['user_id']) || !isset($_POST['password'])) exit;
if(!isset($_POST['nick_name']) || !isset($_POST['name'])) exit;
if(!isset($_POST['bankname']) || !isset($_POST['accountnumber'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['password'];
$sql = "SELECT * FROM `user` WHERE `user_id` = '$user_id' and `password` = '".$user_pw."'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if($result->num_rows > 0){
  echo "($user_id)님 이미 회원입니다. 뇌를 활성화 하세요!!";
  // echo "<meta http-equiv='refresh' content='4; url=login.php'>";;

} else{
  echo "2";
}

 ?>
