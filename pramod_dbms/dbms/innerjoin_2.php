<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DBMS PROJECT</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/tablecss.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>


</head>
<body>
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
					<br><BR>
					<font color="red"><h1 align= "center" >GOAL</font></h1>
					<font><p><h2 align = "center"> USES INNER JOIN AND PROCEDURE </h2></p>
					<p><font color ="pink"><h2>APPLICATION : ALL INFO ABOUT PLAYERS</h2></font></p>
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


$sql = "call innerjoin_2()";
$result = $conn->query($sql);
echo "<table cellspacing='0'>";
echo "<thead>";
echo "    <tr>";
echo "  <th>Name</th>";

echo " <th>Fifa Api Id</th>";
echo "	<th>Birthday</th>";
echo "	<th>Rating</th>";
echo "	<th>Potential</th>";
echo "	<th>Preferred Foot</th>";
echo "    </tr>";
 echo " </thead>";    
     
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
        echo "<td> " . $row["player_name"]."</td>" ;
	echo " <td> " . $row["player_fifa_api_id"]."</td>";
	echo "<td>" .$row["birthday"]."</td>";
	echo "<td>" .$row["overall_rating"]."</td>";
	echo "<td>" .$row["potential"]."</td>";
	echo "<td>" .$row["preferred_foot"]."</td>";
	
	

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
						<a href="#" class="facebook">facebook</a>
						<a href="#" class="twitter">twitter</a>
						<a href="#" class="googleplus">googleplus</a>
						<a href="#" class="pinterest">pinterest</a>
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







