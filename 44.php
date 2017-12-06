
<?
require_once('conn.php');
$sql = "SELECT * FROM topic INNER JOIN user ON  topic.author = user.user_no";
$result = mysqli_query($conn,$sql);
$array = array();
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
}
?>

<tbody>
  <?
  foreach ($array as $key => $value) {?>
    <tr>

    <td><?=$value['topic_id']?></td>
    <td><?=$value['title']?></td>
    <td><?=$value['name']?></td>
    <td><?=$value['created']?></td>
    <td><?=$value['created']?></td>
    <?php
    $sql="SELECT * FROM topic";
    $result = mysqli_query($conn,$sql);

    echo '<a href="main.php?id='.$row['topic_id'].'"
         style="text-decoration:none;color:black">'.htmlspecialchars($row['title']).'</a>'; ?>
  </tr>
  <?} ?>
 ?>
</tbody>
