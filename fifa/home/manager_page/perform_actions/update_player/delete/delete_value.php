<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Delete Player's Data</title>
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

$choices = $_POST["choice"];
$values = $_POST["value"];


if($choices=='AGE'){
$sql = "DELETE FROM `personal_details` WHERE `age`=$values";
	if ($conn->query($sql)) {
		echo "<h3> DELETED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR DELETING</h3>";
        }
}

else  if($choices=='NAME'){

$sql = "DELETE FROM `personal_details` WHERE `player_name`=\"$values\"";
	if ($conn->query($sql)) {
		echo "<h3> DELETED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR DELETING</h3>";
        }

}

else  if($choices=='PLAYER ID'){
	$sql = "DELETE FROM `personal_details` WHERE `player_id`=$values";
	if ($conn->query($sql)) {
		echo "<h3> DELETED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR DELETING</h3>";
        }
}

else  if($choices=='OVERALL RATING'){

$sql = "DELETE FROM `personal_details` WHERE `overall_rating`=$values";
	if ($conn->query($sql)) {
		echo "<h3> DELETED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR DELETING</h3>";
        }

}
else if($choices=='NATIONALITY'){

$sql = "DELETE FROM `personal_details` WHERE `nationality`=\"$values\"";
	if ($conn->query($sql)) {
		echo "<h3> DELETED SUCCESSFULLY !</h3>";
	}
	else {
		echo "<h3>ERROR DELETING</h3>";
        }

}
else {
	echo "<h3>WRONG CHOICE</h3>";
}
?>


</body>

</html>
