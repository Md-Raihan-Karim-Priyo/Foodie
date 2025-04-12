<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast menu</title>
    <link rel="icon" type="image/x-icon" href="images/logoFinal.jpg">
<!-- ................................................................................. -->

<!-- links part -->



<!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--External css-->
  <link href="MenuItem.css" rel="stylesheet">
<!-- ................................................................................. -->
</head>
<body style="background-color: #E5E3E0">
    <div class="container">
        <!-- Header starts here -->
        <?php  include('header.php');?>
         <!-- Header ends here -->
         <!-- ................................................................................................................  -->
         <!-- Main starts here -->
         <main >
             <!-- menu starts here -->
             <div class="mymenu">
        <div class="bg-light">
          <div class="title text-center md-3" style="font-family: Cambria;font-style: italic;
               background-color: rgb(12, 1, 1); color: azure;">
            <h3 class="font-weight-bolder" >Menu</h3>
          </div>
          <div class="row p-3">
            <div class=" col-12 col-md-12 col-lg-4">
              <a href="breakfast.php"class="btn w-100 btn-outline-danger mb-3 active">Breakfast</a>
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
             <!--....................................................-->
        <!--Banner section starts here-->
        <div class="My-banner container col-lg-12" style="background-color: rgb(36, 97, 189); ">
          <p class="pStyle "style="  font-style: italic; color: rgb(6, 243, 45);">Healthy Breakfast!!!Healthy Life</p>
          <p class="pStyle"style="  font-style: italic; color: rgb(6, 243, 45);">Only available from 7.00 AM to 11.30 AM </p>
        </div>
        <!--Banner section ends here-->
    <!--....................................................-->
    <!-- Cards section starts here  -->
    <div class="MyCardContainer  pb-3">
    <div class="title text-center mb-3">
        <hr style="border: 5px solid red; border-bottom: none;">
          <h3 class="font-weight-bolder"style="font-family: Cambria;font-style: italic;
               background-color: rgb(12, 1, 1); color: azure;">Breakfast Menu</h3>
          <hr style="border: 5px solid red; border-bottom: none;">
        </div>
    <?php 
              // $conn = mysqli_connect("localhost","root","","website") or die("Connection failed");
              include "config.php";
              $sql = "select * from breakfast";
              $result= mysqli_query($conn,$sql) or die("Query Unsuccessful");
              $count = 1;
             if(mysqli_num_rows($result)>0){
              
               while($row = mysqli_fetch_assoc($result)){
                 if($count== 1){
                   echo "<div class='row mb-5'>";
                 }
                 

    ?>
      
        <!-- Card No.1 -->
        <div class="col-12 col-md-12 col-lg-4 mb-3">
            <div class="card text-center  border border-dark" style="width: 18rem;">
            <?php echo '<img class="card-img-top"
                src="images/'.$row['prod_img'].'" style="max-height: 12rem;min-height:12rem; max-width: 18rem;"
                  alt="Soy Bean">'?>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['prod_name'];  ?></h5>
                <p class="card-text"><?php  echo $row['prod_price']." ".$row['prod_unit']; ?></p>
                <form action="manage_cart.php" method="POST">
                  <button type="submit" name="Add_To_Cart" class="btn btn-dark">Add to My Order</button>
                  <input type="hidden" name="Item_Name" value="<?php echo $row['prod_name']?>" >
                  <input type="hidden" name="Price" value="<?php echo $row['prod_price']?>" >
                </form>
              </div>
            </div>
        </div>
          <?php 
              $count++;
              if($count==4){
                $count==1;
                
              }
          }
        } ?>
        
    </div>
     <!-- Cards section ends here  -->
     <!--....................................................-->
        </main>
         <!-- Main ends here -->
         <!-- ................................................................................................................  -->
         <!-- footer starts here -->
        
         <footer class="bd-footer py-5  bg-dark text-light">
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
                  <li class="mb-2"><a href="adminLogIn.php" style="text-decoration: none;color:#F9FBF6;">Admin</a></li>
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