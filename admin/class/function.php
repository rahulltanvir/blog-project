<?php
    Class blogproject{

    private $conn;

   public function __construct(){
        try{
            $dbHost = 'localhost';
            $dbUser = 'root'; // ইচ্ছা করে ভুল দিলাম
            $dbPass = '';
            $dbName = 'blogproject';

            $this->conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);


        }catch(mysqli_sql_exception $connmsg){
            die("Connection Failed!! ".$connmsg->getMessage());
        }
    }

    public function adminLogin($data){
        $admin_email=$data['admin_email'];
        $admin_pass =md5($data['admin_pass']);

        $query ="SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass' ";

        if(mysqli_query($this->conn, $query)){
            $loginfo=mysqli_query($this->conn, $query);

            if($loginfo){
                header("location:dashboard.php");
                $adminData= mysqli_fetch_assoc($loginfo);
                session_start();
                $_SESSION['adminId']=$adminData['id'];
                $_SESSION['adminName']=$adminData['admin_name'];

            }
        }
    }

    public function adminlogOut(){
        unset($_SESSION['adminId']);
        unset($_SESSION['adminName']);
        header("location: index.php");
    }

    public function addCategorydata($data){
        $catName=$data['cat_name'];
        $catDes =$data['cat_des'];

        $query="INSERT INTO category (cat_name, cat_des) VALUE ('$catName','$catDes') ";
        if(mysqli_query($this->conn, $query)){
            return "Category Add Successfully";
        }
        
    }
    public function displayCat(){
        $query="SELECT * FROM category";
        if(mysqli_query($this->conn, $query)){
            $catchData=mysqli_query($this->conn, $query);
            return $catchData;
        }
    }

    public function addPost($data){
        $postTitle=$data['post_title'];
        $postContent=$data['post_content'];
        $postCtg=$data['post_ctg'];
        $postSummary=$data['post_summary'];
        $postTag=$data['post_tag'];
        $postImg=$_FILES['post_img']['name'];
        $imgTemp=$_FILES['post_img']['tmp_name'];
        $postStatus=$data['post_status'];

        $query="INSERT INTO posts (post_title,post_content,post_img,post_ctg,post_author,post_date,post_comment_count,post_summary,post_tag,post_status) VALUES ('$postTitle','$postContent','$postImg',' $postCtg','admin',now(),5,'$postSummary','$postTag',$postStatus)";

        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($imgTemp,"../image/".$postImg);
            return "Add Post Successfully";
        }
        
    }

    public function displayPost(){
        $query="SELECT * FROM post_with_ctg";
        if(mysqli_query($this->conn, $query)){
            $catchData=mysqli_query($this->conn, $query);
            return $catchData;
        }
    }
     public function displayPost_publish(){
        $query="SELECT * FROM post_with_ctg WHERE post_status=1";
        if(mysqli_query($this->conn, $query)){
            $catchData=mysqli_query($this->conn, $query);
            return $catchData;
        }
    }
    public function editCat($id){
        $query="SELECT * FROM category WHERE id=$id";
        if(mysqli_query($this->conn,$query)){
            $catch_catData=mysqli_query($this->conn,$query);
            $catch_data_f=mysqli_fetch_assoc($catch_catData);
            return $catch_data_f;
        }
    }



}

?>