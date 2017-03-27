<?php
	
	$db = new mysqli('localhost','root','','shoes');

	$query = "select * from brand";
	$query2 = "select * from stockpile";
	$result = $db->query($query);
	$result2 = $db->query($query2);
	
	$brands = $result->fetch_all(MYSQLI_ASSOC);
	$stockpiles = $result2->fetch_all(MYSQLI_ASSOC);
?>