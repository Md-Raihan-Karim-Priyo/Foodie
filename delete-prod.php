<?php

include "config.php";

$table= $_POST['category'];
$id= $_POST['id'];
$name= $_POST['name'];

$sql = "delete from {$table} where prod_id={$id} and prod_name='{$name}'";
$result = mysqli_query($conn,$sql) or die("Query failed");



    echo "
    <script>
    alert('Product is  Removed');
    window.location.href='removeProd.php';
    </script>
    ";


//header("location: http://localhost/Foodie/removeProd.php");

mysqli_close($conn);

?>