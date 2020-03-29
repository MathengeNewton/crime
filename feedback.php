<?php

include 'includes/header.php';

include 'connection.php';

if (isset($_POST['submit'])) {

	$name = $_POST['name'];

	$phone = $_POST['phone'];

	$message = $_POST['message'];

	$sql  = "INSERT INTO `feedback`(`name`, `phone`, `message`) VALUES ('$name', '$phone', '$message');";

	$result = mysqli_query($con, $sql);

	if (mysqli_affected_rows($con) > 0) {
		# code...
		echo "<script>alert('Thanks " . $name . " for your feedback. We look forward to making Kenya a better place.');</script>";
	} else {
		echo "<script>alert('Feedback submission failed. Please try again later');</script>";
	}
}
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">

	<title>Sema Crime</title>

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="../style.css">

</head>

<div class="container center" style="min-height: 70vh; padding-top: 8%;"">

	<div class=" center" style="margin: 0px auto">

	<h3 class="green">Feedback Information</h3>

	<form class="center" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"">
			
			<div class=" form-group">

		<input class="form-control" placeholder="Name" type="text" name="name" required>

</div>

<div class="form-group">

	<input class="form-control" placeholder="Phone" type="text" name="phone" required>

</div>

<div class="form-group">

	<textarea class="form-control" placeholder="Message" type="text" name="message" required></textarea>

</div>

<input class="btn btn-success form-control" type="submit" name="submit" value="LOGIN" style="color: white">

</form>
</div>

</div>