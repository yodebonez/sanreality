<?php
   session_start();
   require('config/connect.php');
   //echo  $_SESSION["username"];
            
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Super Affiliate Nigeria &mdash; </title>
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
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">

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
  <!-- END: header -->
  <!--Slider-->
  <section class="sliderSection">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 img-fluid" src="img/Banner8.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-fluid" src="img/Banner2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-fluid" src="img/Banner1.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!--End Slider-->


  <!-- SEARCH BAR AND SOCIAL ICON-->
  <div class="probootstrap-section mx-md-5 mx-sm-2">
    <h1 class="ml-md-5 ml-sm-1" id="sanHeader">SUPER AFFILIATE NIGERIA
      <span class=" ml-md-3 ml-xs-0 py-1 px-2">REALITY TV SHOW</span></h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 py-1 box  ">
          <div class="col-md-5 col-sm-12 col-xs-12">
            <!-- Search button -->
            <div class="input-group ">
              <input type="text" class="form-control" placeholder="Search...">
              <div class="input-group-append">
                <button class="btn btn-success " type="button"><i class="icon-search "
                    style="font-weight: 700; color: #000;"></i></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-12 col-xs-12" id="socialIcons">
            <!-- Social Icon -->
            <ul class="probootstrap-right-nav pt-1">
              <li data-toggle="tooltip" data-placement="left" title="Twitter"><a href="#"><i
                    class="icon-twitter text-white "></i></a></li>
              <li data-toggle="tooltip" data-placement="left" title="Facebook"><a href="#"><i
                    class="icon-facebook text-white"></i></a></li>
              <li data-toggle="tooltip" data-placement="left" title="Instagram"><a href="#"><i
                    class="icon-instagram2 text-white"></i></a></li>

              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- END SEARCH BAR AND SOCIAL ICON-->
  <div class="probootstrap-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 ">
          <nav class="">
            <div class="nav nav-tabs " id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                aria-controls="nav-home" aria-selected="true">HOME</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                aria-controls="nav-profile" aria-selected="false">VOTE</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                aria-controls="nav-contact" aria-selected="false">PHOTOS</a>
              <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="false">NEWS </a>
              <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="false">VIDEOS</a>
              <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="false">JUDGES</a>
              <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="false">AFFILIATE</a>
              <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="false">LIVE-STREAM</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Slider-->
  <div class="text-right ct-box-slider__arrows clearfix pt-md-5 ">
    <a id="ct-js-box-slider--next" type="button" class="pull-right slick-arrow"><i class="icon-chevron-right "></i></a>
    <a id="ct-js-box-slider--prev" type="button" class="pull-right slick-arrow"><i class="icon-chevron-left "></i></a>
  </div>


  <?php
  
 $sql = "SELECT * FROM gallery WHERE status='publish'";



 $result = mysqli_query($connection, $sql);

 if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result)) {

      $video = $row['video'];

     // echo $video;


      

  ?> 

 
 

  <div class="ct-box-slider ct-js-box-slider" id="hideOnmobile">
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-6 pr-1 pl-1">

            <?php

          echo "<video width='800' height='500' controls><source src='admin/videoandimages/".$video."' type='video/mp4'></video>";

            ?>
           
              <!-- <iframe id="videoLink" src="https://youtu.be/obTAYQ-bpOE?t=13" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
            </div>

         

            <div class="col-xs-12 col-sm-12 col-md-6   pl-1 pb-0">
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
              <!-- <img src="admin/videoandimages/2.png" class="responsive1" width="500" height="330"> -->

                
                <?php
               // echo '<img src="data:image;base64,'. base64_encode($row['firstimage']) .'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['firstimage']."' width='500' height='330' class='responsive1'>";

                ?>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
                <!-- <img src="img/3.png" class="responsive1"> -->

                <?php
               // echo '<img src="data:image;base64,'. base64_encode($row['secondimage']) .'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['secondimage']."' width='500' height='330' class='responsive1'>";

                ?>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1  ">
                <!-- <img src="img/4.png" class="responsive1"> -->

                <?php
               // echo '<img src="data:image;base64,'. base64_encode($row['thirdimage']) .'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['thirdimage']."' width='500' height='330' class='responsive1'>";

                

                ?>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1  ">
                <!-- <img src="img/1.png" class="responsive1"> -->

                <?php
               // echo '<img src="data:image;base64,'. base64_encode($row['fourthimage']) .'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['fourthimage']."' width='500' height='330' class='responsive1'>";

                ?>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-6 pr-1 pl-1">


            <?php

echo "<video width='400' height='500' controls><source src='admin/videoandimages/".$video."' type='video/mp4'></video>";
?>
          
              <!-- <iframe id="videoLink" src="https://youtu.be/obTAYQ-bpOE" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6   pl-1 pb-0">
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
                <!-- <img src="img/2.png" class="responsive1" width="500" height="330"> -->

                <?php
               // echo '<img src="data:image;base64,'. base64_encode($row['firstimage']) .'" width="500" height="330" class="responsive1">';

                echo "<img src='admin/videoandimages/".$row['firstimage']."' width='500' height='330' class='responsive1'>";

                ?>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
                <!-- <img src="img/3.png" class="responsive1"> -->

                <?php
              //  echo '<img src="data:image;base64,'. base64_encode($row['secondimage']) .'" width="500" height="330" class="responsive1">';

                echo "<img src='admin/videoandimages/".$row['secondimage']."' width='500' height='330' class='responsive1'>";

                ?>


              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1  ">
                <!-- <img src="img/4.png" class="responsive1"> -->

                <?php
              //  echo '<img src="data:image;base64,'.base64_encode($row['thirdimage']).'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['thirdimage']."' width='500' height='330' class='responsive1'>";

                ?>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1  ">
                <!-- <img src="img/1.png" class="responsive1"> -->
                <?php
              //  echo '<img src="data:image;base64,'.base64_encode($row['fourthimage']).'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['fourthimage']."' width='500' height='330' class='responsive1'>";

                ?>

              </div>
            </div>

          </div>
        </div>
        <!--<div class="row">
          <div class="col-md-12">
            <div class="col-md-3  pl-1 pb-0 pr-1">
              <div class="col-xs-12 col-sm-12 col-md-12 pt-0 pl-1 pb-2 pr-1 ">
                <img src="img/1.png" class="responsive1" width="500" height="330">

              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 pt-0 pl-1 pb-2 pr-1 ">
                <img src="img/1.png" class="responsive1">

              </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 pr-1 pl-1 ">
              <iframe width="100%" height="508px" src="https://www.youtube.com/embed/Cn7j6OgWeSs" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
            <div class="col-md-3   pl-1 pb-0">
              <div class="col-xs-12 col-sm-12 col-md-12 pt-0 pl-1 pb-2 pr-1 ">
                <img src="img/1.png" class="responsive1" width="500" height="330">

              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 pt-0 pl-1 pb-2 pr-1 ">
                <img src="img/1.png" class="responsive1">

              </div>

            </div>

          </div>
        </div>-->
      </div>
    </div>

    <div class="item">
      <div class="container-fluid">
        <!--<div class="row">
          <div class="col-md-12">
            <div class="col-md-6  pl-1 pb-0 pr-1">
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
                <img src="img/1.png" class="responsive1" width="500" height="330">

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
                <img src="img/1.png" class="responsive1">

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-1 pr-1  ">
                <img src="img/1.png" class="responsive1">

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-1 pr-1  ">
                <img src="img/1.png" class="responsive1">

              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 pr-1 pl-1 ">
              <iframe width="100%" height="508px" src="https://www.youtube.com/embed/Cn7j6OgWeSs" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>-->

        <div class="row">
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-6 pr-1 pl-1">

            <?php

echo "<video width='400' height='500' controls><source src='admin/videoandimages/".$video."' type='video/mp4'></video>";
?>
          
              <!-- <iframe id="videoLink" src="https://www.youtube.com/embed/Cn7j6OgWeSs" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6   pl-1 pb-0">
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
                <!-- <img src="img/1.png" class="responsive1" width="500" height="330"> -->

                <?php
              //  echo '<img src="data:image;base64,'.base64_encode($row['firstimage']).'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['firstimage']."' width='500' height='330' class='responsive1'>";

                ?>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1 ">
                <!-- <img src="img/3.png" class="responsive1"> -->

                <?php
               // echo '<img src="data:image;base64,'.base64_encode($row['secondimage']).'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['secondimage']."' width='500' height='330' class='responsive1'>";

                ?>


              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1  ">
                <!-- <img src="img/4.png" class="responsive1"> -->

                <?php
              //  echo '<img src="data:image;base64,'.base64_encode($row['thirdimage']).'" width="500" height="330" class="responsive1">'

                
                echo "<img src='admin/videoandimages/".$row['thirdimage']."' width='500' height='330' class='responsive1'>";

                ?>


              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 pt-0 pl-1 pb-2 pr-1  ">
                <!-- <img src="img/1.png" class="responsive1"> -->

                <?php
               // echo '<img src="data:image;base64,'.base64_encode($row['fourthimage']).'" width="500" height="330" class="responsive1">'

                echo "<img src='admin/videoandimages/".$row['fourthimage']."' width='500' height='330' class='responsive1'>";

                ?>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="ct-box-slider ct-js-box-slider" id="showOnmobile">
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12 pr-1 pl-1">

            <?php

echo "<video width='400' height='500' controls><source src='admin/videoandimages/".$video."' type='video/mp4'></video>";
?>
         
              <!-- <iframe id="videoLink" src="https://youtu.be/obTAYQ-bpOE?t=13" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12 pr-1 pl-1">

            <?php

echo "<video width='800' height='500'  controls><source src='admin/videoandimages/".$video."' type='video/mp4'></video>";
?>
           
              <!-- <iframe id="videoLink" src="https://youtu.be/obTAYQ-bpOE?t=13" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="item">
      <div class="container-fluid">


        <div class="row">
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-6 pr-1 pl-1">

            <?php

echo "<video width='400' height='500' controls><source src='admin/videoandimages/".$video."' type='video/mp4'></video>";
?>
       
              <!-- <iframe id="videoLink" src="https://youtu.be/obTAYQ-bpOE?t=13" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php
      }
  } else {
      echo "0 results";
    }

  //mysqli_close($connection);
    

  ?> 




  <!--END section -->

  <div class="container-fluid mt-5 mb-0">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="col-md-7 ">
          <img src="img/Banner10.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <!--Activties-->
  <div class="container-fluid">


    <div class="text-right ct-box-slider__arrows clearfix pt-md-3 ">
      <h2 class=" pull-left" style="font-family:poppins; font-weight: 600; color:#cccbcb">TRENDING ACTIVITIES</h2>
      <a id="ct-js-box-slider--next1" type="button" class="pull-right slick-arrow"><i
          class="icon-chevron-right "></i></a>
      <a id="ct-js-box-slider--prev1" type="button" class="pull-right slick-arrow"><i
          class="icon-chevron-left "></i></a>
    </div>
    <div style=" background: linear-gradient(to top, #2D2E33 30%,  #2D2E33 70%,   #2D2E33 100%);">
      <div class="ct-box-slider1 ct-js-box-slider1 pt-4">
        <div class="item">
          <div class="container-fluid">
            <div class="row">

              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption>
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/1a.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/4.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="pt-0">
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item ">
                          <h4 class="sh-list-icon ">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/2.png" class="figure-img  rounded responsive2" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2" id="list-0huDKAnfzS">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-file-text-o text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2" id="list-0huDKAnfzS">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/4.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-file-text-o text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Item2-->
        <div class="item">
          <div class="container-fluid">
            <div class="row">

              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption>
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate Reality Tv Show
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4  col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate Reality Tv Show
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/4.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="pt-0">
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item ">
                          <h4 class="sh-list-icon ">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate Reality Show
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/2.png" class="figure-img  rounded responsive2" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2" id="list-0huDKAnfzS">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-file-text-o text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate Reality Tv Show .....
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate Reality Tv Show
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/4.png" class="figure-img responsive2 rounded" width="500" height="160">
                    <figcaption class="">
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-file-text-o text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Super Affiliate Reality Tv
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SHARE YOUR THOUGHT-->
  <div class="container-fluid">
    <div class="row pt-5">
      <div id="shareText" class="col-md-12">
        <p class="pl-4">Social Media!</p>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 box pl-0 pr-0 ">
        <div class="col-md-2 col-sm-12 col-xs-12 pl-0 py-2" id="shareButton">
          <p>Social Media</p>
        </div>
        <div class="col-md-9 col-md-offset-1 pb-0 pr-1 py-2" id="share">
          <div class="col-xs-3">
            <p><a href="https://web.facebook.com/officialsan77" class="text-white"><i class="fa fa-facebook  pr-2"></i> Facebook</a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="https://twitter.com/officialsan77/" class="text-white"><i class="fa fa-twitter  pr-2"></i>Twitter</a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="https://www.instagram.com/officialsan77/" class="text-white"><i class="fa fa-instagram  pr-2"></i> Instagram</a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="https://www.youtube.com/channel/UClEFP3GiWmd2UgINS9ueZRQ?view_as=subscriber" class="text-white"><i class="fa fa-youtube-play  pr-2"></i> Youtube</a>
            </p>
          </div>
        </div>
        <div class="col-md-12 col-md-offset-1 pb-0 pr-1 py-2" id="shareresponsive">
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-facebook  pr-2"></i></a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-twitter  pr-2"></i></a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-instagram  pr-2"></i></a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-youtube-play  pr-2"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TIMELINE-->

  <div class="container-fluid">


    <div class="text-right ct-box-slider__arrows clients-slider clearfix pt-md-5 ">
      <h2 class=" pull-left" style="font-family:poppins; font-weight: 600; color:#cccbcb">TIMELINE ACTIVITIES</h2>
      <a type="button" class="prev pull-right slick-arrow"><i class="icon-chevron-right "></i></a>
      <a type="button" class="next pull-right slick-arrow"><i class="icon-chevron-left "></i></a>

    </div>
    <div style=" background: linear-gradient(to top, #2D2E33 30%,  #2D2E33 70%,   #2D2E33 100%);">
      <div class="container-fluid">
        <div class="row">
          <div>

          </div>

        </div>
      </div>
      <div class=" pt-0">

        <div class="item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="clients-slider pt-3">


                  <span class="line"></span>
                  <div id="clients-slider" class="owl-carousel">
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">40</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">39</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">38</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">37</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">36</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">35</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">34</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">33</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">32</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">31</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">30</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">29</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">28</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">27</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">26</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">25</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">24</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">23</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">22</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">21</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">20</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background:#484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white py-2">19</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">18</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">17</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">16</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">15</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">14</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">13</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">12</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">11</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">10</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">9</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">8</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">7</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">6</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">5</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">4</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">3</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">2</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 mr-2"><span class="text-white">1</span>
                      </a>
                    </div>
                    <div class="item">
                      <a href="#" style="background:  #c11021; font-size: 15px; font-weight: bold; border-radius: 30px;"
                        class="py-1 px-4 "><span class="text-white">Launch</span>
                      </a>
                    </div>
                   

                  </div>
                </div>
                <h3 class="pb-2" style="font-family:poppins; font-weight: 600; color:rgb(171, 173, 187)"> 23 FEB - DAY 1
                  </h2>
              </div>
              
              
              
              
              <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    
                    
                                     <?php
                 // require('config/connect.php');
                
                $sql = "SELECT * FROM content WHERE status='published' order by createtime desc";
                
                
                
                $result = mysqli_query($connection, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                
                //$video = $row['name'];
                
                //echo $video;
                
                
                
                
                ?> 
                    
                    
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                          <?php
                         
                           echo "<a href='news.php'> <img src='admin/".$row['featuredimage']."' width='500' height='160' class='figure-img responsive2 rounded'></a>";
                          
                          ?>
                      <!--  <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">  -->
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                  
                                  <?php echo $row['title']     ?>
                               
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  
                      
            <?php
                }
            } else {
                echo "0 results";
              }

            mysqli_close($connection);
              

            ?> 

                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pad15">
                      <figure class="figure">
                        <img src="img/3.png" class="figure-img responsive2 rounded" width="500" height="160">
                        <figcaption class="">
                          <ul class="sh-list sh-list-vc sh-list-style2">
                            <li class="sh-list-item">
                              <h4 class="sh-list-icon">
                                <i class="fa fa-video-camera text-success"></i>
                              </h4>
                              <h4 class="sh-list-content">
                                Super Affiliate Reality Tv Show
                              </h4>
                            </li>
                          </ul>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                </div>
                <a class="btn btn-primary leftLst"><i class="icon-chevron-left "></i></a>
                    <a class="btn btn-primary rightLst"><i class="icon-chevron-right "></i></a>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <!--BUTTON-->
   <!--  <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <div class="col-md-12  text-center pb-4">
            <div class="btn-group">
              <button type="button" class="btn btnText">SHOW
                MORE
                <i class="icon-circle-with-plus text-white "></i> </button>
              <button type="button" class="btn btnNumber">1
                of
                6</button>

            </div>
          </div>
        </div>
      </div> -->
    </div>



  </div>



  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="col-md-7 ">
          <img src="img/Banner10.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <!-- AFFILIATE-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 pl-4">
        <h2 style="font-family:poppins; font-weight: 600; color:#cccbcb">FEATURED AFFILIATES</h2>
      </div>
    </div>

  </div>
  <div class="">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>

      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
        </div>

      </div>
    </div>
  </div>



  <div class="container-fluid">


    <div class="text-right ct-box-slider__arrows clients-slider clearfix  ">
      <h2 class=" pull-left" style="font-family:poppins; font-weight: 600; color:#cccbcb">SPOTLIGHT</h2>

    </div>
    <div style=" background: linear-gradient(to top, #2D2E33 30%,  #2D2E33 70%,   #2D2E33 100%);">

      <div class=" pt-5">

        <div class="item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-6 col-sm-4 col-md-3 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/1a.png" class="figure-img img-fluid rounded">
                    <figcaption>
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Watch live Now on Dstv, anytime anywhere
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="col-xs-6 col-sm-4 col-md-3 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/4.png" class="figure-img img-fluid rounded">
                    <figcaption>
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Watch live Now on Dstv, anytime anywhere
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/3.png" class="figure-img img-fluid rounded">
                    <figcaption>
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Watch live Now on Dstv, anytime anywhere
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/2.png" class="figure-img img-fluid rounded">
                    <figcaption>
                      <ul class="sh-list sh-list-vc sh-list-style2">
                        <li class="sh-list-item">
                          <h4 class="sh-list-icon">
                            <i class="fa fa-video-camera text-success"></i>
                          </h4>
                          <h4 class="sh-list-content">
                            Watch live Now on Dstv, anytime anywhere
                          </h4>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>



  </div>

  <!--<section  >
    <div class="container-fluid" >
        <div class="clients-slider">
          
          <div class="clients-control pull-right">
            <a class="prev btn btn-gray btn-xs"><i class="fa fa-angle-left fa-2x"></i></a>
            <a class="next btn btn-gray btn-xs"><i class="fa fa-angle-right fa-2x"></i></a>
          </div>
          <span class="line"></span>
          <div id="clients-slider" class="owl-carousel">
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div> 
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">16</span>
              </a>
            </div>
            <div class="item">
              <a href="#"style="background: #484D53; font-size: 15px; font-weight: bold; border-radius: 30px;"
              class="py-1 px-4 mr-2"><span class="text-white">Launch</span>
              </a>
            </div>    
        </div>
        </div>
      </div>
    </section>-->

  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="col-md-7 ">
          <img src="img/Banner10.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  
  <div class="container-fluid">


    <div class="text-right ct-box-slider__arrows clients-slider clearfix  ">
      <h2 class=" pull-left" style="font-family:poppins; font-weight: 600; color:#cccbcb">SPONSORS</h2>

    </div>
    <div style=" background: linear-gradient(to top, #2D2E33 30%,  #2D2E33 70%,   #2D2E33 100%);">

      <div class=" pt-3">

        <div class="item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/pro-logo.png" class="figure-img img-fluid rounded">
                    
                  </figure>
                </div>
              </div>

              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                    <img src="img/qdthree.jpeg" class="figure-img img-fluid rounded">
                    
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                      <img src="img/set.jpeg" class="figure-img img-fluid rounded">
                    
                  </figure>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 pr-1">
                <div>
                  <figure class="figure">
                      <!--<img src="img/2.png" class="figure-img img-fluid rounded">-->
                   
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>



  </div>

  <footer class="mt-5" style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);
">
    <div class="container">
      <div class="col-md-12 py-4">
        <p class="text-center " style="color: #d3d3dd;"><small>Powered by </small><span class="text-danger"><b>Diipsolution</b></span></p>
        <p class="text-center"><small style="font-size: 13px;"> <a href="#">Terms & Conditions |</a> <a href="#">Privacy
              & Cookie Policy |</a> <a href="#">Responsible Disclosure Policy |</a> <a href="#"> Copyright | Open Source
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
  <script src="js/owl-carousel/owl.carousel.js"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>-->
  <script src="js/custom.js"></script>
    <script src="js/slider.js"></script>


</body>

</php>