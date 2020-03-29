<?php

include 'includes/header.php';

include '../connection.php';

$query	=	"SELECT * FROM crimes_table";

$outcome = mysqli_query($con, $query) or die("Error fetching Data");

$result = mysqli_fetch_array($outcome);



?>

<script>
	$(document).ready(function() {
		$('#crimes_grid').DataTable();
	});
</script>

<div class="container table-responsive">

	<h3 class="green center container" style="padding: 1em">Reported crimes</h3>

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

			<?php foreach ($result as $row) { ?>

				<tr>
					<td><?php echo $row['id'] ?></td>

					<td><?php echo $row['name'] ?></td>

					<td><?php echo $row['phone'] ?></td>

					<td><?php echo $row['description'] ?></td>

					<td><?php echo $row['location'] ?></td>

					<td><?php echo $row['reporting_time'] ?></td>

				</tr>

			<?php } ?>

		</tbody>
	</table>

</div>

<!-- Fetching of data from the database happens here -->

<?php include '../includes/footer.php'; ?>