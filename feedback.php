<?php
include 'includes/header.php';
?>
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

	<form class="center" method="post" action="feedback_form.php">
			
			<div class=" form-group">

		<input class="form-control" placeholder="Name" type="text" name="name" required>

</div>

<div class="form-group">

	<input class="form-control" placeholder="Phone" type="text" name="phone" required>

</div>

<div class="form-group">

	<textarea class="form-control" placeholder="Your comment" type="text" name="message" required></textarea>

</div>

<input class="btn btn-success form-control" type="submit" name="submit" value="comment" style="color: white">

</form>
</div>

</div>