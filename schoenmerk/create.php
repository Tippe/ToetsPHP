<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Brand</h1>
	<form method="post">
		<div>
			<label for="name">Brand:</label>
			<input type="text" id="name" name="name">
		</div>
		<!--<div>
			<label for="name">id_brand:</label>
			<input type="text" id="id_brand" name="id_brand">
		</div>-->
		<div>
			<label for="name">Size:</label>
			<input type="text" id="size" name="size">
		</div>
		<div>
			<label for="name">Amount:</label>
			<input type="text" id="amount" name="amount">
		</div>
		
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>