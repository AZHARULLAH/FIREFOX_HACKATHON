<?php 

if($_POST["season"])
{
	$season=$_POST["season"];
	//$season="sunny";
	
	$db_server = "athena.nitc.ac.in";
	$db_user = "b130727cs";
	$db_pass = "8686325560";
	$db_database = "db_b130727cs";

	$conn = mysql_connect($db_server,$db_user,$db_pass,$db_database);

	if(!$conn)
	{
		die("Error in connection..".mysql_error());
	}

	//echo 'Connected successfully to athena <br> Accessed Database '. $db_database. ' successfully';
	//echo "<br> ------------------ <br> <br>";

	$sql = 
	"SELECT * FROM $season;";
	
	mysql_select_db("db_b130727cs");

	$new_query = mysql_query($sql,$conn);

	$final = array();

	while($row = mysql_fetch_assoc($new_query))
	{
		$final[] = $row;
	}
	
	
	echo json_encode($final);
	
	}
?>
