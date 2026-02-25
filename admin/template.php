<?php
    include("class/function.php");
    session_start();
    $id = $_SESSION['adminId'];
    if($id==null){
        header("location: index.php");
    }
?>


<?php include_once("includes/head.php"); ?>
    <body class="sb-nav-fixed">
        <?php include_once("includes/topnav.php"); ?>
        <div id="layoutSidenav">
            <?php include_once("includes/sidebar.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       <?php 
                        if(isset($view)){
                            if($view=="dashboard"){
                                include("view/dash_view.php");
                            }elseif($view=="add_category"){
                                include("view/addcat_view.php");
                            }elseif($view=="manage_cat"){
                                include("view/manacat_view.php");
                            }elseif($view=="add_post"){
                                include("view/addpost_view.php");
                            }elseif($view=="manage_post"){
                                include("view/mana_post_view.php");
                            }
                        }           
                       ?>
                    </div>
                </main>
                <?php include_once("includes/footer.php"); ?>
            </div>
        </div>
        <?php include_once("includes/script.php"); ?>
    </body>
</html>
