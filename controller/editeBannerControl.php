<?php
include '../database/env.php';
$id = $_REQUEST['id'];
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$cta_title = $_REQUEST['cta_title'];
$cta_link = $_REQUEST['cta_link'];
$video_link = $_REQUEST['video_link'];
$banner_img = $_FILES['banner_img'];
//*Extend image and give uniqe image name or creat stroge folder
$extension = pathinfo($banner_img['name'])['extension'];
$fileName = "Banner-". uniqid() . ".$extension";

// //*Delet old file
$query = "SELECT banner_img FROM banners WHERE $id = '$id'";
$result = mysqli_query($conn,$query);
$banner = mysqli_fetch_assoc($result);
$path = "../uploades/banner/".$banner['banner_img'];

if(file_exists($path)){
    unlink($path);
}
//*Update new file

//*cerat a folder for banner imge if folder is empty
$path = "../uploades/Banner";
$uplodeFile = move_uploaded_file($banner_img['tmp_name'], $path.'/'.$fileName);
if($uplodeFile){
    $query = "UPDATE banners SET title='$title',detail='$detail',cta_title='$cta_title',cta_link='$cta_link',video_link='$video_link',banner_img='$fileName',status='[value-8]' WHERE id='$id'";
    $success = mysqli_query($conn,$query);
    header('location:../backend/AllBanner.php');
}