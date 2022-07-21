<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Database</title>  
   <link rel="stylesheet" href="style.css">
</head>

<body style="background-image: linear-gradient(to left, #f24444, #db3735, #c42a27, #ae1c19, #980b0b);">

<br>      
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fifa1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>
  <h1>PLAYER PERSONAL DETAILS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>NAME</th>
          <th>AGE</th>
          <th>OVERALL RATING</th>
          <th>NATIONALITY</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$sql = "SELECT * FROM personal_details ORDER BY player_id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["player_name"]. "</td>";
          echo "<td>" .$row["age"]. "</td>";
         echo "<td>" .$row["overall_rating"]. "</td>";
          echo "<td>" .$row["nationality"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 } 
?>
</table>
</div><br>
   <h1>STATISTICS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>PLAYING POSITION</th>
          <th>ACCELARATION</th>
	  <th>BALANCE</th>
	  <th>BALL CONTROL</th>
	  <th>CROSSING</th>
	  <th>CURVE</th>
	  <th>DRIBBLING</th>
	  <th>FINISHING</th>
	  <th>GOALKEEPER KICKING</th>
	  <th>GOALKEEPER POSITIONING</th>
	  <th>PENALTIES</th>
	  <th>SHORTPASS</th>
	  <th>STAMINA</th>
	  <th>STRENGTH</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$sql = "SELECT * FROM player_stats ORDER BY player_id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
         echo "<td>" .$row["position"]. "</td>";
         echo "<td>" .$row["acceleration"]. "</td>";
	 echo "<td>" .$row["balance"]. "</td>";
	 echo "<td>" .$row["ball_control"]. "</td>";
         echo "<td>" .$row["crossing"]. "</td>";
         echo "<td>" .$row["curve"]. "</td>";
         echo "<td>" .$row["dribbling"]. "</td>";
         echo "<td>" .$row["finishing"]. "</td>";
         echo "<td>" .$row["gk_kicking"]. "</td>";
         echo "<td>" .$row["gk_positioning"]. "</td>";
         echo "<td>" .$row["penalties"]. "</td>";
         echo "<td>" .$row["short_pass"]. "</td>";
         echo "<td>" .$row["stamina"]. "</td>";
         echo "<td>" .$row["strength"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
</table>
</div><br>
   <h1>CLUB</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>CLUB</th>
          <th>PLAYING POSITION</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$sql = "SELECT * FROM player_club ORDER BY player_id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["player_club"]. "</td>";
          echo "<td>" .$row["player_position"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
</table>
</div><br>
<h1>SALARY</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>WAGE</th>
          <th>VALUATION($)</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$sql = "SELECT * FROM player_salary ORDER BY player_id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["player_wage"]. "</td>";
          echo "<td>" .$row["player_value"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
</table>
</div><br>
</body>
</html>