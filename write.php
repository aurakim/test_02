<?php
   require_once('page/board_top.php');
   require_once('page/board_mid.php');
 ?>
<center>

  <form method="post" action="process.php">
  <table border="0" width="800px">
  <tbody>
  <tr>
  <th style="height:50px" width="80px" bgcolor="#D3D3D3"><label for="title">제 목</label></th>
    <td>
      <input id="title" type="text" name="title" placeholder=" 제목을 입력하세요."
      style="height:50px; width:100%">
    </td>
  </tr>
  <tr>
    <th style="height:400px" width="80px" bgcolor="#D3D3D3"><label for="description">내 용</label></th>
    <td><textarea id="description" type="" name="description" placeholder=""
          style="height:400px; width:100%"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" value="입   력" style="height:50px; width:100%">
    </td>
  </tr>
  </tbody>
</table>
</form>
<?require_once('page/cao.php');?>
</center>
</html>
