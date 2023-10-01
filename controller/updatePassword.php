<?php
session_start();
include '../database/env.php';
$id = $_SESSION['auth']['id'];
$oldPassword = $_REQUEST['oldPassword'];
$password = $_REQUEST['Password'];
$encPassword = password_hash($password, PASSWORD_BCRYPT);
$ConfirmPassword = $_REQUEST['ConfirmPassword'];

//Select user data form daatabes and fatch
$query = "SELECT * FROM usears WHERE id = '$id'";
$success = mysqli_query($conn,$query);
$userInfo = mysqli_fetch_assoc($success);
$passVerify = password_verify($oldPassword ,$userInfo['password']);
$errors = [];
if(empty($oldPassword)){
    $errors['oldError'] = "Enter old password";
}
if(empty($password)){
    $errors['passwordError'] = "Enter password";
}

if($passVerify){
    if($password == $ConfirmPassword){
        //password update
            $query = "UPDATE usears SET password='$encPassword' WHERE id = '$id'";
            $success = mysqli_query($conn,$query);
    }else{
        $errors['passwordError'] = "confirm password didnt match";
        $_SESSION['foromErrors'] = $errors;
        header('location:../backend/profile.php');
    }
}else{
    $errors['oldError'] = "old password did not match";
    $_SESSION['foromErrors'] = $errors;
    header('location:../backend/profile.php');
}