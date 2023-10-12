<?php
include './backend_inc/backendHeader.php';
?>
    <div class="card">
        <div class="card-header">
            <h3>Add About</h3>
        </div>
        <div class="card-body">
            <form action="../controller/AddAboutContro.php" method="POST" enctype="multipart/form-data">
                <input name="title" type="text" class="form-control mt-3" placeholder="title">
                <input name="detail" type="text" class="form-control mt-3" placeholder="detail">
                <input name="banner_img" type="file" class="form-control mt-3" placeholder="banner_img">
                <input name="VideoBanner_img" type="file" class="form-control mt-3" placeholder="VideoBanner_img">
                <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Submit</button>
            </form>
        </div>
    </div>
<?php
include './backend_inc/backendFooter.php';
?>