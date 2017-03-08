<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Space Science Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/tablecss.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	<title>log files</title>

<style type="text/css">



/*
Table Style - This is what you want
------------------------------------------------------------------ */
table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,s
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
	padding-left:20px;
}
table tr td:first-child{
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table tr td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}

</style>

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

					<br><BR>
					<font color="red"><h1 align= "center" >GOAL</font></h1>
					<font><p><h2 align = "center"> USES INSERT, UPDATE, DELETE TRIGGER </h2></p>
					<p><font color ="pink"><h2>APPLICATION : LOG THE ACTION OF USER</h2></font></p>
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
echo "<h1 align ='center'>"."<font color = 'red' >"."MESSAGE"."</font>"."</h1>";
					echo "<h1 align= 'center'><p><font color ='pink'></p>"."LOG FILE FOR COUNTRY"."</h1>";
				echo "</div>";

$sql = "SELECT action_id , `id` ,`name` , actions  FROM log_country";
$result = $conn->query($sql);
echo "<table cellspacing='0'>";
echo "<thead>";
echo "    <tr>";
echo "  <th>action_id</th>";
echo "      <th>id</th>";
echo " <th>name</th>";
echo "	<th>actions</th>";
echo "    </tr>";
 echo " </thead>";    
     
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
        echo "<td> " . $row["action_id"]."</td>" ;
	echo " <td> " . $row["id"]."</td>";
	echo "<td>" .$row["name"]."</td>";
	echo "<td>".$row["actions"]."</td>";
	echo "</tr>";
	
    }
	echo "</table>";
} else {
    echo "0 results";
}

echo "<h1 align ='center'>"."<font color = 'red' >"."MESSAGE"."</font>"."</h1>";
					echo "<h1 align= 'center'><p><font color ='pink'></p>"."LOG FILE FOR LEAGUE"."</h1>";
				echo "</div>";
$sql = "SELECT action_id , `id` ,country_id,`name` ,actions   FROM log_league";
$result = $conn->query($sql);
echo "<table cellspacing='0'>";
echo "<thead>";
echo "    <tr>";
echo "  <th>action_id</th>";
echo "      <th>id</th>";

echo "	<th>country_id</th>";
echo "	<th>name</th>";
echo "	<th>actions</th>";
echo "    </tr>";
 echo " </thead>";    
     
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
        echo "<td> " . $row["action_id"]."</td>" ;
	echo " <td> " . $row["id"]."</td>";
	echo " <td> " . $row["country_id"]."</td>";
	echo "<td>" .$row["name"]."</td>";
	echo "<td>".$row["actions"]."</td>";
	echo "</tr>";
	
    }
	echo "</table>";
} else {
    echo "0 results";
}



?>







