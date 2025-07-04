    <?php
    require_once('connect.php');
    $id=$_REQUEST['id'];
    $obj=new connect();
    $conn=$obj->getConnection();
    $sql ="SELECT * FROM INFORMATION WHERE id='$id'";

    $result=$conn-> query($sql);
    if($result->num_rows>0){
        while($row=$result-> fetch_assoc())
            {
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $number=$row['number'];
            }
    }
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
        <div class="container w-50">
            <h1 class="py-5 my-3" > Edit Details </h1>
            <form action="edit.php" method="post">
                <div class="row">
                    <label class="p-1" for="id">ID</label>
                    <input class="form-control" type="number" name="id" value= "<?php echo $id;?>" readonly>
                </div>
                <div class="row"><label class="p-1" for="name">Name</label>
                    <input class="form-control" type="text" name="name" value= "<?php echo $name;?> " required ></div>
                <div class="row"><label class="p-1" for="email">Email</label>
                    <input class="form-control" type="email" name="email" value= "<?php echo $email;?> " required ></div>
                <div class="row"><label class="p-1" for="number">Number</label>
                    <input class="form-control" type="number" name="number" value= "<?php echo $number;?>" required ></div>

                <div class="row d-flex justify-content-center align-content-center">
                    <button type="submit" class=" w-auto my-3 btn btn-primary">Submit</button>
                </div>
            </form>
            <div  class="row">
                    <div id="button-2" class="col"><a  href="index.php" class="btn btn-primary">Go Back</a></div>
                </div>
        </div>
    </body>
</html>