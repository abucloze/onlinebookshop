<?php
include 'config.php'; 
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
            <li><a href="adminpage.php"><?=$_SESSION['fname'];?></a></li>
            <li><a href="logout.php">Logout</a></li>

        </ul>
        <div class="icons">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

        
    </header>

         <section class="home">

     
        <div class="home-image">
            <img src="../img/pdf-icon.webp" alt="">
        </div>

          <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <strong>Fill Unit Code and Upload PDF</strong>
                <form method="post" enctype="multipart/form-data">
                    <?php
                        // If submit button is clicked
                        if (isset($_POST['submit']))
                        {
                          // get name from the form when submitted
                          $name = $_POST['name']; 
                          $time_stamp= date('Y-m-d H:i:s');                 

                          if (isset($_FILES['pdf_file']['name'])) 
                          {   
                          // If the ‘pdf_file’ field has an attachment
                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                            
                            // Move the uploaded pdf file into the pdf folder
                            move_uploaded_file($file_tmp,"../pdf/".$file_name);
                            // Insert the submitted data from the form into the table
                            $insertquery = 
                            "INSERT INTO pdf_data(username,filename,time_stamp) VALUES('$name','$file_name','$time_stamp')";
                            
                            // Execute insert query
                            $iquery = mysqli_query($conn, $insertquery);      

                                if ($iquery)
                               {    
                                                        
                    ?>                                              
                                  <div class=
                                "alert alert-success alert-dismissible fade show text-center">
                                    <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                    </a>
                                    <strong>Success!</strong> Data submitted successfully.
                                  </div>
                                <?php
                              
                                }
                                else
                                {
                                ?>
                                  <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                    <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                    </a>
                                    <strong>Failed!</strong> Try Again!
                                  </div>
                                <?php
                                }
                            }
                            else
                            {
                              ?>
                                <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                  <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                  </a>
                                  <strong>Failed!</strong> File must be uploaded in PDF format!
                                </div>
                              <?php
                            }// end if
                        }// end if
                    ?> 
                    
                    <div class="form-input py-2">
                        <div class="form-group">
                            <input type="text" class="form-control" 
                                   placeholder="Enter Unit Code" name="name">
                        </div>                                  
                        <div class="form-group">
                            <input type="file" name="pdf_file" 
                                   class="form-control" accept=".pdf" required/>
                        </div>
                        <div class="form-group">
                          <button type="submit" Name="submit">UPLOAD</button>
                           
                        </div>
                    </div>
                </form>
            </div>
 
         
     </section>



                
            
            
</body>
</html>