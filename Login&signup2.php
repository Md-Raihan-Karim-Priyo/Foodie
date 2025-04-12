<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Registration Form </title>
    <link rel="icon" type="image/x-icon" href="images/logo1.jpg">
    <link rel="stylesheet" href="Login&singup.css">
  
   
</head>
<body>
    <div class="holder" style="background: rgb(146 236 240 / 97%);">
        <div class="card">
            <div class="inner-box"id="card">
                <div class="card-front" style=" background-image: linear-gradient(rgba(59, 107, 11, 0.8),rgba(18, 129, 33, 0.8)),url(images/logoFinal.jpg);">
                    <h2>New-Registration</h2>
                    <form action="registration-data.php" method="POST">
                        <input type="text" name="cust_name"class="input-box"placeholder="Your name" required>
                        <input type="text" name="cust_address" class="input-box"placeholder="Your Address" required>
                        <input type="text" name="cust_number" class="input-box" placeholder="Your Mobile Number" required>
                        <input type="password" name="cust_password" class="input-box" placeholder="Password"required>

                        <button type="submit" class="submit-btn">Register now </button>
                    </form>
                    <button type="button"class="btn" onclick="openLogin()">I have an account</button>  
                    <a href="index.php"> <button type="submit" class="submit-btn">Go Home</button></a>
                </div>
                <div class="card-back" style=" background-image: linear-gradient(rgba(59, 107, 11, 0.8),rgba(18, 129, 33, 0.8)),url(images/logoFinal.jpg);">
                    <h2>LOGIN</h2>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="text" name="mobile" class="input-box" placeholder="Your Mobile Number" required>
                        <input type="password" name="password"class="input-box" placeholder="Password"required>
                        <button type="submit" name="button"class="submit-btn">LogIn</button>
                    </form>
                    <?php
                    if(isset($_POST['button'])){
                    include "config.php";
                    $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
                    $password=$_POST['password'];


                    $sql="select cust_name from customer_list where cust_mobile= '{$mobile}' and cust_password= '{$password}'";
                    $result = mysqli_query($conn,$sql) or die("Query Failed.");

                    if( mysqli_num_rows($result) > 0){

                        while($row= mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION["custname"]=$row['cust_name'];
                        //  $_SESSION["user_id"]=$row['admin_id'];
                        //  $_SESSION["user_role"]=$row['admin_role'];

                        header('Location: http://localhost/website/index.php');
                        }

                    }else{
                        echo '<div class="alert alert-danger">Phone number or password or both do not match.</div>';
                    }
                    
                    }
                    ?>
                   <a href="index.php"> <button type="submit" class="submit-btn">Go Home</button></a>
                    <button type="button"class="btn"onclick="openRegister()">I'm New Here</button>
                    <a href="">Forget password?</a>
                </div>
         </div>
    </div>
        
 </div>
     <script>
    var card = document.getElementById("card");
    function openRegister(){
        card.style.transform="rotateY(0deg)";
        }
    function openLogin(){
        card.style.transform="rotateY(180deg)";
        }

     </script>
    
    
</body>
</html>