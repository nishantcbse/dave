<?php include_once('classes/generic.class.php'); ?>

<?php
function displaytable($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadtable(" . $row['id'] . ");'>" . $row['political_party_list'] ."</td>"; ?>
        <td><?php echo $row['party_symbols']; ?></td>
<!--        <td><img src=documents/party_symbols/"<?php //echo 'party_symbol'; ?>" /></td>
-->	</tr>
	<?php

}
?>

<?php
function list_table() {

	global $generic;
	$sql = 'SELECT *
			FROM settings_political_party_list
			INNER JOIN settings_party_symbols ON settings_political_party_list.id = settings_party_symbols.id 
			WHERE settings_political_party_list.flag = 0 AND settings_party_symbols.flag = 0 ORDER BY settings_political_party_list.id DESC';
	$query = $generic->query($sql);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Political Party Name</th>
                <th>Party Symbol</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaytable($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php

}
?>