<?php
include './backend_inc/backendHeader.php';
include '../database/env.php';
 $query = "SELECT * FROM about";
 $succes = mysqli_query($conn,$query);
 $banners = mysqli_fetch_all($succes,1);
 ?>
    <div class="card">
        <div class="card-header">
            <h3>All About</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Video Img</th>
                    <th>Title</th>
                    <th>Detail</th>
                    <th>Status</th>
                    <th>Acton</th>
                </tr>
                <?php
                    foreach ($banners as $key=>$banner){
                        ?>
                        <tr>
                            <td><?=++$key?></td>
                            <td>
                                <img src="../uploades/About/<?=$banner['banner_img']?>" style="width:80px" alt=""> 
                            </td>
                            <td>
                                <img src="../uploades/About/<?=$banner['VideoBanner_img']?>" style="width:80px" alt=""> 
                            </td>
                            <td><?=$banner['title']?></td>
                            <td><?=$banner['detail']?></td>
                            <td>
                                <a href="../controller/AboutStatus.php?id=<?=$banner['id']?>">
                                    <span class="text-danger">
                                        <i class="<?=$banner['status'] == 1 ? 'fa-solid' : 'fa-regular'?> fa-star"></i>
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="./AboutEdit.php?id=<?=$banner['id']?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="../controller/AboutDelete.php?id=<?=$banner['id']?>" class="btn btn-sm btn-danger AdeleteBtn">Delete</a>
                            </td>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
<?php
include './backend_inc/backendFooter.php';
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.AdeleteBtn').click(function(event){
        event.preventDefault()
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).attr('href');
            }
            })
    })
</script>