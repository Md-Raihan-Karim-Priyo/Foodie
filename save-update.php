<?php

    include "config.php";

    if(empty($_FILES['new-image']['name'])){
        $file_name= $_POST['old-image'];


    }else{
        $errors = array();

        $file_name=$_FILES['new-image']['name'];
        $file_size=$_FILES['new-image']['size'];
        $file_tmp =$_FILES['new-image']['tmp_name'];
        $file_type=$_FILES['new-image']['type'];
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

  $sql ="update {$_POST['category']} set prod_name='{$_POST['name']}', prod_unit='{$_POST['unit']}', prod_price ={$_POST['price']}, prod_img='{$file_name}'  where prod_id={$_POST['id']} ";
    $result = mysqli_query($conn,$sql) or die("Query Failed");

    if($result){
        echo "
        <script>
        alert('Product specification is updated.');
        window.location.href='updateProd1.php';
        </script>
        ";
       // header("location: http://localhost/website/updateProd1.php");
    }else{
        echo "Query Failed";
    }


?>