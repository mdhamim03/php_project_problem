<?php
include '../database/env.php';
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$banner_img = $_FILES['banner_img'];
$VideoBanner_img = $_FILES['VideoBanner_img'];

//*Extend image and give uniqe image name or creat stroge folder
$BannerExtension = pathinfo($banner_img['name'])['extension'];
$VideoBannerExtension = pathinfo($VideoBanner_img['name'])['extension'];
$BannerExFileName = "About-". uniqid() . ".$BannerExtension";
$VideoExFileName = "About-". uniqid() . ".$VideoBannerExtension";

//*cerat a folder for banner imge if folder is empty
$path = "../uploades/About";
if(!is_dir($path)){
    mkdir($path);
}
$BannerUplodeFile = move_uploaded_file($banner_img['tmp_name'], $path.'/'.$BannerExFileName);
$VideoUplodeFile = move_uploaded_file($VideoBanner_img['tmp_name'], $path.'/'.$VideoExFileName);

if($BannerUplodeFile){
    if($VideoUplodeFile){
        $query = "INSERT INTO about(title, detail, banner_img, VideoBanner_img) VALUES ('$title','$detail','$BannerExFileName','$VideoExFileName')";
        $success = mysqli_query($conn,$query);
        header('location:../backend/AddAbout.php');
    }
    
}
