<?php
include "db.php";

$id = $_GET['id'];

$delquery = "DELETE FROM `email_val` WHERE id = $id";

mysqli_query($con, $delquery);

header('location:display.php');
?>