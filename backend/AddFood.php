<?php
include './backend_inc/backendHeader.php';
include '../database/env.php';
$query = "SELECT * FROM category";
$success = mysqli_query($conn,$query);
$categories = mysqli_fetch_all($success,1);
?>
    <div class="card">
        <div class="card-header">
            <h3>AddFood</h3>
        </div>
        <div class="card-body">
            <form action="../controller/storFood.php" method="POST" enctype="multipart/form-data">
                <input name="title" type="text" class="form-control mt-3" placeholder="title">
                <input name="detail" type="text" class="form-control mt-3" placeholder="detail">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col mx-2"><input name="price" type="text" class="form-control mt-3" placeholder="price"></div>
                        <div class="col mx-2">
                            <select name="category" class="form-control">
                                <?php
                                    foreach($categories as $key=>$category){
                                        ?>
                                            <option value="<?=$category['id']?>"><?=$category['title']?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>

                </div>
                <input name="banner_img" type="file" class="form-control mt-3" placeholder="banner_img">
                <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Submit</button>
            </form>
        </div>
    </div>
<?php
include './backend_inc/backendFooter.php';
?>