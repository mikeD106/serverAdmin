<?php
$link = mysqli_connect("172.18.0.3", "opacite", "root", "Trucorp");

echo "connection success!\n";
$sql = "SELECT * FROM users";

$result = $link->query($sql);

$number = mysqli_num_rows($result);

echo $number;

mysqli_close($link);

?>
