      <?php
      session_start();
      require_once('conn.php');
      if(!isset($_POST['user_id']) || !isset($_POST['password'])) exit;
      $user_id = $_POST['user_id'];
      $user_pw = $_POST['password'];

      $sql = "SELECT * FROM `user` WHERE `user_id` = '$user_id' and password = '".$user_pw."'";

      $result = mysqli_query($conn, $sql);

      $row = mysqli_fetch_assoc($result);
      // var_dump($row);
      if ($row) {
      $_SESSION['user_id']=$user_id;
      $_SESSION['password']=$user_pw;
        header("location: main.php");
      exit;
      }else{
      session_destroy();
      echo '<br />';
      echo '아이디 또는 패스워드가 잘못되었습니다';
      echo '<br />';
      echo "<meta http-equiv='refresh' content='5; url=login.php'>";;
      ?><br /><input type="button" value="로그인" style="height:50px; width:100px" onClick="location.href='login.php'">
      <input type="button" value="회원가입" style="height:50px; width:100px" onClick="location.href='member_join.php'"><?
      }
      ?>
