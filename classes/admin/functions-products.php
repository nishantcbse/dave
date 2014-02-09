<?php include_once('classes/generic.class.php'); ?>

<?php
function displaymanageproductshome($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductshome(" . $row['id'] . ");' class='home' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductsregister($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductsregister(" . $row['id'] . ");' class='register' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductslogin($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductslogin(" . $row['id'] . ");' class='login' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductscontact($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductscontact(" . $row['id'] . ");' class='contact' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductsabout($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductsabout(" . $row['id'] . ");' class='about' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductswelcome($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductswelcome(" . $row['id'] . ");' class='welcome' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductsaccountsponser($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductsaccountsponser(" . $row['id'] . ");' class='accountsponser' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductscandidateinfo($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductscandidateinfo(" . $row['id'] . ");' class='candidateinfo' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>

<?php
function list_manageproductshome() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Home' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductshome($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsregister() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Register' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductsregister($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductslogin() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Login' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductslogin($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductcontact() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Contact Us' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductscontact($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsabout() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'About' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductsabout($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductswelcome() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Welcome' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductswelcome($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsaccountsponser() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Account Sponser' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductsaccountsponser($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductscandidateinfo() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Candidate Info' ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductscandidateinfo($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
?>
