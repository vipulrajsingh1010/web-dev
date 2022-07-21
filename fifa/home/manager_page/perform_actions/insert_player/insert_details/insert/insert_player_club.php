<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Insert Player's Data</title>
</head>

<body>   

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "fifa1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " .$conn->connect_error);
}
 
$spid = $_POST["pid"];
$spclub = $_POST["pclub"];
$spposition = $_POST["pposition"];


$sql = "INSERT INTO $dbname.player_club (player_id, player_club, player_position) VALUES ('$spid','$spclub','$spposition')";
if ($conn->query($sql) === TRUE) {
	echo "<h3>NEW RECORD INSERTED SUCCESSFULLY</h3>";
} else {
	echo "<h3>EITHER DATA EXIST OR NOT VALID ENTRY</h3>";
}
$conn->close();
?>