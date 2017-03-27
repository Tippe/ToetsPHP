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
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','shoes');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "delete from brand where id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>