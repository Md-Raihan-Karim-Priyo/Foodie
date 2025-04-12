<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contuct us</title>
    <!-- Links part -->
  <!--Bootstrap CDN-->
  <link rel="icon" type="image/x-icon" href="images/logoFinal.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="ContactUs.css">
    
</head>
<body>
    <!--Header starts here-->
    <?php 
      include("header.php");
    
    ?>
      <!--Header ends here-->
      <!-- ........................................................................ -->
      <!-- main starts here -->
      <main>
        <section class="contact" style="background-color: #055160;">
          <div class="content">
              <h2>Contact us</h2>
              <p> We are always here to help you and ensure customer satisfaction. If you have any queries,
                please call our helpline number or send message.
              </p>
          </div>
          <div class="container">
              <div class="contactInfo">
                  <div class="box">
                      <div class="icon"></div>
                      <div class="text">
                          <h3> Address </h3>
                          <p>356 Agar khan road,<br>Rohitpur,Dhaka-345</p>
                   </div>
                   <div class="box">
                       <div class="icon"></div>
                       <div class="text">
                           <h3>Phone</h3>
                           <p>+986453567887</p>
                       </div>
                  </div>
                  <div class="box">
                    <div class="icon"></div>
                     <div class="text">
                       <h3>Email</h3>
                       <p>foodie@gmail.com</p>
                     </div>
                   </div>
               </div>
               <div class="contactForm">
                   <form action="save-cust-msg.php" method="POST" >
                       <h2>Send Message</h2>
                       <div class="inputBox">
                          <input type="text" name="Contact_name" required="required">
                          <span>Full Name</span>
                       </div>
                       <div class="inputBox">
                           <input type="text" name="Contact_phone" required="required">
                           <span>Phone No.</span>
                        </div>
                        <div class="inputBox">
                           <textarea required="required" name="Contact_messege"></textarea>
                           <span>Type your message...</span>
                        </div>
                        <div class="inputBox">
                           <input type="submit" name="Contact_send" value="Send">
                        </div>
                   </form>
               </div>
   
                
          </div>
   
   
   
       </section>
      </main>
      <!-- main ends here -->
      
      <!-- ............................................................ -->
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
                <li class="mb-2"><a href="ContactUs.php" style="text-decoration: none;color:aquamarine">Contact Us</a></li>
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
       <!-- ........................................................................... -->
       <!-- Bootstrap javascript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    
</body>
</html>