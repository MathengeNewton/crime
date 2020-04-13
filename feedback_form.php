<?php

include 'connection.php';

if (isset($_POST['submit'])) {

	$name = $_POST['name'];

	$phone = $_POST['phone'];

	$message = $_POST['message'];

	$sql  = "INSERT INTO `feedback`(`phone`, `message`) VALUES ('$phone', '$message');";

	$result = mysqli_query($con, $sql);

	if ($result) {
        echo "<script>alert('Thanks " . $name . " for your feedback. We look forward to making Kenya a better place.');</script>";
        header('Location:index.php');
	} else {
        echo "
        <script>
        alert('Feedback submission failed. Please try again later');
        </script>";
        header('Location:feedback.php');
	}
}
?>