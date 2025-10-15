<?php

session_start();
if(!isset($_SESSION['email'])){
    header("location:index.php");
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
            <li><a href="adminpage.php" class="active">Home</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="pdf.php">pdfs</a></li>
            <li><a href="setting.php">settings</a></li>
            <li><a href="login.php"><?=$_SESSION['fname'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="icons">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

        
    </header>
     <!---body section-->
     <section class="kazi">
   <div class="pdf-upload">
        <h2>ALL USERS</h2>
        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>User Name</th>
                    <th>Email</th> 
                </tr>
            </thead>
            <tbody>
           <?php
              include 'config.php';
              
                              $selectQuery = "select * from users";
                              $squery = mysqli_query($conn, $selectQuery);

                              while (($result = mysqli_fetch_assoc($squery))) {
                          ?>
                          <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['fname']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                           
                          </tr>
                          <?php
                               }
                          ?>
           
            </tbody>
        </table>

         <!---need this to retrieve database users and put it to pdf-->
        <a href="">Show All</a>
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
                    <li><a href="uploadpage.php">UPLOAD</a></li>
                </div>
            </div>

        </section>

        <div class="end-text">
            <p>@2025 All Rights Reserved by Abraham Kibichii</p>
        </div>



    <!---js link-->
    <script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>