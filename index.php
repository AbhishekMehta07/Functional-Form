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
        <div class="container mt-5">
            <form action="search.php" method="get">
                <div class="input-group w-50">
                    <input class="form-control mb-4" type="text" name="search" placeholder="Search Name">
                    <button type="submit" class="btn btn-dark">Find</button>
                </div>
            </form>
            <div class="row table-responsive">
                <table class="table text-center table-hover table-dark table-striped table-bordered">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>number</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $sql="SELECT * FROM information"; 
                        $objc=new connect();
                        $conn=$objc->getConnection();
                        $result=$conn-> query($sql);
                        if($result->num_rows>0){
                            while($row=$result-> fetch_assoc()){
                                echo"<tr><td>".$row["id"]."</td>"."<td>".$row["name"]."</td>".
                                 "<td>".$row["email"]."</td>"."<td>".$row["number"]."</td>".
                                 "<td><a class='bg-success' href='newValues.php?id=" . $row["id"] . "'>Update</a> <a class='bg-danger' href='confirm.php?id=" . $row["id"] . "'><i>Delete</i></a> </td></tr>";
                            }
                        }
                    ?>
                </table>
                <div  class="row">
                    <div id="button-2" class="col"><a  href="form.php" class="btn btn-primary">Fill Form</a></div>
                </div>
            </div>
        </div>
    </body>
</html>