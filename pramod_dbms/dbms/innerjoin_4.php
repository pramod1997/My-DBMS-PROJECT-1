
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DBMS PROJECT</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/tablecss.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>



<style type="text/css">
.form-style-9{
    max-width: 450px;
    background: #FAFAFA;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
    border-radius: 10px;
    border: 6px solid #305A72;
}
.form-style-9 ul{
    padding:0;
    margin:0;
    list-style:none;
}
.form-style-9 ul li{
    display: block;
    margin-bottom: 10px;
    min-height: 35px;
}
.form-style-9 ul li  .field-style{
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    padding: 8px;
    outline: none;
    border: 1px solid #B0CFE0;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
    box-shadow: 0 0 5px #B0CFE0;
    border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
    width: 49%;
}
.form-style-9 ul li .field-full{
    width: 100%;
}
.form-style-9 ul li input.align-left{
    float:left;
}
.form-style-9 ul li input.align-right{
    float:right;
}
.form-style-9 ul li textarea{
    width: 100%;
    height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
    -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
    -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
    box-shadow: inset 0px 1px 0px 0px #3985B1;
    background-color: #216288;
    border: 1px solid #17445E;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    padding: 8px 18px;
    text-decoration: none;
    font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
    background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
    background-color: #28739E;
}

</style>

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
		</div><br><BR>
					<font color="red"><h1 align= "center" >GOAL</font></h1>
					<font><p><h2 align = "center"> USES INNER JOIN AND PROCEDURE  AND SEARCH</h2></p>
					<p><font color ="pink"><h2>APPLICATION : SEARCH ABOUT INFO OF A PLAYER</h2></font></p>
				</div>
			
<form class="form-style-9" action="innerjoin_4.php" method="get">
<ul>
PLAYER ID:
<li>
    
    <input type="number" name="field1" class="field-style field-split align-left" placeholder="" />
    
</li>

</ul>
</form>

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
$sql1 = "call innerjoin_4('$input')";
$result = $conn->query($sql1);
echo "<table cellspacing='0'>";
echo "<thead>";
echo "    <tr>";
echo "  <th>Fifa Id</th>";

echo " <th>Name</th>";
echo "	<th>birthday </th>";
echo "	<th>height </th>";
echo "	<th>weight</th>";
echo "	<th>rating</th>";
echo "	<th>Attack</th>";
echo "	<th>Defence </th>";


echo "    </tr>";
 echo " </thead>";    
     
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
        echo "<td> " . $row["player_fifa_api_id"]."</td>" ;
	echo " <td> " . $row["player_name"]."</td>";
	echo "<td>" .$row["birthday"]."</td>";
	echo "<td>".$row["height"]."</td>";
	echo "	<td>".$row["weight"]."</td>";
	echo "	<td>".$row["rating"] ."</td>";
	echo "	<td>".$row["attack"]."</td>";
	echo "	<td>".$row["defence"]." </td>";
	

	echo "</tr>";
	
    }
	echo "</table>";
} else {
    echo "<div >";
					echo "<h1 align ='center'>"."<font color = 'red' >"."MESSAGE"."</font>"."</h1>";
					echo "<h1 align= 'center'><p><font color ='pink'></p>"."0 RESULTS OR ERROR"."</h1>";
				echo "</div>";
}
?>

</body>
</html>

