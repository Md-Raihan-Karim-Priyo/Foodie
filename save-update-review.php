<?php 

    include "config.php";

    session_start();

    
    

    if(isset($_POST['Cancel'])){
        echo "
                <script>
                window.location.href='CustomerReview.php';
                </script>
                ";
        die();
    }

    if(empty($_FILES['new_image']['name'])){
        $file_name=$_POST['old_image'];
    }else{
        $errors = array();
    
            $file_name=$_FILES['new_image']['name'];
            $file_size=$_FILES['new_image']['size'];
            $file_tmp =$_FILES['new_image']['tmp_name'];
            $file_type=$_FILES['new_image']['type'];
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

    $sql="UPDATE `cust_review` SET `cust_name`='{$_POST['cust_fullname']}',`cust_review`='{$_POST['cust_review']}',`cust_pic`='{$file_name}' WHERE review_id={$_POST['review_id']}";
    
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "
                <script>
                alert('Review is edited');
                window.location.href='CustomerReview.php';
                </script>
                ";
    }




?>