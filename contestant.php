<?php
session_start();
require('config/connect.php');
if (!isset($_SESSION["manager"])) {
    header("location: login.php");
    exit();
   }

             
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Endorsement &mdash; </title>
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

  <style>
  .like {
		background-image: url('img/like.png');
		margin-right: 30px;
	}
	.like:hover {
		background-image: url('img/liked.png');
	}
	.dislike {
		background-image: url('img/dislike.png');

	}
	.dislike:hover {
		background-image: url('img/disliked.png');
	}
	.like,.dislike {
		/*height:55px;*/
		width:74px;
		background-repeat: no-repeat;
		float: left;
		background-size: 35%;
		cursor: pointer;
	}
	.counter {
		/*position: absolute;
		bottom: 0;*/
		padding-left:35px;
	}




  </style>

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




  <!-- SHARE YOUR THOUGHT-->
  <!-- <div class="container-fluid">
    <div class="row pt-5">
      <div id="shareText" class="col-md-12">
        <p class="pl-4">SHARE YOUR THOUGHTS!</p>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 box pl-0 pr-0 ">
        <div class="col-md-2 col-sm-12 col-xs-12 pl-0 py-2" id="shareButton">
          <p>SHARE YOUR THOUGHTS!</p>
        </div>
        <div class="col-md-9 col-md-offset-1 pb-0 pr-1 py-2" id="share">
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-facebook  pr-2"></i> Facebook</a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-twitter  pr-2"></i>Twitter</a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-instagram  pr-2"></i> Instagram</a>
            </p>
          </div>
          <div class="col-xs-3">
            <p><a href="#" class="text-white"><i class="fa fa-youtube-play  pr-2"></i> Youtube</a>
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
  </div> -->
  <!-- TIMELINE-->
<!-- 
  



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
        <h2 style="font-family:poppins; font-weight: 600; color:#cccbcb">PROSPECTIVE AFFILIATES</h2>
      </div>
    </div>

  </div>
  <div class="">
    <div class="container">
      <div class="row justify-content-md-center">

            <?php  
                  
                //  $qry = "SELECT * FROM applicant";
                  $qry = "select * from `applicant`";
                  $res = mysqli_query($connection, $qry);
                  if(mysqli_num_rows($res) > 0) {
                    while($row = mysqli_fetch_object($res)) {
                      $likes = array_filter(explode(',', $row->likes), function($value) { return $value !== ''; });
                      $dislikes = array_filter(explode(',', $row->dislikes), function($value) { return $value !== ''; });

                                      ?>   

             
                          <div class="col-md-3 col-sm-4 col-xs-6">
                          <form action="" method="post" id="<?php echo $row->id;?>">
		 						<input type="hidden" name="post_id" id="post_id" value="<?php echo $row->id;?>">
                            <figure class="figure">
                            <?php

                            echo  "<img src='images/". $row->picture ."' class='avatar img-circle img-thumbnail'>"  

                              ?>
                              <figcaption class="figure-caption text-center text-white"> <?php echo $row->firstname  ?></figcaption>
                            </figure>
                            <a href="profile.php?id=<?php echo $row->id; ?>" class="btn btn-primary">View </a> 
                          <a href="">  <button type="button" class="btn btn-primary">Endorse</button> </a>
                                <div class="like-dislike">
                          <div class="like"><div class="counter"><?php echo sizeof($likes);?></div></div>
                          <div class="dislike"><div class="counter"><?php  echo sizeof($dislikes);?></div></div>
                          <div class="clearfix"></div>
                        </div>
                          <button type="button" class="btn btn-primary">Count:</button>
                          </form>
                          </div>
                    
                                 <?php
                                    }
                                } 
                                //else {
                                  //  echo "0 results";
                                 // }

                               // mysqli_close($connection);
                                  

                                ?>



        <!-- <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
          <a href="profile.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> View </a>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
         <a href="">  <button type="button" class="btn btn-primary">View</button> </a>
         <a href="">  <button type="button" class="btn btn-primary">Endorse</button> </a>
           <button type="button" class="btn btn-primary">Count:</button>
        </div> -->
 
      </div>
     <!-- <div class="row justify-content-md-center">
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>

      </div>

      <div class="row justify-content-md-center">
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <figure class="figure">
            <img src="img/8.png" class="rounded-circle img-fluid">
            <figcaption class="figure-caption text-center text-white"> AFFILIATE</figcaption>
          </figure>
           <button type="button" class="btn btn-primary">View</button>
          <button type="button" class="btn btn-primary">Endorse</button>
         <button type="button" class="btn btn-primary">Count:</button>
        </div>

      </div> -->
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
                    <!--<img src="img/2.png" class="figure-img img-fluid rounded">-->
                    
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
  <script src="js/mtb.js"></script>


</body>

</html>