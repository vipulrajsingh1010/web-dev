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
$sposition=$_POST["ppos"];
$spacceleration = $_POST["pacceleration"];
$spbalance = $_POST["pbalance"];
$spballcontrol = $_POST["pballcontrol"];
$spcrossing = $_POST["pcrossing"];
$spcurve = $_POST["pcurve"];
$spdribbling = $_POST["pdribbling"];
$spfinishing = $_POST["pfinishing"];
$spgkk = $_POST["pgkk"];
$spgkp = $_POST["pgkp"];
$sppenalties = $_POST["ppenalties"];
$spshortpass = $_POST["pshortpass"];
$spstamina = $_POST["pstamina"];
$spstrength = $_POST["pstrength"];

$sql = "INSERT INTO $dbname.player_stats (player_id, position, acceleration, balance,ball_control,crossing,curve,dribbling,finishing,gk_kicking,gk_positioning,penalties,short_pass,stamina,strength) VALUES('$spid','$sposition','$spacceleration','$spbalance','$spballcontrol','$spcrossing','$spcurve','$spdribbling','$spfinishing','$spgkk','$spgkp','$sppenalties','$spshortpass','$spstamina','$spstrength')";
if ($conn->query($sql) === TRUE) {
echo "<h3>NEW RECORD INSERTED SUCCESSFULLY.</h3>";
} else {
	echo "<h3>EITHER DATA EXIST OR NOT VALID ENTRY</h3>";
}
$conn->close();
?>