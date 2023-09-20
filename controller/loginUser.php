<?php
session_start();
include '../database/env.php';

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $error = [];
    if(empty($email)){
        $error['email_error'] = 'enter your email';
    }
    if(empty($password)){
        $error['password_error'] = 'enter your password';
    }
    if(count($error)>0){
        $_SESSION["login_error"]=$error;
        
        header("Location: ../../index.php");
    }else{
        $query = "SELECT * FROM usears WHERE email = '$email'";
        $fatch = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($fatch);
        

            if(mysqli_num_rows($fatch) > 0){
                $currectPassword = password_verify($password,$data['password']);

                if($currectPassword){
                    header("Location: ../backend/index.php");
                }
            }else{
                $error['email_error'] = 'wrong email address';
                $_SESSION['loginError'] = $error; 
                header("Location: ../login.php");
        }


         }
       

?>