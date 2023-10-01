<?php
include '../database/env.php';
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$cta_title = $_REQUEST['cta_title'];
$cta_link = $_REQUEST['cta_link'];
$video_link = $_REQUEST['video_link'];
$banner_img = $_FILES['banner_img'];
//*Extend image and give uniqe image name or creat stroge folder
$extension = pathinfo($banner_img['name'])['extension'];
$fileName = "Banner-". uniqid() . ".$extension";
//*cerat a folder for banner imge if folder is empty
$path = "../uploades/Banner";
if(!is_dir($path)){
    mkdir($path);
}
$uplodeFile = move_uploaded_file($banner_img['tmp_name'], $path.'/'.$fileName);
if($uplodeFile){
    $query = "INSERT INTO banners(title, detail, cta_title, cta_link, video_link, banner_img) VALUES ('$title','$detail','$cta_title','$cta_link','$video_link','$fileName')";
    $success = mysqli_query($conn,$query);
    header('location:../backend/AddBanner.php');
}