<?php

    $postData=$adminLoginobj->displayPost();

?>

<h2>Manage Post Page</h2>
<div class="container my-4 p-4 shadow">
    <table class="table">
        <thead>
            <th>Post Title</th>
            <th>Post Category</th>
            <th>Post Tag</th>
            <th>Post Image</th>
            <th>Post Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while($postData_f=mysqli_fetch_assoc($postData)){ ?>
            <tr>
                <td><?php echo $postData_f['post_title']; ?></td>
                <td><?php echo $postData_f['cat_name']; ?></td>
                <td><?php echo $postData_f['post_tag']; ?></td>
                <td><img style="width:50px;" src="../image/<?php echo $postData_f['post_img']; ?>" alt="image"></td>
                <td><?php  if($postData_f['post_status']==1){
                    echo "Published";
                }else{
                    echo "Unpublished";
                }
                
                ?></td>
                <td>
                    <a href="edit_post.php?status=edit&&id=<?php echo $postData_f['post_id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
