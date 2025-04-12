<?php



    include "config.php";

    $sql="INSERT INTO `cust_msg`( `msg_cust_name`, `msg_cust_phone`, `msg_msg`) VALUES ('{$_POST['Contact_name']}','{$_POST['Contact_phone']}','{$_POST['Contact_messege']}')";
    $result= mysqli_query($conn,$sql);

    if($result){
        echo "
        <script>
        alert('Your messege was suucessfully delivered');
        window.location.href='ContactUs.php';
        </script>
        ";
    }
?>