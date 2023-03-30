<?php
include "db.php";

if (isset($_POST["submit"]))
{
    $username = mysqli_real_escape_string($con, $_POST["fname"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $contact_no = mysqli_real_escape_string($con, $_POST["contact"]);
    $password = mysqli_real_escape_string($con, $_POST["pwd"]);
    $cpassword = mysqli_real_escape_string($con, $_POST["cpwd"]);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $email_query = "select * from email_val where email = '$email'";
    $query = mysqli_query($con, $email_query);

    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0)
    {
        echo "Email already exist";
    }
    else
    {
        if($password === $cpassword)
        {
            $insertquery = "INSERT INTO `email_val`(`fullname`, `email`, `phone`, `password`, `confirm_password`)
             VALUES ('$username','$email','$contact_no','$pass','$cpass')";

             $iquery = mysqli_query($con, $insertquery);

             if ($iquery)
            {
                ?>
                <script>
                    alert ("Data inserted successfully");
                </script>
                <?php
            } else{
                ?>
                <script>
                    alert ("Data not inserted");
                </script>
                <?php
            }
        }
        else
        {
            echo "Password is no matching";
        }
    }
}
?>