<?php
session_start();
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];
$encPassword = password_hash($password, PASSWORD_BCRYPT);
$errors = [];

if(empty($name)){
    $errors['name_error']='Enter Your Name';
}
if(empty($email)){
    $errors['email_error'] = 'Enter your email';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] = 'Enter a validate email';
}
if(empty($password)){
    $errors['password_error'] = 'Enter Your Password';
}elseif(strlen($password)<8){
    $errors['password_error'] = 'password must be use 8 char';
}elseif($password != $confirmPassword){
    $errors['password_error'] = 'Confirm passwoed not match';
}
if(count($errors)>0){
    $_SESSION["register_error"]=$errors;
    header('location:../register.php');
}else{
    include '../database/env.php';
    $query = "INSERT INTO usears(name, email, password) VALUES ('$name','$email','$encPassword')";
    $sucess = mysqli_query($conn,$query);
}
if($sucess){
    header('location:../login.php');
}
