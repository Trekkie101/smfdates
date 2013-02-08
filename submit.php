<?php

// Submit
// Public Domain Code 
// Use for anything :)

// Grab DB info and the header.
include 'config.php';
include 'header.php';



// Connect to the DB
mysql_connect($dbhost,$dbuser,$dbpass);

$name = $_POST['name'];

if (isset($name)) {

// Grab it, clean it.
$name = mysql_real_escape_string($_POST['name']);
$dob = mysql_real_escape_string($_POST['dob']);
$dobt = strtotime($dob);

  	@mysql_select_db($dbname) or die( "Unable to select database");
			
			$query = "INSERT INTO data VALUES ('','$name','$dob','$dobt')";

		mysql_query($query);

}


mysql_close();

echo'
<form action="submit.php" method="post">

	<label><strong>Name</strong></label>
	<label class="text">
	<input type="text" name="name">
	</label><br />

	<label><strong>Date of Birth in ISO8601 (eg. 19891125 Year Month Day)</strong></label>
	<label class="text">
	<input type="text" name="dob">
	</label><br />

<input type="submit" class="btn btn-primary" />
</form>';

include 'footer.php';

?>
