<?php
$link = mysqli_connect("172.18.0.3", "opacite", "root", "Trucorp");

if(!link){
	echo "cannot connect to MySQL" . PHP_EOL;
	exit;
}

echo "connection success!";
$sql = "SELECT COUNT(ID) FROM users";

$result = $link->query($sql);

if ($result->num_rows > 0){
  echo $result;
}
else{
	echo "0 results";
}
mysqli_close($link);
?>
