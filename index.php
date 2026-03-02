<?php 
include("admin/class/function.php"); 
$webObj = new blogproject();

$menu_dis =$webObj->displayCat();


?>

<?php include_once("include/head.php"); ?>

<body>

    <!-- ***** Preloader Start ***** -->
    <?php include_once("include/preloader.php"); ?>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include_once("include/header.php"); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once("include/banner.php"); ?>
    <!-- Banner Ends Here -->

    <?php include_once("include/cta.php"); ?>


    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <?php include_once("include/blogpost.php"); ?>
                <?php include_once("include/sidebar.php"); ?>
            </div>
        </div>
    </section>
    <?php include_once("include/footer.php"); ?>

    <?php include_once("include/script.php"); ?>