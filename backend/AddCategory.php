<?php
include './backend_inc/backendHeader.php';
include '../database/env.php';
$query = "SELECT * FROM category";
$success = mysqli_query($conn,$query);
$categories = mysqli_fetch_all($success,1);
?>
    <div class="card">
        <div class="card-header">
            <h3>AddCategory</h3>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        foreach($categories as $key=>$category){
                            ?>
                                 <tr>
                                    <td><?=++$key?></td>
                                    <td><?=$category['title']?></td>
                                    <td><a href="../controller/deleteCategory.php?id=<?=$category['id']?>" class="btn btn-sm btn-danger">Delete</a></td>
                                </tr>
                            <?php
                        }
                    ?>
                   
                </table>
            </div>
            <div class="col-lg-4">
                <form action="../controller/AddCategoty.php" method="POST">
                    <input name="title" type="text" class="form-control mt-3" placeholder="title">
                    <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
<?php
include './backend_inc/backendFooter.php';
?>