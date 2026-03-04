<?php
     $catMsg= $adminLoginobj->displayCat();
     if(isset($_POST['Add_post'])){
        $addPost_msg=$adminLoginobj->addPost($_POST);
     }

?>

<h2><a style="text-decoration: none;" href="add_post.php">Add Post Page</a></h2> 
<?php if(isset($addPost_msg)){ echo $addPost_msg; } ?>

<form class="form " action="" method="post" enctype="multipart/form-data">
    <div class=" form-group ">
        <label for="">Upload Image:</label><Br>
        <input type="file" name="post_img" id="">
    </div>
    <div class=" form-group ">
        <label for="">Post Title:</label><Br>
        <input class="form-control" type="text" name="post_title" id="">
    </div>
    <div class=" form-group ">
        <label for="">Post Content:</label><Br>
        <textarea class="form-control" name="post_content" id=""></textarea>
    </div>
    <div class=" form-group ">
        <label for="">Post Category:</label><Br>
        <select class="form-control" name="post_ctg" id="">
            <?php while($catMsg_f=mysqli_fetch_assoc($catMsg)){ ?>
            <option value="<?php echo $catMsg_f['cat_id'] ?>">
                <?php echo $catMsg_f['cat_name'] ?>
            </option>
            <?php } ?>
        </select>
        
    </div>
    <div class=" form-group ">
        <label for="">Post Summary:</label><Br>
        <input class="form-control" type="text" name="post_summary" id="">
    </div>
    <div class=" form-group ">
        <label for="">Post Tag:</label><Br>
        <input class="form-control" type="text" name="post_tag" id="">
    </div>
     <div class=" form-group ">
        <label for="">Post Status:</label><Br>
        <select class="form-control" name="post_status" id="">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
    <button type="submit" class="form-control btn btn-primary" name="Add_post" >Add Post</button>
</form>