<?php
$link = mysqli_connect("172.18.0.3", "opacite", "root", "Trucorp");

if(!link){
	echo "cannot connect to MySQL" . PHP_EOL;
	exit;
}

echo "connection success!";
$sql = "SELECT * FROM users";

$result = $link->query($sql);

if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
	echo "ID : " . $row["ID"] . " | Nama :" . $row["Nama"] . " | Kantor:" . $row["Kantor"] . "|";
        }
}
else{
	echo "0 results";
}

mysqli_num_rows($result);

mysqli_close($link);

?>
