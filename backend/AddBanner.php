<?php
include './backend_inc/backendHeader.php';
?>
    <div class="card">
        <div class="card-header">
            <h3>AddBanner</h3>
        </div>
        <div class="card-body">
            <form action="../controller/storeBanner.php" method="POST" enctype="multipart/form-data">
                <input name="title" type="text" class="form-control mt-3" placeholder="title">
                <input name="detail" type="text" class="form-control mt-3" placeholder="detail">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="mx-2"><input name="cta_title" type="text" class="form-control mt-3" placeholder="cta_title"></div>
                        <div class="mx-2"><input name="cta_link" type="text" class="form-control mt-3" placeholder="cta_link"></div>
                        <div class="mx-2"><input name="video_link" type="text" class="form-control mt-3" placeholder="video_link"></div>
                </div>
                <input name="banner_img" type="file" class="form-control mt-3" placeholder="banner_img">
                <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Submit</button>
            </form>
        </div>
    </div>
<?php
include './backend_inc/backendFooter.php';
?>