<?php 

include 'includes/header.php';

include '../connection.php';

$query	=	"SELECT * FROM feedback";

$result = mysqli_query($con, $query) or die("Error fetching Data");


 ?>

<script>
	$(document).ready(function() {
		$('#feedback_table').DataTable();
	} );

</script>

<h3 class="green center">Visitor Comments</h3>

<div class="container" style="width:80%">

 <table id="feedback_table" class="table table-striped table-bordered center">
		
		<thead>
			
		<tr>
			<th>#</th>

			<th>Phone</th>

			<th>Description</th>

			<th>Location</th>

			<th>Time</th>

			</tr>
		</thead>

		<tbody>
			
			<?php foreach($result as $row) { ?>
			
		<tr class="">
			<td><?php echo $row['feedback_id'] ?></td>

			<td><?php echo $row['name'] ?></td>

			<td><?php echo $row['phone'] ?></td>

			<td><?php echo $row['message'] ?></td>

			<td><?php echo $row['time_received'] ?></td>

		</tr>

		<?php } ?>
		
	</tbody>
	</table>

</div>

<?php include '../includes/footer.php'; ?>