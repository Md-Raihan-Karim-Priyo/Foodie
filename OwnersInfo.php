<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owners Information Section</title>
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
        <div class="container text-dark">
            <!-- Header Starts here -->
           <?php 
           
            include("header.php");
           
           ?>
            <!-- Header ends here -->
            <!-- .............................................................................. -->
            <!-- main starts here -->
            <main>
                <hr style="border:5px solid white ; border-bottom: none;">
                <hr style="border:5px solid white ; border-bottom: none;">
                <!-- owners info section starts here -->
                <div class="bg-info">
                    <!-- Title of Leave a  Review Section -->
                    <div class="OwnersInfoTitle" >
                        <hr style="border:5px solid white ; border-bottom: none;">
                        <p ><h1 style="text-align: center; font-weight:bolder;font-family: 'Handlee', cursive;">Owner's Information</h1></p>
                        <hr style="border:5px solid white ; border-bottom: none;">
                    </div>
                    <!-- body of owners informtion section -->
                    <div class="OwnersInfoBody">
                        <!-- About Priyo -->
                        <div class="row">
                            <!-- image part -->
                            <div class="col-lg-4 col-sm-12 ">
                                <img class="img-fluid img-thumbnail rounded-circle my-auto mx-3 "src="images/priyo.jpg" alt="priyo">
                            </div>
                            <!-- information part -->
                            <div class="col-lg-8 col-sm-12 p-5" style="text-align: left;">
                                <p style="font-weight:bold; font-size:large;">Md.Raihan Karim Priyo</p>
                                <p style="font-weight:bold; font-size:large;">CEO & Founder,Foodie</p>
                                <p>Md.Raihan Karim Priyo founded Foodie.For 5 years ,it is running successfully. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Mollitia sed numquam perferendis dolores molestiae in voluptatem excepturi quae labore quibusdam quia, doloribus, blanditiis reiciendis id omnis quasi voluptatibus nisi culpa!
                                </p>
                                <p ><span style="font-weight:bold; font-size:large;">Home Address:  </span>
                               111, Arambagh,Motijheel,Dhaka-1000.</p>
                                <p><span style="font-weight:bold; font-size:large;">Contact no:</span> 01953560879</p>
                                <p><span style="font-weight:bold; font-size:large;">Email: </span> raihanpriyo473@gmail.com</p>
                            </div>
                        </div>
                        <hr style="border:5px solid aquamarine ; border-bottom: none;">
                        <hr style="border:5px solid aquamarine ; border-bottom: none;">
                        <!-- About Khairul -->
                        <div class="row">
                            <!-- image part -->
                            <div class="col-lg-4 col-sm-12 ">
                                <img class="img-fluid img-thumbnail rounded-circle my-auto mx-3 " src="images/Billal.jpg" alt="khairul">
                            </div>
                            <!-- information part -->
                            <div class="col-lg-8 col-sm-12 p-5" style="text-align: left;">
                                <p style="font-weight:bold; font-size:large;">Billal Ahmed Akash</p>
                                <p style="font-weight:bold; font-size:large;">CEO & Founder,Foodie</p>
                                <p>Khairul Islam Raju founded Foodie.For 5 years ,it is running successfully. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Mollitia sed numquam perferendis dolores molestiae in voluptatem excepturi quae labore quibusdam quia, doloribus, blanditiis reiciendis id omnis quasi voluptatibus nisi culpa!
                                </p>
                                <p ><span style="font-weight:bold; font-size:large;">Home Address:  </span>
                                             Jatrabari,Dhaka.</p>
                                <p><span style="font-weight:bold; font-size:large;">Contact no:</span> 01316883908</p>
                                <p><span style="font-weight:bold; font-size:large;">Email: </span> billaljnucse14@gmail.com</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- owners info section starts here -->
                <!-- ............................................. -->
            </main>
            <!-- main ends here -->
            <!-- .................................................................................... -->
            <hr style="border:5px solid white ; border-bottom: none;">
             <hr style="border:5px solid white ; border-bottom: none;">
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
                        <li class="mb-2"><a href="OwnersInfo.php" style="text-decoration: none;color:aquamarine;">Owners Info</a></li>
                        <li class="mb-2"><a href="adminLogIn.php" style="text-decoration: none;color:#F9FBF6;">Admin</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </footer>
            <!-- footer ends here -->
            <!-- ............................................................................................. -->
            <!-- ................................................................................................................  -->
        </div>
            
    <!-- Bootstrap javascript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    
    
    
</body>
</html>