<?php

// Index; Show table
// Public Domain Code 
// Use for anything :)

$today = strtotime(date('Ymd'));

include 'config.php';
include 'header.php';

echo"<table class='table table-hover table-condensed'>
  	<tr><th>ID</th><th>Name</th><th>DoB</th><th>Days</th><th>Years</th></tr>";

mysql_connect($dbhost,$dbuser,$dbpass);
	@mysql_select_db($dbname) or die( "Unable to select database");
		
		$query = "SELECT * FROM data ORDER BY dob ASC";
		$query2 = "SELECT AVG(dobt) FROM data";
 
			$result = mysql_query($query) or die(mysql_error());
			$result2 = mysql_query($query2) or die(mysql_error());
			

			
while($row = mysql_fetch_array($result)){
 
 	$dob1 = $today - $row['dobt']; 
	$dob2 = floor($dob1/3600/24);	
	$dob3 = floor($dob2/365);
		echo"<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['dob']."</td><td>".$dob2."</td><td>".$dob3."</td></tr>";

}


while($row2 = mysql_fetch_array($result2)){

echo"</table>";

$avgage = $today - $row2['AVG(dobt)'];
$avgage2 = floor($avgage/3600/24);
$avgage3 = floor($avgage2/365);

echo"
<h4>Average Age: ".$avgage3."</h4>";

}



mysql_close();
include 'footer.php';
?>

