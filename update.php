<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <?php include 'links/links.php'?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-center"><strong>Create Account</strong></h1>
                <p class="text-center">Get started with your free account</p>

                <div class="main_btnclass d-flex justify-content-between">
                    <div class="link_btn">
                        <button class="btn btn-danger"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Login via Gmail</a></button>
                    </div>

                    <div class="link_btn">
                        &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;&nbsp;Login via facebook</a></button>
                    </div>
                </div>
                
                <hr>

                <div class="form_data">
                    <form action="" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="name"><strong>Full Name:</strong></label>
                            <input type="text" class="form-control" id="name" placeholder="Enter full name" name="fname">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email"><strong>Email:</strong></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="contact"><strong>Contact No.</strong></label>
                            <input type="text" class="form-control" id="contact" placeholder="Enter Phone Number" name="contact">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password"><strong>Password</strong></label>
                            <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pwd">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password"><strong>Confirm Password</strong></label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter Confirm Password" name="cpwd">
                        </div>
                        <div class="mb-3 mt-3">
                            <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                            <button type="submit" class="btn btn-success"><a class="display" href="display.php">Display</a></button>
                        </div>
                    </form>

                    <div class="log_link">
                        <p>Have an account <a href="#">log in</a></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <?php
        include "db.php";

        if (isset($_POST["submit"])) 
        {
            $id = mysqli_real_escape_string($con, $_GET["id"]);
            $username = mysqli_real_escape_string($con, $_POST["fname"]);
            $email = mysqli_real_escape_string($con, $_POST["email"]);
            $contact_no = mysqli_real_escape_string($con, $_POST["contact"]);
            $password = mysqli_real_escape_string($con, $_POST["pwd"]);
            $cpassword = mysqli_real_escape_string($con, $_POST["cpwd"]);

            $pass = password_hash($password, PASSWORD_BCRYPT);
            $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

            $updatequery = "UPDATE `email_val` SET `id`= '$id',`fullname`='$username',`email`='$email',
            `phone`='$contact_no',`password`='$pass',`confirm_password`='$cpass' WHERE id = $id";

            mysqli_query($con, $updatequery);

            header('location:display.php');
        }    
    ?>

</body>
</html>