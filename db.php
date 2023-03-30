<?php
$servername = "localhost";
$hostname = "root";
$password = "";
$dbname= "signup";
$con = mysqli_connect($servername,$hostname,$password,$dbname);

if ($con)
{
    ?>
    <script>
        alert ("connection successfully");
    </script>
    <?php
} else{
    ?>
    <script>
        alert ("no connection");
    </script>
    <?php
}
?>