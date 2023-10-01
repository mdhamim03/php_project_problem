<?php 
include '../database/env.php';

$id = $_REQUEST['id'] ;
$query = "SELECT banner_img FROM banners WHERE $id = '$id'";
$result = mysqli_query($conn,$query);
$banner_img = mysqli_fetch_assoc($result);
$path = "../uploades/banner/".$banner_img['banner_img'];

if(file_exists($path)){
    unlink($path);
}

$query = "DELETE FROM banners WHERE id = '$id'";
$success = mysqli_query($conn,$query);
header("location: ../backend/AllBanner.php");