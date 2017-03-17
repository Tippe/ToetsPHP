<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$schoenmerk = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','schoenenmerken');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from schoenmerk where id=$id";
			$result = $db->query($query);
		
			$schoenmerk = $result->fetch_assoc();		
		endif;
		if ($schoenmerk == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','schoenenmerken');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$merk = $db->escape_string($_POST["merk"]);
		$id_schoenmaat = $db->escape_string($_POST["id_schoenmaat"]);
		//$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "update schoenmerk set merk='$merk' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>