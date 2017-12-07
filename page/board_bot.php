
<article>
<?php
if(empty($_GET['id'])){
echo "Copyright @ cao ni mei";
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
require_once('page/cao.php');
}

?>
</article>
</body>

</center>
</html>
