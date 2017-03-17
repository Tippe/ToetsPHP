<?php
	
	$db = new mysqli('localhost','root','','schoenenmerken');

	$query = "select * from schoenmerk";
	$result = $db->query($query);
	
	$schoenmerken = $result->fetch_all(MYSQLI_ASSOC);
?>