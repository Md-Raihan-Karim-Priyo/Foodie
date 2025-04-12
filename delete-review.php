<?php 

    include "config.php";

    session_start();

    if(!(isset($_SESSION['custname']) Or isset($_SESSION["username"]))){
        echo "
        <script>
        alert('Please login before editing or deleting your review');
        window.location.href='CustomerReview.php';
        </script>
        ";
        die();
    }
    if(!($_SESSION['custname']== $_POST['cust_name'])){
        echo "
        <script>
        alert('You can not edit or delete another persons review');
        window.location.href='CustomerReview.php';
        </script>
        ";
        die();
    }

    $sql="DELETE FROM `cust_review` WHERE review_id={$_POST['review_id']}";
    
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "
                <script>
                alert('Review is deleted');
                window.location.href='CustomerReview.php';
                </script>
                ";
    }




?>