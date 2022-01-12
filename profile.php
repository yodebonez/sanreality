<?php
session_start();
require('config/connect.php');
if (!isset($_SESSION["manager"])) {
    header("location: login.php");
    exit();
   }

 // echo  $_SESSION["id"] 

//    if (isset( $_SESSION["id"] )) {
//        $id =  $_SESSION["id"] ;
//    }

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

   echo $id . "this is my id";

   $sql = "SELECT * FROM applicant where id = '$id'";

   $result = mysqli_query($connection, $sql);

   if (mysqli_num_rows($result) > 0) {
       // output data of each row
       while($row = mysqli_fetch_assoc($result)) {

        $firstname = $row["firstname"];
        $Surname = $row["surname"];
        $email = $row["email"];
         $dob = $row["dob"];
          $address = $row["address"];
           $qualification = $row["qualification"];
               $mobile = $row["mobile"];
               $sex = $row["sex"];
               $profession = $row["cprofession"];
               $auditioncenter = $row["auditioncenter"];
                $picture = $row["picture"];




    }
} else {
    echo "0 results";
  }

//mysqli_close($connection);

         ?>     

   

?>
<!DOCTYPE html>

<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile &mdash; </title>
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

</head>

<body>
    <header role="banner" class="probootstrap-header">
        <div class="container-fluid ">
            <a href="index.php" style="font-family:poppins;" class="probootstrap-logo pl-4"><img src="img/logo1.png"
                    style="height: 65px;width: 65px;"></a>

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

        <?php   
                 if (isset($_SESSION["username"])){  ?>

<li><a class="btn btn-sm btn-outline-secondary" type="button"
              href="login.php"><small><b>Wellcome <?php  echo  $_SESSION["username"]; ?></b></small></a></li>

              <li><a class="btn btn-sm " type="button" href="logout.php"
              style="background-color: #c11021; color: #fff;"><small><b>LOGOUT
                  </b></small></a>
          </li>

              <?php } else{  ?>
          <li><a class="btn btn-sm btn-outline-secondary" type="button"
              href="login.php"><small><b>LOGIN</b></small></a></li>
          <li><a class="btn btn-sm " type="button" href="register.php"
              style="background-color: #c11021; color: #fff;"><small><b>SIGN
                  UP</b></small></a>
          </li>
          <?php   }    ?>
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

              <?php   
                 if (isset($_SESSION["username"])){  ?>

            <li><small><b>Welcome  <?php  echo  $_SESSION["username"]; ?> </b></small></li>

            <li><a href="logout.php" class="btn btn-sm btn-outline-secondary px-2"
                type="button"><small><b>LOGOUT</b></small></a></li>

                <?php } else{  ?>

                  <li><a href="login.php" class="btn btn-sm btn-outline-secondary px-2"
                type="button"><small><b>LOGIN</b></small></a></li>



            <li><a href="register.php" class="btn btn-sm " type="button"
                style="background-color:#c11021; color: #fff;"><small><b>SIGN
                    UP</b></small></a>
            </li>

            <?php   }    ?>
          </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container profileBg">

        <div class="row mt-5" style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);">
            <div class="col-sm-3 mt-5 justify-content-center">
                <!--left col-->

                <div class="text-center" style="width: 80%; margin: auto;">
                    <?php

                  echo "<img src='images/". $picture ."' class='avatar img-circle img-thumbnail' alt='avatar'>"

                    ?>
                    <div style="width: 100%; margin: auto;">
                      <!--  <h5 class="text-center">Upload a photo...</h5>
                        <input type="file" class="center-block file-upload ">  -->
                    </div>
                </div>

            </div>
            <!--/col-3-->
            <div class="col-sm-9 my-5">
                <ul class="nav nav-tabs ">
                    <li class="active"><a data-toggle="tab" href="#home"><b>Personal Details</b></a></li>
                  <!--  <li><a data-toggle="tab" href="#messages"><b>Security</b></a></li>
                    <!--<li><a data-toggle="tab" href="#settings">Security</a></li>-->
                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="home">

                        <!--<form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>First name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="first_name" id="first_name"
                                        placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Last name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="last_name" id="last_name"
                                        placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone">
                                        <h4>Phone</h4>
                                    </label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile">
                                        <h4>Mobile</h4>
                                    </label>
                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                        placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Email</h4>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Location</h4>
                                    </label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere"
                                        title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Password</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Verify</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password2" id="password2"
                                        placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn  btn-success pull-right" type="submit"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Update</button>

                                </div>
                            </div>
                        </form>-->

                        <form method="post" action="#">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="cols-sm-2 control-label">First name</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-user fa"
                                                    aria-hidden="true"></i></span>
                                               
                                            <input type="text" class="form-control" value="<?php echo  $firstname  ?>" name="name" id="name"
                                                placeholder="Your first name" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="surname" class="cols-sm-2 control-label">Surname</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-user fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" value="<?php echo $Surname   ?>" name="surname" id="surname"
                                                placeholder="Your surname" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label for="tel" class="cols-sm-2 control-label">Sex</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-phone-square fa"
                                                    aria-hidden="true"></i></span>
                                    <input type="text" class="form-control"  name="sex" value="<?php echo $sex ?>" id="tel"
                                                placeholder="" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tel" class="cols-sm-2 control-label">Tel</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-phone-square fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" value="<?php echo $mobile   ?>" name="tel" id="tel"
                                                placeholder="Your phone " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email" class="cols-sm-2 control-label">Email</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-envelope fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" value="<?php echo $email    ?>" name="email" id="email"
                                                placeholder="Your email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date" class="cols-sm-2 control-label">Date Of Birth</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-calendar fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" value="<?php echo $dob ?>" name="date" id="date"
                                                placeholder="Your date of birth" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address" class="cols-sm-2 control-label">Address</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-book fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" value="<?php echo $address ?>" name="address" id="name"
                                                placeholder="Your address" readonly />
                                        </div>
                                    </div>
                                </div>
                               <div class="form-group col-md-6">
                                    <label for="name" class="cols-sm-2 control-label">Qualification</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-book fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="" value="<?php echo $qualification  ?>" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label for="name" class="cols-sm-2 control-label">Current Profession</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-book fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="" value="<?php echo $profession  ?>" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name" class="cols-sm-2 control-label">Relevant Experience</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-book fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="skills" class="cols-sm-2 control-label">Special Skills</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-book fa"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="skills" id="skills"
                                                placeholder="Your experience" />
                                        </div>
                                    </div>
                                </div>
                               <div class="form-group col-md-6">
                                    <label for="skills" class="cols-sm-2 control-label">Audition Center</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon  pr-4"><i class="fa fa-book fa"
                                                    aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="skills" id="skills"
                                                placeholder="Your experience" value="<?php echo $auditioncenter   ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <!--
                            <div class="form-group ">
                                <button type="button" style="background-color: #c11021; color:#fff; font-weight: 700;"
                                    class="btn   btn-block login-button">Update</button>
                            </div>
                       
                            -->

                        </form>

                    </div>
                    <!--/tab-pane-->
                    <div class="tab-pane mx-3" id="messages">
                        <form class="form-horizontal" method="post" action="#">

                            <div class="form-group">
                                <label for="country" class="cols-sm-2 control-label">Old Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon  pr-4"><i class="fa fa-lock"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="mobile" id="mobile"
                                            placeholder="Your Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country" class="cols-sm-2 control-label">New Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon  pr-4"><i class="fa fa-lock"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="mobile" id="mobile"
                                            placeholder="Your Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country" class="cols-sm-2 control-label">Confirm Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon  pr-4"><i class="fa fa-lock"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="mobile" id="mobile"
                                            placeholder="Your Password" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <button type="button" style="background-color: #c11021; color:#fff; font-weight: 700;"
                                    class="btn   btn-block login-button">Submit</button>
                            </div>
                        </form>

                    </div>
                    <!--/tab-pane-->
                    <div class="tab-pane" id="settings">



                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>First name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="first_name" id="first_name"
                                        placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Last name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="last_name" id="last_name"
                                        placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone">
                                        <h4>Phone</h4>
                                    </label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile">
                                        <h4>Mobile</h4>
                                    </label>
                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                        placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Email</h4>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Location</h4>
                                    </label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere"
                                        title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Password</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Verify</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password2" id="password2"
                                        placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn  btn-success pull-right" type="submit"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->




    <footer class="mt-5" style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);
">
        <div class="container">
            <div class="col-md-12 py-4">
                <p class="text-center " style="color: #d3d3dd;"><small>Powered by </small><span
                        class="text-danger"><b>Diipsolution</b></span></p>
                <p class="text-center"><small style="font-size: 13px;"> <a href="#">Terms & Conditions |</a> <a
                            href="#">Privacy
                            & Cookie Policy |</a> <a href="#">Responsible Disclosure Policy |</a> <a href="#"> Copyright
                            | Open Source
                            |</a> <a href="#"> Contact Us | Scam alert</a></small></p>
            </div>

        </div>
    </footer>


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