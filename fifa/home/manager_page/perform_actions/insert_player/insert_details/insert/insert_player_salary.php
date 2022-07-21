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
$spwage = $_POST["pwage"];
$spvalue = $_POST["pvalue"];


$sql = "INSERT INTO $dbname.player_salary(player_id, player_wage, player_value) VALUES ('$spid','$spwage','$spvalue')";
if ($conn->query($sql) === TRUE) {
	echo "<h3>NEW RECORD INSERTED SUCCESSFULLY</h3>";
} else {
	echo "<h3>EITHER DATA EXIST OR NOT VALID ENTRY</h3>";
}
$conn->close();
?>