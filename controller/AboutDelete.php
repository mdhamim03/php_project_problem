<?php 
include '../database/env.php';

$id = $_REQUEST['id'] ;
$query = "SELECT banner_img,VideoBanner_img FROM about WHERE $id = '$id'";
$result = mysqli_query($conn,$query);
$banner_img = mysqli_fetch_assoc($result);
$path = "../uploades/About/".$banner_img['banner_img'];
$pathTwo = "../uploades/About/".$banner_img['banner_img'];

if(file_exists($path)){
    unlink($path);
}
if(file_exists($pathTwo)){
    unlink($pathTwo);
}

$query = "DELETE FROM about WHERE id = '$id'";
$success = mysqli_query($conn,$query);
header("location: ../backend/AllAbout.php");