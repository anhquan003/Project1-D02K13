<?php
$id = $_GET['id'];
mysqli_query($connect, "UPDATE user SET password = '123456' WHERE id = ".$id."");
header('location: index.php');

?>