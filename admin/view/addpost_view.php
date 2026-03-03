<?php
     $catMsg= $adminLoginobj->displayCat();

?>

<h2>Add Post Page</h2>

<form class="form " action="" method="post">
    <div class=" form-group ">
        <label for="">Upload Image:</label><Br>
        <input type="file" name="" id="">
    </div>
    <div class=" form-group ">
        <label for="">Post Title:</label><Br>
        <input class="form-control" type="text" name="Post_title" id="">
    </div>
    <div class=" form-group ">
        <label for="">Post Content:</label><Br>
        <textarea class="form-control" name="" id=""></textarea>
    </div>
    <div class=" form-group ">
        <label for="">Post Category:</label><Br>
        <select class="form-control" name="" id="">
            <?php while($catMsg_f=mysqli_fetch_assoc($catMsg)){ ?>
            <option value="<?php echo $catMsg_f['cat_id'] ?>">
                <?php echo $catMsg_f['cat_name'] ?>
            </option>
            <?php } ?>
        </select>
        
    </div>
    <div class=" form-group ">
        <label for="">Post Summary:</label><Br>
        <input class="form-control" type="text" name="Post_title" id="">
    </div>
    <div class=" form-group ">
        <label for="">Post Tag:</label><Br>
        <input class="form-control" type="text" name="Post_title" id="">
    </div>
     <div class=" form-group ">
        <label for="">Post Status:</label><Br>
        <select name="" id="">
            <option value="1">Published</option>
            <option value="0">Unpublish</option>
        </select>
    </div>
</form>