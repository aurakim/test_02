<?php

  include("conn.php");  //DB연결을 위한 config.php를 로드
    session_start();   //세션 시작
    if($_POST["user_id"] != ""){  // uid값이 있으면
    $myusername=$_POST["user_id"];
    $mypassword=$_POST["user_pw"];
    $sql="SELECT * FROM user WHERE user_id = '".$myusername."' AND user_password = '".$mypassword."'"; //아뒤랑 비번값 대조
    $result=mysql_query($conn,$sql);
    $count=mysql_num_rows($result);
     if($count==1)
    {
        session_register("user_id");
        $_SESSION['user_id']=$myusername;
        header("location: welcome.php");  // welcome.php 페이지로 넘김
    }
    else
    {
        $error="Your Login Name or Password is invalid";
    }
}
?>
