<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=League+Spartan:wght@300&family=Oswald&family=Poppins:ital@1&family=Ubuntu:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="" target="_blank">My Website</a>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>

            <div class="contact_btn">
                <a href="#">CONTACT US&nbsp;&nbsp;<i class="fa fa-smile-o" aria-hidden="true"></i></a>
            </div>
        </nav>

        <div class="center_content">
            <h1>Hello This Is <?php echo $_SESSION['username'];?></h1>
            <h2>Developer / Full Stack Developer</h2>
        </div>

        <div class="social_network">
            <div class="fa_icons">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <div class="fa_icons">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="fa_icons">
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
            <div class="fa_icons">
                <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- <div class="grid_sec">
            <img src="dots.png" alt="">
        </div> -->
    </header>
</body>
</html>