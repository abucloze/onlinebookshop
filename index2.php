<?php

include 'everything.php';

session_start();
if(!isset($_SESSION['email'])){
    header("location:signup.php");
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
            <li><a href="index2.php" class="active">Home</a></li>
            <li><a href="index2.php?page_id=about">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="index2.php"><?=$_SESSION['fname'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="icons">
            <div class="bx bx-menu" id="menu-icon">

            </div>
        </div>

        
    </header>
     <!---body section-->
     <section class="home">
        <div class="home-text">
            <h4>Find the best revision materials</h4>
            <h1>Get brains</h1>
            <a href="userpdf.php" class="btn">Explore</a>
        </div>

        <div class="home-image">
            <img src="../img/pdf-icon.webp" alt="">
        </div>
     </section>
        <!---new pdfs-->
<section class="product">
    <div class="middle-text">
        <h2>New revision materials</h2>
    </div>
    <div class="product-content">
        <?php
        include 'config.php';
        

         $selectQuery = "select * from pdf_data";
         $squery = mysqli_query($conn, $selectQuery);
          while (($result = mysqli_fetch_assoc($squery))) {
            ?>
            <div class="box">
                <div class="box-img">
                    <a href="../pdf/<?php echo $result['filename']; ?>">
                        <img src="../img/pdf.png" alt="">
                        <h3><?php echo $result['filename']; ?></h3></a>
                </div>   
            </div>
          <?php
          };
          ?>
                          
            
           
           
    
       
         
     
 

    </div>
    <div class="pdf-upload">
         <a href="userpdf.php">Show All</a>
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
    <script src="https://unpkg.com/scrollreveal"></script>
    <script type="text/javascript" src="../js/script.js"></script>
   
</body>
</html>