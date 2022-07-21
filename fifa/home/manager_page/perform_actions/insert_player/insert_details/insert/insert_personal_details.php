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
die("Connection failed: " . $conn->connect_error);
}
 
$spid = $_POST["pid"];
$spname = $_POST["pname"];
$spage = $_POST["page"];
$sprating = $_POST["prating"];
$spnationality = $_POST["pnationality"];

$sql = "INSERT INTO $dbname.personal_details (player_id, player_name, age,overall_rating,nationality) VALUES ('$spid','$spname','$spage','$sprating','$spnationality')";
if ($conn->query($sql) === TRUE) {
	echo "<h3>NEW RECORD INSERTED SUCCESSFULLY</h3>";
} else {
	echo "<h3>EITHER DATA EXIST OR NOT VALID ENTRY</h3>";
}
$conn->close();
?>