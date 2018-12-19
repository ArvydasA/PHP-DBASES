<?php 
/* Create database connection */
	$connection = mysql_connect("localhost", "db", "pw");
	if (!$connection) {
		die("Database connection failed: ");
		}

/* Select a database */
	$db_select = mysql_select_db("szecetl_crimetest",$connection);
	if (!$db_select) {
		die("Database selection failed: ");
		}
?>
	
<?php
/* Insert data from form submission */
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$state=$_POST['state'];
	$date=$_POST['date'];
	$crime=$_POST['crime'];
	$verdict=$_POST['verdict'];
	$sentence=$_POST['sentence'];

	$sql="INSERT INTO crimeuserinput (firstname, lastname, state, date, crime, verdict, sentence)
		VALUES ('".$fname."', '".$lname."', '".$state."', '".$date."', '".$crime."', '".$verdict."', '".$sentence."')";

	mysql_query($sql) or die("Error: " . mysql_error());
			echo "1 record added";
		
?>


	
<?php
/* Close connection */
	mysql_close($connection);
?>