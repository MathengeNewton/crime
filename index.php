<?php include 'includes/header.php';

include 'connection.php';

if (isset($_POST['submit'])) {

    if (isset($_FILES["attachment"]) && $_FILES["attachment"]["error"] == 0) {


        $filename = $_FILES["attachment"]["name"];

        $filetype = $_FILES["attachment"]["type"];

        $filesize = $_FILES["attachment"]["size"];

        // Verify file size - 5MB maximum

        $maxsize = 10 * 1024 * 1024;

        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");



        // Verify MYME type of the file

        // if(in_array($filetype, $allowed)){

        //     

        // } else{

        //     echo "Error: There was a problem uploading your file. Please try again."; 

        // }
        // Check whether file exists before uploading it

        if (file_exists("uploads/" . $_FILES["attachment"]["name"])) {

            echo $_FILES["attachment"]["name"] . " is already exists.";
        } else {

            move_uploaded_file($_FILES["attachment"]["tmp_name"], "uploads/" . $_FILES["attachment"]["name"]);
        }
    } else {

        echo "Error: " . $_FILES["attachment"]["error"];
    }

    $name = $_POST['name'];

    $location = $_POST['location'];

    $phone    = $_POST['phone'];

    $description = $_POST['description'];

    $sql  = "INSERT INTO crimes_table(`name`, `location`, `phone`, `description`) VALUES ('$name', '$location', '$phone', '$description');";

    mysqli_query($con, $sql) or die(mysqli_error($con));

    if (mysqli_affected_rows($con) > 0) {

        echo "<script>alert('Hello " . $name . ", we have received your message. We will call you shortly');</script>";
    } else {

        echo "<script>alert('Crime reporting Failed! Please Try again');</script>";
    }
}

$page = "report_crime";
?>

<body>

    <div id="content" class="container center">

        <h4 style="color:'red'">Report a Crime now></h4>

        <hr />

        <form class="center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">

                <input placeholder="Your name (Optional)" class="form-control" type="text" name="name" size="28">

            </div>

            <div class="form-group">

                <input placeholder="Crime Location (required)" class="form-control" type="text" name="location" size="28" required>

            </div>

            <div class="form-group">

                <input placeholder="Your Phone Number (required)" class="form-control" type="text" name="phone" size="28" required>

            </div>

            <div class="form-group">

                <textarea placeholder="Crime Description (Important)" class="form-control" name="description" cols="21" rows="4"></textarea>

            </div>

            <div class="form-group">

                <label class="col-md-6" for="attachment">Attach File (max size: 10MB)</label>

                <input class="col-md-6" type="file" name="attachment">

            </div>

            <input class="btn btn-warning form-control" type="submit" name="submit" value="REPORT" style="margin-top: 20px; color: white">

            <p style="padding-top: 20px">Our team will get back to you immediately we receive the crime details you provide</p>

        </form>

    </div>

    <?php include 'includes/footer.php'; ?>