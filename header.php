<header>
            <!-- Navigation bar starts here -->
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="#navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <!-- Logo of kinakata.com -->
                      <a href="index.php" class="navbar-brand">
                              <img class="rounded-circle"
                                src="images/logoFinal.jpg"
                                alt="Foodie logo" style=" width:50px;">
                              Foodie
                            </a>
                        <!-- navbar menu starts here -->
                      <div class="collapse navbar-collapse d-lg-flex justify-content-end  " id="navbarTogglerDemo03">
                        <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link btn btn-sm btn-outline-primary" href="index.php" >Home</a></li>
                                <?php 

                                  include "config.php";
                                  session_start();

                                  if(!isset($_SESSION["custname"])){
                                  echo "<li class='nav-item'><a class='nav-link btn btn-sm  btn-outline-primary' href='Login&signup.php'>Log In</a></li>";
                                  }else{
                                    echo "<li class='nav-item'><a class='nav-link btn btn-sm  btn-outline-primary' href='LogOut.php'>Log Out</a></li>";
                                  }


                                  ?>
                                <li class="nav-item"><a class="nav-link btn btn-sm btn-outline-primary" href="Login&signup2.php">Sign Up</a></li>
                                <?php 
                                  $count=0;
                                  if(isset($_SESSION['cart']))
                                  {
                                    $count = count($_SESSION['cart']);
                                  }
                                ?>
                                <li class="nav-item"><a class="nav-link btn btn-sm btn-outline-primary" href="mycart.php">MyOrder(<?php echo $count?>)</a></li>
                                <li class="nav-item"><a class="nav-link btn btn-sm btn-outline-primary" href="AboutUS.php">About Us</a></li>
                          
                        </ul>
                        <!-- navbar menu ends here -->


                            <!-- search box starts here -->
                        <form class="d-flex" action="search.php" method="POST">
                          <input class="form-control me-2" type="search" name="search_term" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit" >Search</button>
                        </form>
                            <!-- search box ends here -->
                      </div>
                    </div>
                  </nav>
                        <!-- Navigation bar ends here -->

        </header>