<?php
$link = mysqli_connect("172.18.0.3", "opacite", "root", "Trucorp");

if(!link){
	echo "cannot connect to MySQL" . PHP_EOL;
	exit;
}

echo "connection success!";

$sql = "SELECT * FROM users";

$result = mysql_query($sql, $link);
$number = mysql_num_rows($result);
echo $number;

mysqli_close($link);
?>
