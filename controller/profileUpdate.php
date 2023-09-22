<?php
session_start();
include "../database/env.php";
$id = $_SESSION['auth']['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$profileImg = $_FILES['profileImg'];
$errors = [];
$acceptedTypes = ['jpg','png'];

$extention = pathinfo($profileImg['name'])['extension'];
if($profileImg['size'] == 0){
    $errors['profile_image_error'] = 'Enter your profile image';
}
if(!in_array($extention,$acceptedTypes)){
    $errors['profile_image_error'] = 'Suport only jpg and png';
}
if($profileImg['size'] > 50000){
    $errors['profile_image_error'] = 'Suport only 3 Mb image';
}
//update

if(count($errors) >0){
    //MOVE UOLODED FILE
    $fileName = "User-".uniqid().".$extention";
    if(!is_dir("../uploades/user")){
        mkdir("../uploades/user");
    }
    $uplodedFiles = move_uploaded_file($profileImg['tmp_name'],"../uploades/user/$fileName");
    if($uplodedFiles){
    $query = "UPDATE usears SET name='$name',email='$email',profile_img='$fileName' WHERE id = '$id'";
    $updateSucess = mysqli_query($conn,$query);
    //session update
    $_SESSION['auth']['name'] = $name;
    $_SESSION['auth']['email'] = $email;
    $_SESSION['auth']['profile'] = $fileName;
    header('location:../backend/profile.php');
    }

}else{
    header('location:../backend/profile.php');
}