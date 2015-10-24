<?php  

	if(isset($_POST['value']) & isset($_POST['season']) )
	{
	    $uid = $_POST['value'];
	    $season = $_POST['season'];

		//$uid = 1;
		//$season = 'sunny';

	    	$db_server = "athena.nitc.ac.in";
		$db_user = "b130727cs";
		$db_pass = "8686325560";
		$db_database = "db_b130727cs";

		$conn = mysql_connect($db_server,$db_user,$db_pass,$db_database);

		if(!$conn)
		{
			die("Error in connection..".mysql_error());
		}

		echo 'Connected successfully to athena <br> Accessed Database '. $db_database. ' successfully';

		echo "<br> ------------------ <br> <br>";

	    switch ($uid) 
	    {
	    	case 1:
	    		$sql = "UPDATE $season SET movie=movie + 1 WHERE sno = 1";
	    		break;

	    	case 2:
	    		$sql = "UPDATE $season SET gaming=gaming + 1 WHERE sno = 1";
	    		break;

	    	case 3:
	    		$sql = "UPDATE $season SET readwrite=readwrite + 1 WHERE sno = 1";
	    		break;

	    	case 4:
	    		$sql = "UPDATE $season SET family=family + 1 WHERE sno = 1";
	    		break;

	    	case 5:
	    		$sql = "UPDATE $season SET friends=friends + 1 WHERE sno = 1";
	    		break;

	    	case 6:
	    		$sql = "UPDATE $season SET gym=gym + 1 WHERE sno = 1";
	    		break;

	    	case 7:
	    		$sql = "UPDATE $season SET sleep=sleep + 1 WHERE sno = 1";
	    		break;

	    	case 8:
	    		$sql = "UPDATE $season SET girlfriend=girlfriend + 1 WHERE sno = 1";
	    		break;

	    	case 9:
	    		$sql = "UPDATE $season SET coding=coding + 1 WHERE sno = 1";
	    		break;

	    	case 10:
	    		$sql = "UPDATE $season SET trekking=trekking + 1 WHERE sno = 1";
	    		break;

	    	case 11:
	    		$sql = "UPDATE $season SET roadtrip=roadtrip + 1 WHERE sno = 1";
	    		break;
	    	
	    	default:
	    		# code...
	    		break;
	    }
	    //$sql = 'INSERT INTO trial values ("$season");';
	}

	mysql_select_db("db_b130727cs");

	$new_query = mysql_query($sql,$conn);

	if(!$new_query)
	{
		die("<br> Error inserting values into table...".mysql_error());
	}

	echo "Updated into table successfully";


?>
