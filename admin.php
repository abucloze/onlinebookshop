 <?php
 
 session_start();
 require_once 'config.php';

 if(isset($_POST['adminingia'])){
    $fname=$_POST['fname'] ;
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    


    $CheckEmail = $conn->query("SELECT email FROM users WHERE email= '$email'");
    if($CheckEmail->num_rows >0){
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    }else{
        $conn->query("INSERT INTO users (fname,lname,email,password,role) values ('$fname','$lname', '$email','$password','admin') ");
    }
    header("location:login.php");
    exit();

}

 ?>