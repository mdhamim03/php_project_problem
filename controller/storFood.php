<?php
include '../database/env.php';
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$price = $_REQUEST['price'];
$category = $_REQUEST['category'];
$banner_img = $_FILES['banner_img'];


//*Extend image and give uniqe image name or creat stroge folder
$extension = pathinfo($banner_img['name'])['extension'];
$fileName = "Food-". uniqid() . ".$extension";

//*cerat a folder for banner imge if folder is empty
$path = "../uploades/Food";
if(!is_dir($path)){ 
    mkdir($path);
}
$uplodeFile = move_uploaded_file($banner_img['tmp_name'], $path.'/'.$fileName);
if($uplodeFile){
    $query = "INSERT INTO food(title, detail, price, category_id, image) VALUES ('$title','$detail','$price','$category','$fileName')";
    $success = mysqli_query($conn,$query);
    header('location:../backend/AddFood.php');
}
