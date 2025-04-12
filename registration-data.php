<?php 

    include "config.php";

    $cust_name=$_POST['cust_name'];
    $cust_address=$_POST['cust_address'];
    $cust_mobile=$_POST['cust_number'];
    $cust_password=$_POST['cust_password'];

    $sql="insert into customer_list(cust_name,cust_address,cust_mobile,cust_password) values('{$cust_name}','{$cust_address}','{$cust_mobile}','{$cust_password}')";
    $result =mysqli_query($conn,$sql) or die("Query failed");

    header("location: http://localhost/website/Login&signup.php")
?>