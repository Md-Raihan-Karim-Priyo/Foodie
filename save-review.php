<?php

    include "config.php";
    session_start();

    if(!isset($_SESSION["custname"])){
        echo "
        <script>
        alert('Please Login before reviewing');
        window.location.href='CustomerReview.php';
        </script>
        ";

    }else{
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
    
    
        $name= mysqli_real_escape_string($conn,$_POST['cust_fullname']);
        $review= mysqli_real_escape_string($conn,$_POST['cust_review']);
        
        
        $sql="INSERT INTO `cust_review`( `cust_name`, `cust_review`, `cust_pic`) VALUES ('{$name}','{$review}','{$file_name}')";
        
        if(mysqli_query($conn,$sql)){
            echo "
            <script>
            alert('Review added');
            window.location.href='CustomerReview.php';
            </script>
            ";
        }else{
            echo "
            <script>
            alert('Review Not added');
            window.location.href='CustomerReview.php';
            </script>
            ";
        }
    

    }


    

?>