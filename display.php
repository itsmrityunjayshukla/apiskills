<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Database Table</title>
    <?php include 'links/links.php'?>
    <!-- <link rel=stylesheet href="css/style.css"> -->
</head>
<body>
<div class="container">
        <div class="row">
            <!-- <div class="col-md-3"></div> -->
            <div class="col-md-12">
                <div class="head">
                    <h1 class="text-center bg-dark text-white ">Check Exist Data In Database</h1>
                </div>
                <br>
                <div class="table-responsive col-md-12 m-auto d-block">
                    <table class="table table-bordered table-striped table-hover text-center">
                        <thead class="bg-dark text-white">
                            <th>ID</th>
                            <th>USER NAME</th>
                            <th>EMAIL</th>
                            <th>CONTACT NO.</th>
                            <th>PASSWORD</th>
                            <th>CONFIRM PASSWORD</th>
                            <th colspan=2>ACTION</th>
                        </thead>
                        <tbody>
                            <?php
                                include "db.php";
                                $selectquery = "SELECT * FROM `email_val`";
                                $query = mysqli_query($con, $selectquery);
                                while($result = mysqli_fetch_array($query))
                                {
                                  ?>
                                  <tr>
                                        <td>
                                            <?php echo $result['id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['fullname']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['phone']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['password']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['confirm_password']; ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger"><a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white">Delete</a></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary"><a href="update.php?id=<?php echo $result['id']; ?>"class="text-white">Update</a></button>
                                        </td>
                                  </tr>
                             <?php       
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="col-md-3"></div> -->
        </div>
    </div>
</body>
</html>