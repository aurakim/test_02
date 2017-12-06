<?php
session_start();
require_once('conn.php');
// print_r($_SESSION);

$sql = "SELECT * FROM topic INNER JOIN user ON  topic.author = user.user_no";
$result = mysqli_query($conn,$sql);
$array = array();
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;

}

?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        margin: 0 auto;
      }
      .content{width: 1100px;margin: 0 auto;}
      table{
        width:100%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="content">
      <table border="0" width="800px">
        <tr align="center">
          <td colspan="2"><a href="main.php"
          style="text-decoration:none;color:black"><h1>게시판</h1></a></td>
        </tr>
        <tr align="right" height="40px">
          <td>로그인정보</td>
          <form name="" action="logout.php" method="post">
          <td width="120px" align="right"><input type="submit" value="로그아웃"
            style="height:40px; width:70%"></td>
          </tr>
      </table>
      <table>
        <thead>
          <tr>
            <th>번호</th>
            <th>제목</th>
            <th>닉네임</th>
            <th>게시일</th>
          </tr>
        </thead>
        <tbody>
          <?
          foreach ($array as $key => $value) {?>
            <tr>
            <td><?=$value['topic_id']?></td>
            <td><?=$value['title']?></td>
            <td><?=$value['name']?></td>
            <td><?=$value['created']?></td>
          </tr>
          <?} ?>
          <?
          foreach ($array as $key => $value) {?>
            <tr>
            <td><?=$value['topic_id']?></td>
            <td><?=$value['title']?></td>
            <td><?=$value['name']?></td>
            <td><?=$value['created']?></td>
          </tr>
          <?} ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
