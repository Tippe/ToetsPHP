<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$brand = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','shoes');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from brand where id=$id";
			$result = $db->query($query);
		
			$brand = $result->fetch_assoc();		
		endif;
		if ($brand == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','shoes');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		
		// Prepare query and execute
		$query = "update brand set name='$name' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>