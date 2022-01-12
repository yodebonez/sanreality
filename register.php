<?php
   session_start();
   require('config/connect.php');
   
?>
<!DOCTYPE html>

<php lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register &mdash; </title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet">-->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/custom.css">


  <!--[if lt IE 9]>
      <script src="js/vendor/php5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
     <script> 
          
          // Function to check Whether both passwords 
          // is same or not. 
          function checkPassword(form) { 
              password1 = form.password.value; 
              password2 = form.confirmpassword.value; 

              // If password not entered 
              if (password1 == '') 
                  alert ("Please enter Password"); 
                    
              // If confirm password not entered 
              else if (password2 == '') 
                  alert ("Please enter confirm password"); 
                    
              // If Not same return False.     
              else if (password1 != password2) { 
                  alert ("\nPassword did not match: Please try again...") 
                  return false; 
              } 

              // If same return True. 
             
          } 
      </script> 
</head>

<body>

  <!-- START: header -->

  <!--<div class="probootstrap-loader"></div>-->

  <header role="banner" class="probootstrap-header">
    <div class="container-fluid ">
      <a href="#" style="font-family:poppins;" class="probootstrap-logo pl-4" ><img src="img/logo1.png" style="height: 65px;width: 65px;"></a>

      <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
      <div class="mobile-menu-overlay"></div>
      <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav pl-lg-2" style="font-family: poppins;">
              <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="news.php">News</a></li>
         <!-- <li><a href="application.php">Audition</a></li> -->
          <li><a href="contestant.php">Endorsement</a></li>
         <!-- <li><a href="brand.php">Drafting</a></li>  -->
          <!-- <li><a href="profile.php">Profile</a></li> -->
          <li><a href="faq.php">faqs</a></li>
           <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <ul class="probootstrap-right-nav hidden-xs pt-3">
          <li><a class="btn btn-sm btn-outline-secondary" type="button"
              href="login.php"><small><b>LOGIN</b></small></a></li>
          <li><a class="btn btn-sm " type="button" href="register.php"
              style="background-color: #c11021; color: #fff;"><small><b>SIGN
                  UP</b></small></a>
          </li>

        </ul>
        <div class="extra-text visible-xs">
          <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
          <h5></h5>
          <p></p>
          <h5>Connect</h5>
          <ul class="social-buttons">
            <!--<li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>-->
            <li><a href="login.php" class="btn btn-sm btn-outline-secondary px-2"
                type="button"><small><b>LOGIN</b></small></a></li>
            <li><a href="register.php" class="btn btn-sm " type="button"
                style="background-color:#c11021; color: #fff;"><small><b>SIGN
                    UP</b></small></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  

 


  <!-- Registration form-->
  <br>
  <div class="container bg-form2">
    <div class="row mt-5">
      <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12  pl-0 pr-0 ">
        
         <div class="main-login main-center" style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);">
            <h2 class="text-center">Create Account</h2>
            <form onSubmit = "return checkPassword(this)" class="form-horizontal" method="post" action="register.php">
                
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mobile" class="cols-sm-2 control-label required">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="mobile"  placeholder="Your username"/>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="mobile" class="cols-sm-2 control-label required">Mobile</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Your mobile"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nationality" class="cols-sm-2 control-label">Nationality</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <div class="input-group">
                                <span class="input-group-addon  pr-4"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="nationalty" id="mobile"  placeholder="Your Nationality"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="mobile"  placeholder="Your Password"/>
                        </div>
                    </div>
                </div>
                
                
                 <div class="form-group">
                    <label for="country" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="confirmpassword" id="mobile"  placeholder="Your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <!-- <button type="button" style="background-color:#c11021; color:#fff; font-weight: 700;" class="btn   btn-block login-button">Submit</button> -->

                    <input type="submit" name="submit" value="submit" style="background-color:#c11021; color:#fff; font-weight: 700;" class="btn   btn-block login-button">
                </div>
            </form>

            <?php

        If(isset($_POST['submit'])){


        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $username = $_POST["username"];                    
        $nationalty = $_POST["nationalty"];

        $query = mysqli_query($connection,"SELECT email,mobile FROM generaluser WHERE email ='$email' OR mobile = '$mobile'");

    if (mysqli_num_rows ($query) > 0)

    // if(mysqli_fetch_array($query) !== false)
      {
          ?>

<div class="alert alert-warning alert-dismissible">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong>Warning!</strong> <?php echo    $email ?> has been registered before
</div>

    <?php  
        }
      else
      {



          $sql = "INSERT INTO generaluser (name,email,username ,mobile,nationalty,password)
    VALUES ('$name',' $email','$username','$mobile',' $nationalty','$password')";

    if (mysqli_query($connection, $sql)) {
        //echo "Voting Casted successfully by " . $name;
        ?>

          
      <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Success!</strong>  <?php echo    $email ?> has been Created Sucessfully
            </div>
                
            
          <?php
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($connection);
      }
          
        }

      mysqli_close($connection);
      } 

      ?>

   

       



            <p class="text-center">Already have ccount? <span><a href="login.php">Log In </a></span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Registration form-->


<!-- Footer -->
<footer class="mt-5">
    
  </footer>
<!-- Footer End -->  

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.min.js"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>-->
  <script src="js/custom.js"></script>


</body>

    </html>