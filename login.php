
<?php 

include 'connection.php';

include 'includes/header.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];

	$password = $_POST['password'];

	$sql = "SELECT * FROM users where `username` = '$username' AND `password` = '$password';";

	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		# code...
		header("location: admin/crime_list.php ");
	}
	else{
		echo "<script>alert('Incorrect Username or Password');</script>";
	}
}
 ?>

<div class="container center" style="min-height: 70vh;" style="background: url(../images/about-img.png);">

	<div class="center" style="margin: 0px auto">

		<h3 class="green">Admin Login</h3>
		
		<form class="center" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" style=" padding: 10% 0;width: 250px;">
			
			<div class="form-group">
				
				<input class="form-control" placeholder="Username" type="text" name="username" required>

			</div>

			<div class="form-group">
				
				<input class="form-control" placeholder="Password" type="password" name="password" required>
				
			</div>

			<input class="btn btn-success form-control" type="submit" name="submit" value="LOGIN" style="color: white">

		</form>
	</div>

	<?php include 'includes/footer.php'; ?>

