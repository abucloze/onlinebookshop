<?php

session_start();
if(isset($_SESSION['email'])){
    header("location:index2.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classy Units</title>
    <link rel="stylesheet" href="../css/style.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
 
</head>
<body>
    <header>
        <a href="" class="logo"><h2>Classy</h2></a>
        <ul class="navbar">
            <li><a href="../index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <div class="icons">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

        
    </header>
     <!---body section-->
     <section class="login">
        <div class="login-text">
            <form action="register.php" method="post">
            <h4>Signup</h4>
           
            First Name:
            <input type="text" name="fname" id="" placeholder="Enter your first name" required>
            Last Name:
            <input type="text" name="lname" id="" placeholder="Enter your last name" required>
            Email:
            <input type="email" name="email" id="" placeholder="Enter your email" required>
            Password:
            <input type="password" name="password" id="" placeholder="Enter your password" required>

            <button type="submit" name="register">Signup</button>
            <p>Dont have an account?<a href="login.php">Login</a></p>
            </form>
            
        </div>

     
     </section>
   
        <!---footer-->
        <section class="contact">
            <div class="main-contact">
                <div class="contact-content">
                    <h5>Getting started</h5>
                    <li><a href="">Support</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About</a></li>
                </div>
                <div class="contact-content">
                    <h5>Explore</h5>
                    <li><a href="">Support</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="adminsignup.php">Become Admin</a></li>
                </div>
            </div>

        </section>

        <div class="end-text">
            <p>@2025 All Rights Reserved by Abraham Kibichii</p>
        </div>



    <!---js link-->
    <script type="text/javascript" src="../js/script.js"></script>
    
</body>
</html>