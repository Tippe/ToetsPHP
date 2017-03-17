<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>Nieuw Schoenmerk</h1>
	<form method="post">
		<div>
			<label for="name">Merk:</label>
			<input type="text" id="merk" name="merk">
		</div>
		<div>
			<label for="name">Maat:</label>
			<input type="text" id="maat" name="maat">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>