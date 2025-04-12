<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order</title>

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
              <a href="breakfast.php"class="btn w-100 btn-outline-danger mb-3 ">Breakfast</a>
              <a href="lunch.php"class="btn w-100 btn-outline-primary mb-3">Lunch</a>
             
              

            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <a href="dinner.php"class="btn w-100 btn-outline-dark mb-3 ">Dinner</a>
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
        <!-- Cart section starts here -->
                <div class="container bg-success pb-2">
                    <div class="row ">
                        <div class="col-lg-12 text-center border rounded bg-info mb-2">
                            <h1>My Order</h1>

                        </div>
                        <div class="col-lg-9">
                                <table class="table table-success table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th scope="col">Serial No.</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Item Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    if(isset($_SESSION['cart'])){
                                        foreach($_SESSION['cart'] as $key => $value)
                                        {
                                            $sr= $key+1;
                                            echo"
                                                <tr>
                                                <td>$sr</td>
                                                <td>$value[Item_Name]</td>
                                                <td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'></td>
                                                <td>
                                                  <form action='manage_cart.php' method='POST'>
                                                    <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                    </form>
                                                </td>
                                                <td class='itotal'></td>
                                                <td>
                                                  <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                  </form>
                                                </td>
                                                </tr>
                                            
                                            ";
                                        }
                                    }
                                    ?>
                                </tbody>
                                </table>
                        </div>
                        <div class="col-lg-3">
                            <div class="border rounded bg-light p-4">
                                <h3>Grand Total:</h3>
                                <h5 class="text-end" id="gtotal"></h5>
                                <br>
                                <?php 
                                  if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0){                                
                                ?>
                                <form action="purchase.php" method="POST">
                                    <div class="form-group">
                                      <label  class="form-label">Full Name</label>
                                      <input type="text" name="fullname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label  class="form-label">Phone Number</label>
                                      <input type="number" name="phone_no" class="form-control" required >
                                    </div>
                                    <div class="form-group">
                                      <label  class="form-label">Address</label>
                                      <input type="text" name="address" class="form-control" required >
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Cash On Delivery
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_mode" value="bkash" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Bkash
                                    </label>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary w-100" name="purchase">Make Purchase</button>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Cart section ends here -->
        <!-- ................................................................ -->
       
    
        </main>
         <!-- Main ends here -->
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
                  <li class="mb-2"><a href="adminLogIn.php" style="text-decoration: none;color:#F9FBF6;">Admin</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
       
         <!-- footer ends here -->
    </div>
    
<!-- ................................................................................................................  -->
    <script>

        var gt=0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal()
        {
          gt=0;
          for(i=0;i<iprice.length;i++)
          {

            itotal[i].innerText =(iprice[i].value)*(iquantity[i].value);

            gt=gt+(iprice[i].value)*(iquantity[i].value);
          }
          gtotal.innerText=gt;
        }

        subTotal();

      
   </script>    
<!-- Bootstrap javascript links -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>