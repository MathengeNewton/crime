<?php
include 'connection.php';

$name = $_POST['name'];

$location = $_POST['location'];

$phone    = $_POST['phone'];

$description = $_POST['description'];

$sql  = "INSERT INTO reports(`name`, `location`, `r_phone`, `description`) VALUES ('$name', '$location', '$phone', '$description');";

mysqli_query($con, $sql) or die(mysqli_error($con));

if (mysqli_affected_rows($con) > 0) {

    echo "<script>alert('Hello " . $name . ", we have received your message. We will call you shortly');</script>";
    header('Location:index.php');
} else {

    echo "<script>alert('Crime reporting Failed! Please Try again');</script>";
}
?>