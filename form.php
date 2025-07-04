<?php
include_once('connect.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sample Form</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container p-5">
            <h2 class="text-center">Sample Form</h2>
            <form class="form-control" action="insert.php" method="post">
                <div class="row p-5">
                    <div class="col-4" id="start">
                        <label class="p-1" for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your Full Name"required>

                        <label class="p-1" for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email"required>
                    </div>
                    <div class="col-4" id="end">
                        <label class="p-1" for="number">Contact Number</label>
                        <input type="number" class="form-control" name="number" placeholder="Enter your phone number"required>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-content-center">
                    <button type="submit" class=" w-auto mb-3 btn btn-primary">Submit</button>
                </div>
                <div  class="row">
                    <div id="button-2" class="col"><a  href="index.php" class="btn btn-primary">Go Back</a></div>
                </div>
            </form>
        </div>
    </body>
</html>

