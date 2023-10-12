<?php
include '../database/env.php';
$title = $_REQUEST['title'];

$query = "INSERT INTO category(title) VALUES ('$title')";
$success = mysqli_query($conn,$query);
if ($success){
    header('location:../backend/AddCategory.php');
}
