<?php

include './includes/header.php';

include '../connection.php';

$query	=	'SELECT * FROM `crimes_table`';

$outcome = mysqli_query($con, $query) or die("Error fetching Data");

$result = mysqli_fetch_array($outcome);
$resultarray = array($result);



?>

<script>
	$(document).ready(function() {
		$('#crimes_grid').DataTable();
	});
</script>

<div class="container table-responsive">

	<h3 class="green center container" style="padding: 1em">Crime List</h3>

	<table id="crimes_grid" class="table table-striped table-bordered center">

		<thead>

			<tr>
				<th>#</th>

				<th>Reporter</th>

				<th>Phone</th>

				<th>Description</th>

				<th>Location</th>

				<th>Time</th>

			</tr>
		</thead>

		<tbody>	
			
				<tr>
				
					<td><?php echo $result[0]?></td>

					<td><?php echo $result[1] ?></td>

					<td><?php echo $result[2] ?></td>

					<td><?php echo $result[3] ?></td>

					<td><?php echo $result[4] ?></td>

					<td><?php echo $result[5] ?></td>

				</tr>		

		</tbody>
	</table>

</div>

<!-- Fetching of data from the database happens here -->

<?php include '../includes/footer.php'; ?>