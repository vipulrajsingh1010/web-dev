<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Modify Player's Data</title>
</head>

<body>   

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "fifa1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$pid = $_POST["id"];
$choices = $_POST["choice"];
$values = $_POST["value"];


if($choices=='age'||$choices=='overall_rating'){
$sql = "UPDATE `personal_details` SET $choices=$values WHERE player_id=$pid";
	if ($conn->query($sql)) {
		echo "<h3>MODIFIED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR IN UPDATING</h3>";
        }
}

else  if($choices=='acceleration'||$choices=='balance'||$choices=='ball_control'||$choices=='crossing'||$choices=='curve'||$choices=='dribbling'||$choices=='finishing'||$choices=='gk_kicking'||$choices=='gk_positioning'||$choices=='penalties'||$choices=='short_pass'||$choices=='stamina'||$choices=='strength'){

$sql = "UPDATE `player_stats` SET $choices=$values WHERE player_id=$pid";
	if ($conn->query($sql)) {
		echo "<h3>MODIFIED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR IN UPDATING</h3>";
        }
}

else  if($choices=='player_wage'||$choices=='player_value'){
	$sql = "UPDATE `player_salary` SET $choices=$values WHERE player_id=$pid";
	if ($conn->query($sql)) {
		echo "<h3>MODIFIED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR IN UPDATING</h3>";
        }
}

else  if($choices=='player_club'){

$sql = "UPDATE `player_club` SET $choices='$values' WHERE player_id=$pid";
	if ($conn->query($sql)) {
		echo "<h3>MODIFIED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR IN UPDATING</h3>";
        }
}
else {
	echo "<h3>WRONG CHOICE</h3>";
}
?>


</body>

</html>
