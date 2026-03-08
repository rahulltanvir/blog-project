<?php

    if(isset($_GET['status'])){
        if($_GET['status']='edit'){
            $editDataid=$_GET['cat_id'];
            $accEditCat=$adminLoginobj->editCat($editDataid);
        }
    }


?>

<h2>Edit Category</h2>

<form class="form " action="" method="post">
    <label for="blogName">Update blog name</label>
    <input class="form form-control" type="text" name="upcat_name" id="blogName" value="<?php echo  $accEditCat['cat_name']; ?>">
    <label for="desBlog">Update Description</label>
    <input class="form form-control" type="text" name="upcat_des" id="desBlog" value="<?php echo  $accEditCat['cat_des']; ?>">
    <input type="hidden" name="cat_id" value="<?php echo  $accEditCat['cat_id']; ?>">

    <input class="btn btn-info" style="margin-top:20px;"  type="submit" name="update_cat" id="" value="Update Categoty">
</form>