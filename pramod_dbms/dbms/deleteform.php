


<?php
$conn = mysqli_connect("localhost" , "root" , "PRAMOD" , "assgn1");
if($conn->connect_error){
die("Connection Failed: " .$conn->connect_error);
}
?>

<html>
<head>

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DBMS PROJECT</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/tablecss.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>

<title>Simple Little Table in HTML/CSS3</title>

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
table a:active,
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

					<br><BR>
					<font color="red"><h1 align= "center" >GOAL</font></h1>
					<font><p><h2 align = "center"> USES DELLETE  </h2></p>
					<p><font color ="pink"><h2>APPLICATION :  TO DELETE RECORDS FROM TABLE</h2></font></p>
				</div>

<form class="form-style-9" action="deleteform.php" method="post">
<ul>

DELETE FROM TABLE 
   <li><select name="name" class="field-style field-split align-left" placeholder="" >
   <option value="Country">Country</option>
   <option value="League">League</option>
  <option value="Matches">Matches</option>
   <option value="Player">Player</option>
  <option value="Team">Team</option>
   <option value="Team_Attributes">Team_Attributes</option>
 <option value="Player_Attributes">Player_Attributes</option>
 </select>
   </li>

   WHERE: 
   <li><textarea rows=50 cols =50 name="clause" >Enter where clause here...</textarea></li>
   <li><input type="submit" /></li>
   
</li>

</ul>
</form>
<?php 
if(isset($_POST['clause'])  ){
	
	$name = $_POST['name'];
   
	$clause = $_POST['clause'];
	
	$sql1= "DELETE FROM ".$name. " where  ".$clause;
	
	//echo $cname;
	$sql = $sql1;
	if($result = mysqli_query($conn , $sql)){
		echo "<div >";
					echo "<h1 align ='center'>"."<font color = 'pink' >"."MESSAGE"."</font>"."</h1>";
					echo "<h1 align= 'center'><p><font color ='blue'></p>"."Query Executed Successfully"."</h1>";
				echo "</div>";
		mysqli_free_result($result);
        

      


		
	}
	else{
		$errormsg="ERROR : Couldnt execute query ".mysqli_error($conn);
		echo "<div >";
					echo "<h1 align ='center'>"."<font color = 'red' >"."MESSAGE"."</font>"."</h1>";
					echo "<h1 align= 'center'><p><font color ='pink'></p>".$errormsg."</h1>";
				echo "</div>";
	}
	mysqli_close($conn);
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
