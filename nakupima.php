<?php
 session_start();
 require_once 'config.php';

if(isset($_POST['ingia'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if($result->num_rows >0){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])){
        $_SESSION['fname']=$user['fname'];
        $_SESSION['email']=$user['email'];

        if($user['role'] === 'user'){
            header("location:index2.php");

        }else{
            header("location:adminpage.php");
 
        }
        exit();
    }
}

   $_SESSION['login_error']= 'Incorrect email or password';
   $_SESSION['active_form']='login';
   header("location:login.php");
   exit();

}
?>