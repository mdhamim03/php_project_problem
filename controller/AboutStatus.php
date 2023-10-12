<?php
include '../database/env.php';

$id = $_REQUEST['id'];

$query = "UPDATE about SET status = 0";
$result = mysqli_query($conn,$query);

$query = "UPDATE about SET status = 1 WHERE id = '$id'";
$reselt = mysqli_query($conn,$query);
header("location:../backend/AllAbout.php");
