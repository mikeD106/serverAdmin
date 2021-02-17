<?php
$link = mysqli_connect("172.18.0.3", "opacite", "root", "Trucorp");

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

$number = mysqli_num_rows($result);

echo $number;

mysqli_close($link);

?>
