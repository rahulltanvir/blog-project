<?php
if(isset($_POST['add_cat'])){
   $catMsg= $adminLoginobj->addCategorydata($_POST);
}


?>


<h2>Add Category Page</h2>
<?php if(isset($catMsg)){ echo $catMsg; } ?>
<form class="form " action="" method="post">
    <label for="blogName">blog name</label>
    <input class="form form-control" type="text" name="cat_name" id="blogName">
    <label for="desBlog">Description</label>
    <input class="form form-control" type="text" name="cat_des" id="desBlog">

    <input class="btn btn-info" style="margin-top:20px;"  type="submit" name="add_cat" id="" value="Add Categoty">
</form>