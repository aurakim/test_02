<?php
 require_once('page/ses.php');
 ?>
<table border="0" width="800px" height="50px" bgcolor="#D3D3D3">

<tr>
<td width="40px" align="center">번호</td>
<td width="450px" align="center">제&nbsp;&nbsp;&nbsp;&nbsp;목</td>
<td width="120px" align="center">닉네임</td>
<td width="190px" align="center">게시일</td>

</tr>

<?php
require_once('page/conn.php');
$sql = "SELECT topic.*, user.nick_name
FROM topic INNER JOIN user ON  topic.author = user.user_no";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){?>

  <table border="0" width="800px" height="35px" >

<tr>
<td width="40px" align="center">
<?php echo htmlspecialchars($row['topic_id']);?>
</td>
<td width="450px" align="center">
  <?php echo '<a href="main.php?id='.$row['topic_id'].'"
  style="text-decoration:none;color:black">'.htmlspecialchars($row['title']).'</a>'; ?>

</td>
<td width="120px" align="center">
<?php echo $row['nick_name'];?>
</td>
<td width="190px" align="center">
  <?php echo htmlspecialchars($row['created']);?>
</td>
</tr>

</table>
<hr width="800" style="margin-top: 0px; margin-bottom: 0px;">
<?php
}
?>
