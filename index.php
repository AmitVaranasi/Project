<?php session_start() ; ?> 
<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap core CSS
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    
    


    
    <title>Laundry management system</title>

  </head>

  <body> 

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">



        <a class="navbar-brand" href="#">Navbar</a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">



          <span class="navbar-toggler-icon"></span>



        </button>



      



        <div class="collapse navbar-collapse" id="navbarSupportedContent">



          <ul class="navbar-nav mr-auto">



            <li class="nav-item active">



              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>



            </li>



            <li class="nav-item">



              <a class="nav-link" href="#">Book Now</a>



            </li>



            <li class="nav-item ">



              <a class="nav-link " href="#" >



                About us



              </a>



              

            </li>



            <li class="nav-item">



              <a class="nav-link" href="#"  >Offers</a>



            </li>



          </ul>
          
          
          <form class="form-inline my-2 my-lg-0">



            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">



                signin/Register



            </button>



          </form> 



        </div>



      </nav>

      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

          <div class="carousel-item active" data-interval="10000">

            <img src="img/cover-image_1.png" class="d-block w-100" alt="...">

          </div>

          <div class="carousel-item" data-interval="2000">

            <img src="img/Why-Hire-Laundry-Service.jpg" class="d-block w-100" alt="...">

          </div>

          <div class="carousel-item">

            <img src="img/img3.jpg" class="d-block w-100" alt="..."  style='heigth:100px'>

          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">

          <span class="carousel-control-prev-icon" aria-hidden="true"></span>

          <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">

          <span class="carousel-control-next-icon" aria-hidden="true"></span>

          <span class="sr-only">Next</span>

        </a>

      </div>

      <div class="jumbotron">



        <h1 class="display-4">Laundry Kart</h1>



        <p class="lead">Laundry Kart is the premiere laundry service in Hyderabad. We use state-of-the-art equipment in the most impressive self-serve laundry facility you will have ever seen. It is custom-designed and built for your comfort and convenience. Laundry Kart provides customers a professional wash, dry and fold, Pickup and Delivery laundry service. You can rest assured that our experienced staff will be extremely careful with your order and impress you with our attention to details</p>



        <hr class="my-4">



        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>



        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>



      </div>

      <div style="padding: 50px;">

        <h2>HOW DOES IT WORK?</h2>

        <div class="card-deck">

          <div class="card text-white bg-info mb-3">

              <div class="card-body">

              <h5 class="card-title">1.Book your slot for doorstep pick up</h5>

              <p class="card-text">Select your available date and time and book an appointment with our executive. Our executive will come down to your doorstep.</p>

            </div>

          </div>

          <div class="card text-white bg-info mb-3">

           

            <div class="card-body">

              <h5 class="card-title">2.Tagging</h5>

              <p class="card-text">Get your clothes tagged by our executive to differentiate among the other clothes, every garment is tagged with a unique barcode which helps you in tracking the laundry process of each of your garments.</p>

            </div>          

          </div>

          <div class="card text-white bg-info mb-3">

            <div class="card-body">

              <h5 class="card-title">3.Pick up</h5>

              <p class="card-text">After the tagging process is done,The number of clothes picked up will be reflected on the app and our executive will pick up your laundry.</p>

            </div>

          </div>

          <div class="card text-white bg-info mb-3">

              <div class="card-body">

                <h5 class="card-title">4.Laundry process</h5>

                <p class="card-text">All your clothes are sorted based upon the fabric and washing instructions and are processed in our German equipment under our expert’s guidance.</p>

              </div>

            </div>

            <div class="card text-white bg-info mb-3">

              <div class="card-body">

                <h5 class="card-title">5.Delivery</h5>

                <p class="card-text">After a prior quality check, your clothes are packed and are moved to a nearby laundrykart store and is delivered at your doorstep.</p>

              </div>

            </div>

        </div>

        <video width="500" height="400" controls style="margin-left: 35%;">

          <source src="./y2mate.com - zipjet_uk_on_demand_laundry_dry_cleaning_in_london_0RQS5s3Mid8_360p.mp4" type="video/mp4">

          Your browser does not support the video tag.

        </video> 

      </div>

      <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 



        <div class="modal-dialog modal-dialog-centered" role="document">



          <div class="modal-content">



            <div class="modal-header">



              <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>



              <button type="button" class="close" data-dismiss="modal" aria-label="Close">



                <span aria-hidden="true">&times;</span>



              </button>



            </div>



            <div class="modal-body">



                <form action="register.php" action="post">



                    <div class="form-group">



                      <div class="form-group col-md-6">



                        <label for="inputEmail4">Email</label>



                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">



                      </div>


                      <div class="form-group">
                      
                        <div class="form-group col-md-6">
                            
                          <label for="inputUsername">Username</label>
                          <input type="text" class="form-control" id="inputUsername" placeholder="Username"> 




                        </div>
 
                      </div>
                    </div>  
                  <div class=form-group>
                      <div class="form-group col-md-6">



                        <label for="inputPassword4">Password</label>



                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">



                      </div>



                      <div class="form-group col-md-6">



                        <label for="inputPassword4">ConfirnPassword</label>



                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">



                      </div>



                    </div>
                  </div>
                



                    <div class="form-group">

                    <div class="form-group col-md-12">

                      <label for="inputAddress">Address</label>



                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>


                    </div>
                    -->

                    <!-- <div class="form-row">



                      <div class="form-group col-md-6">



                        <label for="inputCity">City</label>



                        <input type="text" class="form-control" id="inputCity">



                      </div>
                    -->
                  <!-- <div class="form-group">
                    <div class="col text-center">
                      <button type="submit" class="btn btn-primary center-block">Register</button>
                      <form class="form-inline my-2 my-lg-0">
                      <button type="submit" class="btn btn-primary" data-toggle="modal1" data-target="#exampleModalCenter1">
                        Sign Up
                      </button>
                     </form> 
                     
                    </div>

                    
                  </div> 


                   </form> -->



            <!-- </div> -->


            <!-- 
            <div class="modal-footer">



              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>



              <button type="button" class="btn btn-primary">Save changes</button>



            </div> -->


<!-- 
          </div>



        </div>



      </div> -->
  

      <!--Modal: Login / Register Form-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <?php 
                if(isset($_SESSION['user'])){ ?>
                  <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                    <button type ="submit" class='btn btn-success'>Sign Out </button> 
                  </form>



             <?php  }else{  ?>
             
             <form action="login.php" method="post">
                
                <div class="md-form mb-5">
                  <i class="fa fa-user prefix grey-text"></i>
                  <input type="text" id="orangeForm-name" class="form-control validate" name="username" placeholder= "Username" required>
                  <!-- <label data-error="wrong" data-success="right" for="orangeForm-name">Username</label> -->
                </div>

                  <div class="md-form form-sm mb-4">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="modalLRInput11" class="form-control form-control validate" name="password" placeholder="Password" required>
                    <!-- <label data-error="wrong" data-success="right" for="modalLRInput11">Password</label> -->
                  </div>
                  <div class="text-center mt-2">
                    <button type="submit" class="btn btn-success" name="signin">Log in <i class="fas fa-sign-in ml-1"></i></button>
                    
                  </div>
             
              </form>
              <?php $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

              if(strpos($fullurl,"signup=err") == true){
                echo "<p style='color:red' >Invalid username or Password </p>";
              }
              ?>
             <?php } ?>
              
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
            <?php $unameErr = " "; ?>
            <form method="post" action="login.php">
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-user prefix grey-text"></i>
                  <input type="text" id="orangeForm-name" class="form-control validate" name="username" required  placeholder= "Username">
                  <label> <?php echo $unameErr; ?> </label>
                </div>
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" id="modalLRInput12" class="form-control form-control validate" name="mail"required  placeholder="Your Email">                 
                </div>

                <div class="md-form form-sm mb-5">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="modalLRInput13" class="form-control form-control validate" name="pwd" required placeholder="Password">                 
                </div>

                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="modalLRInput14" class="form-control form-control validate" name="cpwd" required placeholder=" Confirm Password">               
                </div>

                <div class="md-form form-sm mb-5">
                  <i class="fas fa-user prefix "></i>                 
                  <textarea class= "form-control"  rows="3" placeholder="  Address" required  name="ads"></textarea> 
                </div>

                <div class="text-center form-sm mt-2">
                  <button type = "submit" class="btn btn-success" name="reg">Register <i class="fas fa-sign-in ml-1"></i></button>
                </div>
              </form>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>




      <!-- <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" aria-hidden="true">



        <div class="modal-dialog modal-dialog-centered" role="document">



          <div class="modal-content">
            <div class="modal-body">
              <?php 
              if(isset($_SESSION['user'])){ ?>
                <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                  <button type ="submit" class='btn btn-success'>Sign Out </button> 
                </form>



             <?php  }else{  ?>
              <form class="form-inline my-2 my-lg-0"action="login.php" method="post">
                  <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name="password">
                  </div>
                  <button type ="submit" class='btn btn-success'>Sign in</button>
              </form>
            
              <?php } ?>
            
            </div>
          </div>
        </div>
      </div>     -->


    </body>

</html>