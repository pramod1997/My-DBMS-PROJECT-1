<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DBMS PROJECT</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="#" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.html">Home</a>
					</li>
					
					<li class="menu">
						<a href="form_insert_country.php">Inserts</a>
						
							
							
							
					</li>
					<li>
						<a href="updateform.php">Forms</a>
					</li>
					
					<li class="menu">
						<a href="innerjoin_4.php">Joins</a>
						
					</li>
					
					<li>
						<a href="log_files.php">Log</a>
					</li>
				</ul>
			</div>
		</div>
	<br>
					<font color="red"><h1 align= "center" >GOAL</font></h1>
					<font><p><h2 align = "center"> USES INNER JOIN AND PROCEDURE </h2></p>
					<p><font color ="pink"><h2>APPLICATION : </h2></font></p>
				</div>
			
<?php
$servername = "localhost";
$username = "root";
$password = "PRAMOD";
$dbname = "assgn1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$input=$_GET['field1'];
$sql = "call innerjoin_3('$input')";
$result = $conn->query($sql);
echo "<table cellspacing='0'>";
echo "<thead>";
echo "    <tr>";
echo "  <th>country_id</th>";

echo " <th>league_id</th>";
echo "	<th>date </th>";
echo "	<th>stage </th>";
echo "	<th>match_api_id</th>";
echo "	<th>home_team_api_id </th>";
echo "	<th>away_team_api_id</th>";
echo "	<th>home_team_goal </th>";
echo "	<th>away_team_goal </th>";

echo "    </tr>";
 echo " </thead>";    
     
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
        echo "<td> " . $row["country_id"]."</td>" ;
	echo " <td> " . $row["league_id"]."</td>";
	echo "<td>" .$row["date"]."</td>";
	echo "<td>".$row["stage"]."</td>";
	echo "	<td>".$row["match_api_id"]."</td>";
	echo "	<td>".$row["home_team_api_id"] ."</td>";
	echo "	<td>".$row["away_team_api_id"]."</td>";
	echo "	<td>".$row["home_team_goal"]." </td>";
	echo "	<td>".$row["away_team_goal"]."</td>";

	echo "</tr>";
	
    }
	echo "</table>";
} else {
    echo "0 results";
}






?>
<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW MY  PROJECTS ON</h1>
					<div>
						<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
						<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
						<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
						<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; 2017 Pramod Yadav</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>










