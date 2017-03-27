<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit Brand</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$brand['id']?>">
			<label for="name">Brand:</label>
			<input type="text" id="name" name="name" value="<?=$brand['name']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>