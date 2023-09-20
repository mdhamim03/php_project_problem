<?php
session_start();
include '../database/env.php';

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $errors = [];

    if(empty($email)){
        $errors['email_error'] = 'enter your email';
    }
    if(empty($password)){
        $errors['password_error'] = 'enter your password';
    }

    if(count($errors)>0){
        $_SESSION["login_error"]=$errors;
        header("Location: ../login.php");
    }else{
                            $query = "SELECT * FROM usears WHERE email = '$email'";
                            $result = mysqli_query($conn,$query);
                            $data = mysqli_fetch_assoc($result);
                            

                                if(mysqli_num_rows($result) > 0){
                                    $currectPassword = password_verify($password,$data['password']);

                                    if($currectPassword){
                                        $_SESSION['auth'] = $data;
                                        header("Location: ../backend/index.php");
                                    }else{
                                        $error['password_error'] = 'Wrong password';
                                        $_SESSION['login_error'] = $error;
                                        header("Location: ../login.php");

                                    }
                                }else{
                                    $error['email_error'] = 'wrong email address';
                                    $_SESSION['login_error'] = $error; 
                                    header("Location: ../login.php");
                            }


         }
       

?>