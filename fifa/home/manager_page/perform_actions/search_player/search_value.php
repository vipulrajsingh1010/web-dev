<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Search Player's Data</title>
<link href="menu.css" rel="stylesheet">  
   <link rel="stylesheet" href="style.css">
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

$choices = $_POST["choice2"];
$value = $_POST["value"]; 
?>

  <h1>ABOUT PLAYERS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
	<tr>
	  <th colspan="6" style="background-color: #bc413f;
  border-radius: 15px;
  border-color:yellow;
  border:  solid;
  border-width: 0.2px">PLAYER DETAILS</th>
    <th colspan="14" style="background-color: #bb3035;     
  border-radius: 15px;
  border-color:yellow;
  border:  solid;
  border-width: 0.2px">PLAYER STATISTICS</th>
  <th colspan="2" style="background-color: #9b021b;
  border-radius: 15px;
  border-color:yellow;
  border:  solid;
  border-width: 0.2px">PLAYER SALARY($)</th>
    	</tr>
        <tr>
          <th>PLAYER ID</th>
          <th>NAME</th>
          <th>AGE</th>
          <th>OVERALL RATING</th>
          <th>NATIONALITY</th>
	  <th>CLUB</th>
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
	  <th>WAGE</th>
          <th>VALUATION($)</th>
	</tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<?php
if($choices=='AGE'){
	$sql = "CALL SearchAge('$value')";
}
else  if($choices=='NAME'){
	$sql = "CALL SearchName('$value')";
}
else  if($choices=='PLAYER ID'){	
	$sql = "CALL Searchplayerid('$value')";
}
else  if($choices=='OVERALL RATING'){
	$sql = "CALL SearchOverallRating('$value')";
}
else if($choices=='NATIONALITY'){
	$sql = "CALL SearchNationality('$value')";
}
else if($choices=='CLUB'){
	$sql = "CALL SearchClub('$value')";
}
else if($choices=='POSITION'){
	$sql = "CALL SearchPosition('$value')";
}
else {
	echo "<h3>WRONG CHOICE</h3>";
}
$result = mysqli_query($conn, $sql);
if ($result) {
   	  while($row = $result->fetch_assoc()) { 
       	echo "<tbody>";
       	echo "<tr>";
       	echo "<td>" .$row["player_id"]. "</td>";
        echo "<td>" .$row["player_name"]. "</td>";
       	echo "<td>" .$row["age"]. "</td>";
        echo "<td>" .$row["overall_rating"]. "</td>";
        echo "<td>" .$row["nationality"]. "</td>";
        echo "<td>" .$row["player_club"]. "</td>";
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
		    echo "<td>" .$row["player_wage"]. "</td>";
        echo "<td>" .$row["player_value"]. "</td>";
	      echo "</tr>";
        echo "</tbody>";
    	}
}
else {
	echo "<h3>No Data Found</h3>";
}

?>
</table>
</div><br>
</body>
</html>