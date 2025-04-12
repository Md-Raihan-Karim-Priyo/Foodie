<?php 

include "config.php";
session_start();

if(!isset($_SESSION["username"])){
    header("Location: http://localhost/Foodie/adminLogIn.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Customer messages</title>
    <link rel="icon" type="image/x-icon" href="images/logoFinal.jpg">
    <!-- ................................................................................. -->

        <!-- links part -->



        <!-- bootstrap cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--External css-->
        <link href="" rel="stylesheet">
        <!-- ................................................................................. -->
</head>
<body style="background-color: rgb(172,172,172);">
    <div class="container bg-light">
        <!-- ................................................................................................................  -->
        <!-- header starts here -->
        <header>
            <h1 class="text-center p-3"><a href="index.php"  style="font-size:larger;text-decoration: none; color:rgb(8, 10, 10);border: 5px solid black;">Foodie</a></h1>
            <h1 class="mt-2 text-center text-light bg-dark">Read Customer Messages</h1>
            <div class="mt-2 bg-dark text-light">
              <div class="row text-center">
                <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12"> 
                  <a  href="index.php" class="btn btn-primary">Home</a>
                </div>
                <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12">
                  <a  href="adminLogOut.php" class="btn btn-primary">Log Out</a>
                </div>
                <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12">
                  <a  href="admin.php" class="btn btn-primary">Admin Control Panel</a>
                </div>
                <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12">
                  <a  href="ContactUs.php" class="btn btn-primary">Contact Us</a>
                </div>
              </div>
            </div>
          </header>
        <!-- header ends here -->
        <!-- ................................................................................................................  -->
        <!-- main starts here -->
        <main>
             <!-- menu starts here -->
 <div class="mymenu mt-2 mb-3" >
        <div class="bg-light">
          <div class="title text-center md-3" style="font-family: Cambria;font-style: italic;
               background-color: rgb(12, 1, 1); color: azure;">
            <h3 class="font-weight-bolder" >Menu</h3>
          </div>
          <div class="row p-3">
            <div class=" col-12 col-md-12 col-lg-4">
              <a href="breakfast.php"class="btn w-100 btn-outline-danger mb-3 ">Breakfast</a>
              <a href="lunch.php"class="btn w-100 btn-outline-primary mb-3">Lunch</a>
             
              

            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <a href="dinner.php"class="btn w-100 btn-outline-dark mb-3">Dinner</a>
              <a href="snacks.php"class="btn w-100 btn-outline-success mb-3">Snacks</a>
              

            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <a href="sweets.php"class="btn w-100  btn-outline-secondary mb-3">Sweets</a>
              <a href="drinks.php"class="btn w-100  btn-outline-info mb-3">Drinks</a>
             
            </div>
          </div>
        </div>

      </div>
         <!-- menu ends here-->
     <!-- .......................................................................... -->
        <!-- customer messages section starts here -->
        <div>
            <!-- title is here -->
            <div>
                <hr style="border: 5px solid black; border-bottom: none;">
                <h1 style="text-align: center;">Customer Messages</h1>
                <hr style="border: 5px solid black; border-bottom: none;">
            </div>
            <!-- form is here -->
            <?php
            
                    $sql = "SELECT * FROM `cust_msg`";
                    $result= mysqli_query($conn,$sql) or die("Query Unsuccessful");
                if(mysqli_num_rows($result)>0){
                    
                    while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <div class="row mb-2">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card" style="border: 3px solid black;">
                        <h5 class="card-header"><?php echo $row['msg_cust_name'] ?></h5>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['msg_cust_phone'] ?></h5>
                            <p class="card-text"><?php echo $row['msg_msg'] ?></p>
                            <form action="delete-cust-msg.php" method="POST">
                                 <input type="submit" class="btn btn-primary" value="Remove">
                                 <input type="hidden" name="msg_id" id="" value="<?php echo $row['msg_id'] ?>">
                            </form>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-3"></div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
        <!-- customer messages section starts here -->
    <!-- .......................................................................... -->
        </main>
        <hr style="border: 5px solid black; border-bottom: none;">
        <hr style="border: 5px solid black; border-bottom: none;">
        <!-- main ends here -->
        <!-- ................................................................................................................  -->
        <!-- footer starts here -->
        <footer class="bd-footer py-5 mt-0 bg-dark text-light">
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