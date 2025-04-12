<?php

    include "config.php";

    $sql="DELETE FROM `cust_msg` WHERE msg_id={$_POST['msg_id']}";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo"
        <script>
        alert('The messege has been deleted');
        window.location.href='read-cust-msg.php';
        </script>;
        ";
    }else{
        echo"
        <script>
        alert('Could not delete.');
        window.location.href='read-cust-msg.php';
        </script>;
        ";
    }

?>