<?php
  require_once('conn.php');
  $sql="SELECT * FROM user";
  $result = mysqli_query($conn,$sql);
  $members = mysqli_fetch_assoc($result);
  if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
  $sql = "SELECT * FROM `user` WHERE `user_id` = '$user_id' and password = '".$user_pw."'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $user_id = $_POST['user_id'];
  $user_pw = $_POST['user_pw'];
  echo $user_id;
  echo '<br />';
  echo $user_pw;
  echo '<br />';

//   if(!isset($members[$user_id])) {
//         echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
//         exit;
// }
// if($members[$user_id]['pw'] != $user_pw) {
//         echo "<script>alert('패스워드가 잘못되었습니다.');history.back();</script>";
//         exit;
// }

// session_start();
// $_SESSION['user_id'] = $user_id;
// $_SESSION['user_name'] = $members[$user_id]['name'];
?>
meta http-equiv='refresh' content='0;url=main.php'>
