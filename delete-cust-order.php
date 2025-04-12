<?php

    include "config.php";


    $sql="DELETE FROM `order_manager` WHERE Order_id={$_POST['order_id']}";

    $result=mysqli_query($conn,$sql);

    $sql1="DELETE FROM `user_orders` WHERE Order_id={$_POST['order_id']}";

    $result1=mysqli_query($conn,$sql1);

    if($result And $result1){
        echo"
        <script>
        alert('The Order has been removed');
        window.location.href='CustOrder.php';
        </script>;
        ";
    }


?>