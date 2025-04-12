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
    <title>Customer order  Panel</title>
    <link rel="icon" type="image/x-icon" href="images/logofinal.jpg">
    <!-- ................................................................................. -->

        <!-- links part -->



        <!-- bootstrap cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--External css-->
        <link href="" rel="stylesheet">
        <!-- ................................................................................. -->
</head>
<body class="" style="background-color: silver;">
  <div class="container bg-light">
  <!-- ............................................................................................... -->
  <!-- header starts here -->
  <header>
    <h1 class="text-center p-3"><a href="index.php"  style="font-size:larger;text-decoration: none; color:rgb(8, 10, 10);border: 5px solid black;">Foodie</a></h1>
    <h1 class="mt-2 text-center text-light bg-dark">Customer Order Panel</h1>
    <div class="mt-2 bg-dark text-light">
      <div class="row text-center">
        <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12"> 
          <a  href="index.php" class="btn btn-primary">Home</a>
        </div>
        <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12">
          <a  href="adminLogOut.php" class="btn btn-primary">Log Out</a>
        </div>
        <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12">
          <a  href="admin.php" class="btn btn-primary">Admin control panel</a>
        </div>
        <div class=" mt-2 mb-2 py-2 col-lg-3 col-md-12 col-sm-12">
          <a  href="ContactUs.php" class="btn btn-primary">Contact Us</a>
        </div>
      </div>
    </div>
  </header>
  <!-- header ends here -->
  <!-- ............................................................................................... -->

    <!-- Main starts here -->
    <main >
      <!-- menu starts here -->
 <div class="mymenu mt-2 mb-3">
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
      
      <!--....................................................-->
      <!-- Cutomer Order table starts here -->
        <div >
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <hr style="border: 5px solid black; border-bottom: none;">
                    <h3>Customer Order Table</h3>
                    <hr style="border: 5px solid black; border-bottom: none;">

                </div>
                <div class="col-lg-12">
                        <table class="table text-center table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pay Mode</th>
                            <th scope="col">Orders</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            $query="SELECT * FROM `order_manager`";
                            $user_result=mysqli_query($conn,$query);
                            while($user_fetch=mysqli_fetch_assoc($user_result)){
                                echo"
                                    <tr>
                                        <td>$user_fetch[Order_id]</td>
                                        <td>$user_fetch[Full_Name]</td>
                                        <td>$user_fetch[Phone_No]</td>
                                        <td>$user_fetch[Address]</td>
                                        <td>$user_fetch[Pay_Mode]</td>
                                        <td>
                                            <table class='table text-center table-light table-striped'>
                                                <thead>
                                                    <tr>
                                                    <th scope='col'>Item Name</th>
                                                    <th scope='col'>Price</th>
                                                    <th scope='col'>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            ";

                                        $order_query="SELECT * FROM `user_orders` WHERE Order_id=$user_fetch[Order_id]";
                                        $order_result=mysqli_query($conn,$order_query);
                                        while($order_fetch=mysqli_fetch_assoc($order_result)){
                                            echo"
                                                    <tr>
                                                        <td>$order_fetch[Item_Name]</td>
                                                        <td>$order_fetch[Price]</td>
                                                        <td>$order_fetch[Quantity]</td>
                                                    </tr>
                                            
                                            ";
                                        }
                                        
                                        echo"
                                                </tbody>
                                           </table>
                                        </td>
                                        <td style='padding-top: 50px;'>
                                            <form action='delete-cust-order.php' method='POST'>
                                              <input type='submit' class='btn btn-danger' value='Remove'>
                                              <input type='hidden' name='order_id' id='' value='$user_fetch[Order_id]'>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                            }
                            
                            ?>
                           
                            
                        </tbody>
                        </table>
                </div>
            </div>
        </div>

      <!-- Cutomer Order table ends here -->
      <!--....................................................-->
    <!-- .............................................................................. -->
    <!-- menu ends here-->
  </main>
  <!-- main ends here -->
  <!-- ............................................................................................... -->
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