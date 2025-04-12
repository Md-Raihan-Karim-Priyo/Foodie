<?php 
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="images/logoFinal.jpg">
<!-- ................................................................................ -->

<!-- Links part -->
 <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!--External css-->
  <link href="style.css" rel="stylesheet">
<!-- ................................................................................ -->

</head>

<body>
  <div class="container">
    <!-- .................................................................................................... -->
    <!--Header starts here-->
    <?php  include('header.php');?>
    <!--Header ends here-->
<!-- .................................................................................... -->
    <!--Main starts here-->
    <main>
      <!-- Menu starts here -->
      <div class="mymenu mt-2 mb-3">
        <div class="bg-light">
          <div class="title text-center md-3" style="font-family: Cambria;font-style: italic;
               background-color: rgb(12, 1, 1); color: azure;">
            <h3 class="font-weight-bolder" >Menu</h3>
          </div>
          <div class="row p-3">
            <div class=" col-12 col-md-12 col-lg-4">
              <a href="breakfast.php"class="btn w-100 btn-outline-danger mb-3">Breakfast</a>
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
      <!-- Menu ends -->
      <!-- ......................................................-->
      <!-- Slider Starts -->
      <div class="container text-white bg-secondary">
        <section id="mySlider">
          <div class="section-title">
            <h3 class=" text-center " style="font-family: Cambria;font-style: italic;
     color: azure;">Yummy Delicious Food</h3>
            <hr class="hr-style">
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                    aria-label="Slide 8"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="w-80 h-80 "
                      src="images/logoFinal.jpg"
                      alt="VegeImage">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="images/specialKalaVuna.jpg"
                      alt="Fruits Image">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="images/specialTikka.jpg"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="images/specialHandiMutton.jpg"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="images/tikka.jpg"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="images/Roti.jpg"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="images/beefCurry.jpg"
                      alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="w-80 h-80"
                      src="images/MistiDoi.jpg"
                      alt="">
                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
        </section>
      </div>
      <!-- Slider ends -->
<!-- .................................................................... -->
      <!-- Sales section starts here -->
      <div class=" My-card bg-light mt-3 mb-3 p-3 d-sm-flex flex-column">
        <div class="title text-center mb-3">
        <hr style="border: 5px solid black; border-bottom: none;">
          <h3 class="font-weight-bolder"style="font-style: italic; font-family: Cambria;background-color: rgb(12, 1, 1);color: azure;">Our Speciality!!!Always available!!!</h3>
          <hr style="border: 5px solid black; border-bottom: none;">
        </div>
        <!-- 1st row -->
        <!-- <div class="row mb-3"> -->
          <!-- card no 1  Soy bean -->
          <!-- <div class="col-sm-12 mb-2 ml-auto mr-auto col-md-6 col-lg-3">
            <div class="card text-center border border-dark d-sm-flex align-items-center">
              <img class="card-img-top"
                src="images/SoyBeanOil.jpg" style="max-height: 12rem; max-width: 18rem;"
                alt="Soy Bean">
              <div class="card-body">
                <h4 class="card-title">Soy Bean Oil</h4>
                <p class="card-text">285 TK per 2 litres.</p>
                <button class="btn btn-dark">Add to MyCart</button>
              </div>
            </div>
          </div> -->
          <?php 
              $conn = mysqli_connect("localhost","root","","foodie") or die("Connection failed");
              $sql = "select * from speciality";
              $result= mysqli_query($conn,$sql) or die("Query Unsuccessful");

             if(mysqli_num_rows($result)>0){
               $count = 1;
               while($row = mysqli_fetch_assoc($result)){
                 if($count== 1){
                   echo " <div class='row mb-3'>";
                 }
                 

          ?>
          <div class="col-sm-12 mb-2 ml-auto mr-auto col-md-6 col-lg-3">
            <div class="card text-center border border-dark d-sm-flex align-items-center">
              <?php echo '<img class="card-img-top"
              src="images/'.$row['prod_img'].'" style="max-height: 12rem;min-height:12rem; max-width: 18rem;min-width: 11rem;"
                alt="Soy Bean">'?>
              <div class="card-body">
                <h4 class="card-title"><?php echo $row['prod_name'];  ?></h4>
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
              if($count==5){
                $count==1;
              }
          }
        } ?>
         

      <hr style="border:5px solid gray;">
<!-- .................................................................-->
      <!-- Customer Reviews section starts here -->
      <div class="container customer-review bg-light p-3">
        <div class="title text-center md-3 text-white">
          <h3 class="font-weight-bolder" style="font-style: italic; font-family: Cambria;background-color: rgb(12, 1, 1);color: azure;">Customer Reviews</h3>
        </div>
        <div class="row ">
            <?php 
                
                          
              
                $sql = "select * from cust_review limit 3";
                $result= mysqli_query($conn,$sql) or die("Query Unsuccessful");
                if(mysqli_num_rows($result)>0){
                
                  while($row = mysqli_fetch_assoc($result)){
        ?>
            
                  <div class=" col-sm-12 col-md-12 col-lg-4 ">
                    <div class="card" style="width: 18rem; min-height: 35rem; max-height:35rem;">
                      <img src="images/<?php echo $row['cust_pic']?>" class="card-img-top"style="min-height: 21.5rem;" alt="customer image">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row['cust_name']?></h5>
                        <p class="card-text"><?php echo $row['cust_review']?></p>
                      </div>
                    </div>
                </div>
            
            <?php 
                    }
                  }
            
            ?>
        </div>
      
          <div class="row mt-3 mb-3">
            <div class="btn-group ">
              <a href="CustomerReview.php" class="btn btn-primary">Read more reviews</a>
              <a href="CustomerReview.php" class="btn btn-info">Leave a review</a>
            </div>
          </div>
      </div>
            
      
      <!-- Customer Reviews section ends here -->
     <!-- ...........................................................-->
      <!-- Owners info starts here -->
      <div class="container bg-light">
        <div class=" title text-center my-3">
          <hr style="border: 3px solid black; width: 100%;">
          <h3 style="font-family: Cambria;background-color: rgb(12, 1, 1);color: azure;font-style: italic;">Owners info</h3>
          <hr style="border: 3px solid black; width: 100%;">
        </div>
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Md.Raihan Karim Priyo</h3>
              <strong class="d-inline-block mb-2 text-dark">CEO & Founder</strong>
              <p class="card-text mb-auto">Md.Raihan Karim Priyo, a student of computer science and engineering department of jagannath university, founded Foodie on 19 nov 2019.It is now one of the greatest e-commerce website in Bangladesh.It is growing rapidly.The bussiness is on the rise.</p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/priyo.jpg" alt="Priyo">
    
            </div>
          </div>
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Md. Billal Ahmed Akash</h3>
              <strong class="d-inline-block mb-2 text-dark">CEO & Founder</strong>
              <p class="card-text mb-auto">Md Billal Ahmed Akash, a student of computer science and engineering department of jagannath university, founded Foodie on 19 nov 2019.It is now one of the greatest e-commerce website in Bangladesh.It is growing rapidly.The bussiness is on the rise.</p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img  class=" img-fluid bd-placeholder-img" width="200" height="250"src="images/Billal.jpg" alt="Khairul">
    
            </div>
            </div>
            <div class=" my-3">
              <a href="OwnersInfo.php" class="text-dark">Want to learn more?</a>

            </div>

      </div>
      <!-- Owners info ends here -->
      <!-- ......................................................-->
    </main>
    <!--Main ends here-->
    <!-- .............................................................................................................................-->
    <!--Footer starts here-->
    <footer class="bd-footer py-5 mt-5 bg-dark">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-3 mb-3">
              <a href="index.html" class="navbar-brand" style="font-weight: bolder;color:mediumturquoise;">
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
            <h5  style="font-weight: bolder;color:mediumturquoise;">Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="index.php" style="text-decoration: none;color:aquamarine;">Home</a></li>
              <li class="mb-2"><a href="Login&signup.php" style="text-decoration: none;color:#F9FBF6;">Login</a></li>
              <li class="mb-2"><a href="Login&signup2.php" style="text-decoration: none;color:#F9FBF6;">Sign Up</a></li>
              <li class="mb-2"><a href="AboutUS.php" style="text-decoration: none;color:#e1f1c8;">About Us</a></li>
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
            <h5  style="font-weight: bolder;color :mediumturquoise;">Read</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="CustomerReview.php" style="text-decoration: none;color:#F9FBF6;"> Customer Reviews</a></li>
              <li class="mb-2"><a href="OwnersInfo.php" style="text-decoration: none;color:#F9FBF6;">Owners Info</a></li>
              <li class="mb-2"><a href="adminLogIn.php" style="text-decoration: none;color:#F9FBF6;">Admin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer ends here-->
  </div>

  <!-- ....................................................................................................................-->



  <!--Bootstrap,Jquery,JS,Popper-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>