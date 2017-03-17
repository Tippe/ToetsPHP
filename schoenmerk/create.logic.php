<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','schoenenmerken');
		
		// Prepare data for insertion
		$merk = $db->escape_string($_POST["merk"]);
		
		// Prepare query and execute
		$query = "insert into schoenmerk (merk) values ('$merk')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>