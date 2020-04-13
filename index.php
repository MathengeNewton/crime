<?php include 'includes/header.php';

include 'connection.php';


$page = "report_crime";
?>

<body>

    <div id="content" class="container center">

        <h4 style="color:red;">Report a Crime now</h4>

        <hr />

        <form class="center" action="post.php" method="post" enctype="multipart/form-data">

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

           

            <input class="btn btn-warning form-control" type="submit" name="submit" value="REPORT" style="margin-top: 20px; color: white">

            <p style="padding-top: 20px">Our team will get back to you immediately we receive the crime details you provide</p>

        </form>

    </div>

    <?php include 'includes/footer.php'; ?>