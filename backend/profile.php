<?php
include './backend_inc/backendHeader.php';
?>

<div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">
                            <h3 class="f_s_25 f_w_700 dark_text mr_30" >Profile</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">Analytic</li>
                            </ol>
                        </div>
                        <div class="page_title_right">
                            <div class="page_date_button d-flex align-items-center"> 
                                <img src="img/icon/calender_icon.svg" alt="">
                                August 1, 2020 - August 31, 2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile from -->
            <div class="row">
                        
                <div class="col-lg-8">
                    <form action="../controller/profileUpdate.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="profileImage">
                                    <img style="width: 250px; height:300px;"  src="<?= isset($_SESSION['auth']['profile_img']) ? "../uploades/user/".$_SESSION['auth']['profile_img'] : "https://api.dicebear.com/7.x/initials/svg?seed=<?=" .$_SESSION['auth']['name']?> " alt="#" class="profile_image">
                                </label>
                                <input  type="file" name="profileImg" id="profileImage" class="select_profile_img">
                            </div>
                            <div class="col-lg-8">
                                
                                    <input type="text" name="name" value="<?=$_SESSION['auth']['name']?>" class="form-control mt-4">
                                    <input type="text" name="email" value="<?=$_SESSION['auth']['email']?>" class="form-control mt-4">
                                    <button class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                <form action="../controller/updatePassword.php" method="POST">
                            <input type="text" name="oldPassword" placeholder="Old Password" class="form-control mt-4">
                            <span class="text-danger"><?= isset($_SESSION['foromErrors']['oldError']) ? $_SESSION['foromErrors']['oldError'] : ''?></span>
                            <input type="text" name="Password" placeholder="New Password" class="form-control mt-4">
                            <span class="text-danger"><?= isset($_SESSION['foromErrors']['passwordError']) ? $_SESSION['foromErrors']['passwordError'] : ''?></span>
                            <input type="text" name="ConfirmPassword" placeholder="Confirm Password" class="form-control mt-4">
                            <button class="btn btn-primary btn-sm">Update</button>

                        </form>
                </div>
            </div>


<?php
include './backend_inc/backendFooter.php';
unset($_SESSION['foromErrors']);
?>
<script>
    let profileInput = document.querySelector('.select_profile_img')
    let profileImage = document.querySelector('.profile_image')

    function updateImage(event){
        let url = URL.createObjectURL(event.target.files[0])
        profileImage.src = url
    }
    profileInput.addEventListener('change',updateImage)


</script>