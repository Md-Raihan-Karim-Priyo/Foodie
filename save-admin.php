<?php 

include "config.php";
session_start();

if(!isset($_SESSION["username"])){
    header("Location: http://localhost/Foodie/adminLogIn.php");
}

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];

$sql = "insert into admin_list values('{$admin_name}','{$admin_email}','{$admin_password}')";
$result = mysqli_query($conn,$sql) or die("Query Failed");

echo "
<script>
alert('New admin is added.');
window.location.href='addAdmin.php';
</script>
";
//header("location: http://localhost/website/addAdmin.php");

?>