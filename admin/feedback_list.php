<?php 

include 'includes/header.php';

include '../connection.php';

$query	=	"SELECT * FROM feedback";

$myresult = mysqli_query($con, $query) or die("Error fetching Data");

$result = mysqli_fetch_array($myresult)

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

			<th>message</th>

			</tr>
		</thead>

		<tbody>
			
			
			
		<tr class="">
			<td><?php echo $result[0] ?></td>

			<td><?php echo $result[1] ?></td>

			<td><?php echo $result[2] ?></td>
		</tr>

		
		
	</tbody>
	</table>

</div>

<?php include '../includes/footer.php'; ?>