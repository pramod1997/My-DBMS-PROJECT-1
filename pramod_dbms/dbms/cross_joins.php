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
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li class="menu">
						<a href="projects.html">Inserts</a>
						<ul class="secondary">
							<li>
								<a href="form_insert_country.php">Country</a>
							</li>
							<li>
								<a href="form_insert_league.php">League</a>
							</li>
							<li>
								<a href="form_insert_player.php">Player</a>
							</li>
							<li>
								<a href="form_insert_team.php">Team</a>
							</li>
							
					</ul>		
					</li>
					<li>
						<a href="updateform.php">Update</a>
					</li>
					<li>
						<a href="deleteform.php">Delete</a>
					</li>
					<li class="menu">
						<a href="">Joins</a>
						<ul class="secondary">
							<li>
								<a href="innerjoin_4.php">INNER JOIN</a>
							</li>
							<li>
								<a href="left_joins.php">LEFT JOIN</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="procedures.php">Procedure</a>
						<ul class="secondary">
							<li>
								<a href="call_procedures.php">Procedure_1</a>
							</li>
							
						</ul>
					</li>
					<li>
						<a href="log_files.php">Log</a>
					</li>
				</ul>
			</div>
		</div>
<div >
					<br><BR>
					<font color="red"><h1 align= "center" >GOAL</font></h1>
					<font><p><h2 align = "center"> USES CROSS JOIN AND PROCEDURE </h2></p>
					<p><font color ="pink"><h2>APPLICATION : FIND ALL THE LEAGUES IN WHICH A COUNTRY CAN PARTICIPATE</h2></font></p>
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


$sql = "call cross_join()";
$result = $conn->query($sql);
echo "<table cellspacing='0'>";
echo "<thead>";
echo "    <tr>";
echo "  <th>League id</th>";
echo "      <th>League Name</th>";
echo " <th>Country</th>";

echo "    </tr>";
 echo " </thead>";    
     
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
        echo "<td> " . $row["league_id"]."</td>" ;
	echo " <td> " . $row["league_name"]."</td>";
	echo "<td>" .$row["country_name"]."</td>";
	
	echo "</tr>";
	
    }
	echo "</table>";
	mysqli_free_result($result);
} else {
    echo "0 results";
	mysqli_free_result($result);

}

echo "the difference between left and right join";








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


