<?php
$link = mysqli_connect("172.18.0.3", "opacite", "root", "Trucorp");

if(!link){
	echo "cannot connect to MySQL" . PHP_EOL;
	exit;
}

echo "connection success!";
$sql = "SELECT COUNT() FROM users";

$result = $link->query($sql);

echo $result;

mysqli_close($link);
?>
