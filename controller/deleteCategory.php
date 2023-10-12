<?php 
include '../database/env.php';

$id = $_REQUEST['id'] ;

$query = "DELETE FROM category WHERE id = '$id'";
$success = mysqli_query($conn,$query);
header("location: ../backend/AddCategory.php");