<?php 
$discat=$adminLoginobj->displayCat();


?>


<h2>Manage Category Page</h2>
<div class="container my-4 p-4 shadow">
        <table class="table">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($DiscatFet=mysqli_fetch_assoc($discat)){ ?>
            <tr>
                <td><?php echo  $DiscatFet['cat_name']; ?></td>
                <td style="width:500px"><?php echo  $DiscatFet['cat_des']; ?></td>
                <td>
                    <a class="btn btn-success" href="edit_cat.php?status=edit&&id=<?php echo  $DiscatFet['cat_id']; ?>">Edit</a>
                    <a class="btn btn-warning" href="">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>