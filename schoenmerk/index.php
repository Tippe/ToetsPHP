<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Schoenmerken</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
                <th>Merk</th>
                <!--<th>Maat</th>-->
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($schoenmerken as $schoenmerk):
?>
			<tr>
				<td><?=$schoenmerk['merk']?></td>
				<!--<td><?=$schoenmerk['id_schoenmaat']?></td> -->
				<td class="center"><a href="edit.php?id=<?=$schoenmerk['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$schoenmerk['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>