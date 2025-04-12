<?php

    include "config.php";


    if(isset($_FILES['fileToUpload'])){
        $errors = array();

        $file_name=$_FILES['fileToUpload']['name'];
        $file_size=$_FILES['fileToUpload']['size'];
        $file_tmp =$_FILES['fileToUpload']['tmp_name'];
        $file_type=$_FILES['fileToUpload']['type'];
        $file_ext=explode('.',$file_name);
        // $extensions = array("jpeg","jpg","png");


        // if(in_array($file_ext,$extensions)=== false){
        //     $errors[]="This extension file is not allowed, Please choose a JPG or PNG file.";
        // }

        if($file_size> ((2097152)/2*5)){
            $errors[]="File size must be 5 mb or lower.";
        }
        if(empty($errors)== true){
            move_uploaded_file($file_tmp,"uploads/".$file_name);

        }else{
            print_r($errors);
            die();
        }
    }


    $name= mysqli_real_escape_string($conn,$_POST['prod_name']);
    $price= mysqli_real_escape_string($conn,$_POST['prod_price']);
    $unit= mysqli_real_escape_string($conn,$_POST['prod_unit']);
    $category= mysqli_real_escape_string($conn,$_POST['prod_category']);

    $sql="insert into {$category} (prod_name,prod_price,prod_unit,prod_img) values('{$name}',{$price},'{$unit}','{$file_name}')";

    if(mysqli_query($conn,$sql)){
        // echo '<div class="alert alert-success">A new product is added.</div>';
        echo "
        <script>
        alert('New product is added.');
        window.location.href='addNewProd.php';
        </script>
        ";
        //header("location: http://localhost/website/addNewProd.php");
    }else{
        echo '<div class="alert alert-danger">Query failed.</div>';
    }


?>