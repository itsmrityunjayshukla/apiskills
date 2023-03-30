<?php 
    session_start();
?>
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
    <?php
        include "db.php";

        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = $_POST['pwd'];

            $email_search = "SELECT * FROM `email_val` WHERE email = '$email'";
            $query = mysqli_query($con, $email_search);

            $email_count = mysqli_num_rows($query);

            if($email_count)
            {
                $email_pass = mysqli_fetch_assoc($query);

                $db_pass = $email_pass['password'];

                $_SESSION['username'] = $email_pass['fullname'];

                $pass_decode = password_verify($password, $db_pass);

                if($pass_decode)
                {
                     ?>
                    echo "login successfully";

                    <script>
                        location.replace("front.php");
                    </script>

                    <?php
                }
                else
                {
                    echo "Please check your password";
                }
            }
            else
                {
                    echo "Enter correct email";
                }
        }
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-center"><strong>Login Your Account</strong></h1>
                <p class="text-center">Get started</p>

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
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
                        
                        <div class="mb-3 mt-3">
                            <label for="email"><strong>Email:</strong></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email">
                        </div>
                        
                        <div class="mb-3 mt-3">
                            <label for="password"><strong>Password</strong></label>
                            <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pwd">
                        </div>
                        
                        <div class="mb-3 mt-3">
                            <button type="submit" name="submit" class="btn btn-primary">login</button>
                            <!-- <button type="submit" class="btn btn-success"><a class="display" href="display.php">Display</a></button> -->
                        </div>
                    </form>

                    <div class="log_link">
                        <p>Don't have an account? <a href="#">Sign Up Here</a></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>