<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','shoes');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		//$id_brand = $db->escape_string($_POST["id_brand"]);
		$size = $db->escape_string($_POST["size"]);
		$amount = $db->escape_string($_POST["amount"]);
		
		// Prepare query and execute
		$query = "insert into brand (name) values ('$name')";
		$query2 = "insert into stockpile (size, amount) values ('$size, $amount')";
		$result = $db->query($query);
		$result2 = $db->query($query2);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;
?>