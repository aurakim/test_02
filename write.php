<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: login.php');
}

 ?>
  <head>
    <meta charset="utf-8">
  </head>
  <center>
  <body>
  <table border="0" width="800px">
    <tr align="center">
      <td colspan="3"><a href="main.php"
      style="text-decoration:none;color:black"><h1>게시판</h1></a></td>
    </tr>
    <tr align="right" height="40px">
      <td>
            <?php echo $_SESSION['user_id'];?> 님 안녕하세요.
      </td>
      <td width="70px" align="right">
        <input type="button" value="글쓰기" onClick="location.href='write.php'" align="right" style="height:40px; width:70px">
      </td>
      <form action="logout.php" method="post">
      <td width="70px" align="right"><input type="submit" value="로그아웃"
        style="height:40px; width:70px"></td>
      </tr>
  </table>

      <table border="0" width="800px" height="50px" bgcolor="#D3D3D3">
   <tr>
     <td width="40px" align="center">번호</td>
    <td width="450px" align="center">제&nbsp;&nbsp;&nbsp;&nbsp;목</td>
    <td width="120px" align="center">닉네임</td>
    <td width="190px" align="center">게시일</td>
  </tr>
  <hr width="800" style="margin-top: 0px; margin-bottom: 0px;">
   <?php
   require_once('conn.php');
   $sql = "SELECT topic.*, user.name
   FROM topic INNER JOIN user ON  topic.author = user.user_no";
   $result = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($result)){?>
        <table border="0" width="800px" height="35px" >
        <hr width="800" style="margin-top: 0px; margin-bottom: 0px;">
    <tr>
      <td width="40px" align="center">
      <?php echo htmlspecialchars($row['topic_id']);?>
     </td>
     <td width="450px" align="center">
        <?php echo '<a href="main.php?id='.$row['topic_id'].'"
        style="text-decoration:none;color:black">'.htmlspecialchars($row['title']).'</a>'; ?>

     </td>
     <td width="120px" align="center">
      <?php echo $row['name'];?>
     </td>
     <td width="190px" align="center">
        <?php echo htmlspecialchars($row['created']);?>
     </td>
    </tr>
  </table>
<?php
}
 ?>
  <hr width="800" style="margin-top: 0px; margin-bottom: 0px;">
  <article>
  <?php
  if(empty($_GET['id'])){

  } else {
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT topic_id, title, description, nick_name, created
  FROM topic LEFT JOIN user ON topic.author = user.user_no WHERE topic_id=".$id;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

   ?>
  <table border="0" width="800px">
    <tr align="center">
      <td><h2><?=htmlspecialchars($row['title'])?></h2></td>
    </tr>
    <tr align="right">
      <td><div><?=htmlspecialchars($row['nick_name'])?> | <?=htmlspecialchars($row['created'])?></div></td>
    </tr>
    <tr align="left">
      <td><div><?=htmlspecialchars($row['description'])?></div></td>
    </tr>

  </table>
  <?php
  }
  ?>
  </article>
  </body>
  </center>


<center>
<table border="1" width="800px">
  <form action="process.php" method="post">
  <tr>
    <td align="center" bgcolor="#D3D3D3" width=100px>제 목</td>
    <td><input type="text" name="title" style="height:50px; width:100%"
      placeholder="제목을 적어주세요."></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#D3D3D3" width="100px">내 용</td>
    <td><textarea name="description" rows="40" cols="95"
      placeholder="&#13;&#10;

















본문을 적어주세요."></textarea></td>
  </tr>
  </table>
    <input type="Submit" value="입 력" style="height:50px; width:800px">
    
</html>
