<?php include_once('classes/generic.class.php'); ?>

<?php
function displaymanageuser($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadusers(" . $row['user_id'] . ");'>" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
	</tr>
	<?php

}
?>

<?php
function list_manageusers() {

	global $generic;
    $sql = 'SELECT * FROM login_users WHERE flag = 0 ORDER BY user_id DESC';
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>name</th>
                <th>username</th>
<!--                <th>user_level</th>
                <th>restricted</th>
-->                <th>email</th>
               <th>password</th>
<!--                 <th>timestamp</th>
                <th>avatar</th>
                <th>user_profile_id</th>
                <th>is_varified</th>
                <th>created</th>
                <th>updated</th>
-->			</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageuser($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php

}
?>
