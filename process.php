<?php
require_once('page/ses.php');
require_once('page/conn.php');
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$sql = "INSERT INTO
                `topic`
                (`topic_id`, `title`, `description`, `author`, `created`)
                VALUES (NULL, '{$title}', '{$description}', '{$_SESSION['user_no']}', now());";
mysqli_query($conn, $sql);

header('Location: main.php');
?>
