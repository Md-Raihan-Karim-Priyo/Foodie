<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="icon" type="image/x-icon" href="images/logoFinal.jpg">
     <!-- ................................................................................. -->

        <!-- links part -->



        <!-- bootstrap cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--External css-->
        <link href="" rel="stylesheet">
        <!-- ................................................................................. -->
</head>
<body style="background-color: silver;">
   <div class="container" style="background: #7dd3ed;">
        <!-- ................................................................................................................  -->
    <!-- header starts here -->
    <header>
        <h1 class="text-center p-3"><a href="index.php"  style="font-size:larger;text-decoration: none; color:rgb(8, 10, 10);border: 5px solid black;">Foodie</a></h1>
    <h1 class="mt-2 text-center text-light  py-3" style="background:purple ;">Admin Login</h1>
    <p class="" style="border: 5px black solid; text-align: center; font-size: larger;font-weight: bolder;">Please Login to use admin control panel</p>

    </header>
    <!-- header ends here -->
    <!-- ................................................................................................................  -->
    <!-- main starts here -->
    <main>
        <div class=" container bg-dark text-light mt-3 col-lg-6 col-sm-12" style="border: 5px solid green;">
        <!-- log in form starts here -->
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="mb-3 ">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold;">Email address :</label>
                  <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label" style="font-weight: bold;">Password :</label>
                  <input type="password" name="password"class="form-control" id="exampleInputPassword1">
                </div>
                <div class="text-center"><input type="submit" name="login"class="btn btn-primary mb-3" value="login"></input></div>
              </form>
        <!-- log in form ends here -->
        <?php
        if(isset($_POST['login'])){
          include "config.php";
          $email=mysqli_real_escape_string($conn,$_POST['email']);
          $password=$_POST['password'];


          $sql="select admin_email,admin_name from admin_list where admin_email= '{$email}' and admin_password= '{$password}'";
          $result = mysqli_query($conn,$sql) or die("Query Failed.");

          if( mysqli_num_rows($result) > 0){

            while($row= mysqli_fetch_assoc($result)){
               session_start();
               $_SESSION["username"]=$row['admin_name'];
              //  $_SESSION["user_id"]=$row['admin_id'];
              //  $_SESSION["user_role"]=$row['admin_role'];

              header("Location: http://localhost/Foodie/admin.php");
            }

          }else{
            echo '<div class="alert alert-danger">Email or password or both do not match.</div>';
          }
        
        }
        ?>
        </div>
        
    </main>
    <!-- main ends here -->
    <!-- ................................................................................................................  -->
    <!-- footer starts here -->
  <footer class="bd-footer py-5 mt-5 bg-dark text-light">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-3 mb-3">
            <a href="index.php" class="navbar-brand" style="font-weight: bolder;color:mediumturquoise;">
              <img class="rounded-circle"
                src="images/logoFinal.jpg"
                alt="Logo" style=" width:50px;">
              Foodie
            </a>
          <ul class="list-unstyled small text-muted">
            <li class="mb-2">Designed and built with all the love in the world by the <a href="index.html"style="text-decoration: none;color:#F9FBF6;">Foodie</a> with the help of <a href="#"style="text-decoration: none;color:#F9FBF6;">our contributors</a>.
          </ul>
        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5 style="font-weight: bolder;color:mediumturquoise;">Links</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="index.php" style="text-decoration: none;color:#F9FBF6;">Home</a></li>
            <li class="mb-2"><a href="Login&signup.php" style="text-decoration: none;color:#F9FBF6;">Login</a></li>
            <li class="mb-2"><a href="Login&signup2.php" style="text-decoration: none;color:#F9FBF6;">Sign Up</a></li>
            <li class="mb-2"><a href="AboutUS.php" style="text-decoration: none;color:#F9FBF6;">About Us</a></li>
            <li class="mb-2"><a href="ContactUs.php" style="text-decoration: none;color:#F9FBF6;">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3 ">
          <h5 style="font-weight: bolder;color:mediumturquoise;">Follow Us At</h5>
          <ul class="list-unstyled" >
            <li class="mb-2"><a href="https://www.facebook.com" style="text-decoration: none;color:#F9FBF6;">Facebook</a></li>
            <li class="mb-2"><a href="https://www.instagram.com/?hl=en" style="text-decoration: none;color:#F9FBF6;">Instragram</a></li>
            <li class="mb-2"><a href="https://www.linkedin.com/login" style="text-decoration: none;color:#F9FBF6;">LinkedIn</a></li>
            <li class="mb-2"><a href="https://www.whatsapp.com/" style="text-decoration: none;color:#F9FBF6;">WhatsApp</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5 style="font-weight: bolder;color:mediumturquoise;">Read</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="CustomerReview.php" style="text-decoration: none;color:#F9FBF6;"> Customer Reviews</a></li>
            <li class="mb-2"><a href="OwnersInfo.php" style="text-decoration: none;color:#F9FBF6;">Owners Info</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
 
  <!-- footer ends here -->
   </div>
<!-- ................................................................................................................  -->
<!-- Bootstrap javascript links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>