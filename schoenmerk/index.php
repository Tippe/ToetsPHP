<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Brands</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
                <th>Brands</th>
                <th>Size</th>
                <th>Amount</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		</tbody>
		
		
<?php
	foreach($brands as $brand) {
        foreach($stockpiles as $stockpile) {
?>
			<tr>
                <td><?=$brand['name']?></td>
                <td><?=$stockpile['size']?></td>
                <td><?=$stockpile['amount']?></td>
				<td class="center"><a href="edit.php?id=<?=$brand['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$brand['id']?>">delete</a></td>
			</tr>

<?php
        }
    }
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>