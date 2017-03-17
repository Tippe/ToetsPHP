<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit Schoenmerk</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$schoenmerk['id']?>">
			<label for="name">Merk:</label>
			<input type="text" id="merk" name="merk" value="<?=$schoenmerk['merk']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>