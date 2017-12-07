<?php
 require_once('page/ses.php');
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
    <tr height="40px">
      <td align="right">
            <?php echo "$name";
            echo "($nick_name)";?>님 안녕하세요.
      </td>
      <td width="70px" bgcolor="#D3D3D3" align="center">
        <a href="write.php" style="text-decoration:none;color:black">글쓰기</a>
            </td>
        <td width="70px" bgcolor="#D3D3D3" align="center">
          <a href="logout.php" style="text-decoration:none;color:black">로그아웃</a></td>
      </tr>
  </table>
</center>
