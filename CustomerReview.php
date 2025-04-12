<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Review</title>
    <link rel="icon" type="image/x-icon" href="images/logoFinal.jpg">


    <!-- ........................................................................... -->
    <!-- Links part -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--External css-->
    <!-- ............................................................................ -->
</head>
<body style="background-color: rgb(133, 133, 133);">
    <div class="container text-light">
    <!-- ................................................................................ -->
    <!-- Header starts here -->
    <?php
    
    
      include("header.php");
    
    ?>
    <!-- Header ends here -->
    <!-- ................................................................................ -->
    <!-- main starts here -->
    <main class="mb-0">
      <hr style="border:5px solid white ; border-bottom: none;">
      <hr style="border:5px solid white ; border-bottom: none;">
      <div class="leaveReview bg-danger mt-0 mb-0">
        <!-- Title of Leave a  Review Section -->
        <div class="CustomerReviewTitle" >
          <hr style="border:5px solid aqua ; border-bottom: none;">
          <p ><h1 style="text-align: center; font-weight:bolder;font-family: 'Handlee', cursive;">Make a review</h1></p>
          <hr style="border:5px solid aqua ; border-bottom: none;">
      </div>
      <!-- Review Form -->
      <div class="row p-3">
        <div class="col-lg-12 ">
          <form action="save-review.php" method="post" enctype="multipart/form-data">
            <!-- Full name -->
            <div class="form-group mb-4">
              <label for="fullname" class="mb-2" style="font-weight:bolder;font-family: 'Handlee', cursive;">Full Name :</label>
              <input type="text" class="form-control" name="cust_fullname" required>
            </div>
            <!-- email -->
            <!-- <div class="form-group mb-4">
              <label for="email" class="mb-2" style="font-weight:bolder;font-family: 'Handlee', cursive;">Email :</label>
              <input type="email" class="form-control" name="email" required>
            </div> -->
            <!-- Review message -->
            <div class="form-group mb-4">
              <label for="message" class="mb-2" style="font-weight:bolder;font-family: 'Handlee', cursive;">Review :</label>
             <textarea style="resize: none;"class="form-control" name="cust_review" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group mb-4">
              <label for="formFile" class="form-label mb-2" style="font-weight:bolder;font-family: 'Handlee', cursive;">Add Picture:</label>
              <input class="form-control" type="file" name="fileToUpload" id="formFile" required>
            </div>
            <!-- buttons -->
            <div class="form-group text-center mb-4">
              <input type="submit" class="btn btn-outline-light mr-3"style="font-family: 'Handlee', cursive; "name=""id="" value="submit">
              <input type="reset" class="btn btn-outline-light" style="font-family: 'Handlee', cursive;" name="" id="" value="reset">
             </div>
          </form>

        </div>      

      </div>
       
      </div>
      <hr style="border:5px solid white ; border-bottom: none;">
      <hr style="border:5px solid white ; border-bottom: none;">
        <div class="bg-success">
            <!-- ................................................ -->
            <!-- Title of customer Review Section -->
            <div class="CustomerReviewTitle" >
                <hr style="border:5px solid aqua ; border-bottom: none;">
                <p ><h1 style="text-align: center; font-weight:bolder;font-family: 'Handlee', cursive;">Customer Reviews</h1></p>
                <hr style="border:5px solid aqua ; border-bottom: none;">
            </div>
            <!-- post section -->
            <!-- 1st post -->
            <?php 
             
                      
                      include "config.php";
                      $sql = "select * from cust_review";
                      $result= mysqli_query($conn,$sql) or die("Query Unsuccessful");
                     if(mysqli_num_rows($result)>0){
                      
                       while($row = mysqli_fetch_assoc($result)){
             ?>
           <div class="customerReviewBody p-3" id="Review">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static" style="border:2px solid aqua ;">
                      <h3 class="mb-0"><?php echo $row['cust_name']?></h3>
                      <p class="card-text mb-auto"><?php echo $row['cust_review']?></p>
                    </div>
                    <div class="col-auto d-none d-lg-block" style="border:2px solid aqua ;">
                      <img  class="img-fluid bd-placeholder-img" width="200" height="250"src="images/<?php echo $row['cust_pic']?>" alt="image of customer">
            
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3 " >
                        <form action="update-review.php" method="POST">
                          <div class="form-group  text-center mb-4 ">
                            <input type="submit" class="btn btn-outline-light mr-3"style="font-family: 'Handlee', cursive; "name=""id="" value="Edit">
                            <input type="hidden" name="review_id" value="<?php echo $row['review_id'];?>">
                            <input type="hidden" name="cust_name"value="<?php echo $row['cust_name'];?>">
                          </div>
                      </form>  
                    </div>
                    <div class="col-lg-3">
                        <form action="delete-review.php" method="POST">
                          <div class="form-group  text-center mb-4 col-lg-6">
                            <input type="submit" class="btn btn-outline-light" style="font-family: 'Handlee', cursive;" name="deleteMyReview" id="" value="Delete">
                            <input type="hidden" name="review_id"value="<?php echo $row['review_id'];?>">
                            <input type="hidden" name="cust_name"value="<?php echo $row['cust_name'];?>">
                          </div>
                      </form>   
                    </div>
                    <div class="col-lg-3"></div>
                    
                         
                  </div> 
             </div> 
        <?php
                       }
                }
        ?>

                
        <!-- Customer Reviews ends here -->
        <!-- ................................................ -->

    </main>
    <hr style="border:5px solid white ; border-bottom: none;">
    <!-- main ends here -->
    <!-- ................................................................................ -->
    <!-- footer starts here -->
    <hr style="border:5px solid white ; border-bottom: none;">
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
                <li class="mb-2"><a href="CustomerReview.php" style="text-decoration: none;color:aquamarine;"> Customer Reviews</a></li>
                <li class="mb-2"><a href="OwnersInfo.php" style="text-decoration: none;color:#F9FBF6;">Owners Info</a></li>
                <li class="mb-2"><a href="adminLogIn.php" style="text-decoration: none;color:#F9FBF6;">Admin</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    <!-- footer ends here -->
     <!-- ................................................................................ -->
    </div>
   
    <!-- ................................................................................................................  -->
    <!-- Bootstrap javascript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>