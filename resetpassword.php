<?php
session_start();
if (isset($_SESSION["manager"])) {
   header("location: index.php");
    exit();
}
require('config/connect.php');

// Parse the log in form if the user has filled it out and pressed "Log In"
if (isset($_POST["email"]) && isset($_POST["number"])) {

	$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["email"]);
	 //filter everything but numbers and letters
    $mobile = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["number"]);
   // include "functions.php";
    $sql = mysqli_query($connection,"SELECT * FROM generaluser WHERE username='$manager' AND mobile='$mobile' LIMIT 1");
    $existCount = mysqli_num_rows($sql);
    if ($existCount == 1) {
	     while($row = mysqli_fetch_array($sql)){
             $id = $row["id"];
             $role = $row["role"]; 
            $username = $row["username"];

		 }
         
		  $_SESSION["id"] = $id;

		  $_SESSION["manager"] = $manager;
      $_SESSION["password"] = $password;
      $_SESSION["username"] = $username;

     ///$_SESSION["firstname"] = $firstname;
		 //if (  $_SESSION["id"] == 1){

		 	 header("location: changepassword.php");
		 //	}else {
		 	//	 $_SESSION["role"] = $role ;
		 	//	header("location: staffreport.php");
		 //	}
		 
         exit();
    } else {
		echo "<script>alert('Wrong Email or Phone Number');</script>";
		//exit();

	}
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login &mdash; </title>
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
</head>

<body>

  <!-- START: header -->

  <!--<div class="probootstrap-loader"></div>-->

  <header role="banner" class="probootstrap-header">
    <div class="container-fluid ">
      <a href="index.php" style="font-family:poppins;" class="probootstrap-logo pl-4" ><img src="img/logo1.png" style="height: 65px;width: 65px;"></a>

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
 
  <div class="container login-form">
    <div class="row mt-5">
      <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12  pl-0 pr-0 ">
        
         <div class="main-login main-center" style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);">
            <h2 class="text-center">Log In</h2>
            <form class="form-horizontal" method="post" action="resetpassword.php">

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Your Username" Required/>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-1">
                    <label for="country" class="cols-sm-2 control-label">Phone Number</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon  pr-4"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="number" id="mobile"  placeholder="Your Number" Required/>
                        </div>
                    </div>
                </div>

                <div class="form-group pt-3">
                    <!-- <button type="button" style="background-color: #c11021; color:#fff; font-weight: 700;" class="btn   btn-block login-button">Submit</button> -->
                    <input type="submit" name="submit" style="background-color: #c11021; color:#fff; font-weight: 700;" class="btn   btn-block login-button" value="Submit"/> 
                </div>
            </form>
            <p class="text-center">Don't have an account? <span><a href="register.php">Register</a></span></p>
           
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