<?php
session_start();
require('config/connect.php');
if (!isset($_SESSION["manager"])) {
    header("location: login.php");
    exit();
   }
require('functionsfe.php');


if(isset($_GET['url']) & !empty($_GET['url'])){
	$url = $_GET['url'];
	$r = mysqli_fetch_assoc(SelSingleArticle($url));
	if(mysqli_num_rows(SelSingleArticle($url)) < 1){
		header("location: index.php");
	}
}else{
	header("location: index.php");
}

$msg = InsertComments($r['id']);

//$r = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Post &mdash; </title>
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
            <a href="index.html" style="font-family:poppins;" class="probootstrap-logo pl-4"><img src="img/logo1.png"
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


    <div class="container">
        <div class="col-md-8 blogdetail" style="background: transparent">
            <div class="panel panel-default" style="border: 2px solid rgba(129, 129, 129, 0.067); background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);">
              <div class="panel-body blogh2" >
                <p class="p-2"><strong><?php echo $r['title']; ?></strong></p>
                  <div class="row">
                      <div class="col-md-3 blogimg"><img src="admin/<?php echo $r['featuredimage']; ?>"height="600px" width="800px" class="img-circle img-responsive mb-4"></div>
                      <div class="col-md-9">
                          <p><?php echo $r['content']; ?>
                            


                          </p>
                        </div>
                  </div>
              </div>
            </div>
    
            <div class="panel panel-default">
            <div class="panel-heading">Submit Your Comments</div>
              <div class="panel-body">
              <?php echo DisplayCommentMsg($msg); ?>
                <form method="post">
                    <div class="form-group bloginput">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value = "<?php echo $_SESSION["manager"]    ?>" readonly>
                  </div>
                  <div class="form-group bloginput">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value = "<?php echo $_SESSION["email"]  ?>" readonly>
                  </div>
                  <div class="form-group bloginput">
                    <label for="exampleInputPassword1">Subject</label>
                    <textarea name="subject" class="form-control" rows="3" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
            <?php echo DisplayComments($r['id']); ?>
                </div>
                <?php include'inc/sidebar.php'; ?>
                </div>
       
    </div>
    
   
               
                  
                      
            </div>	</div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script src="js/scripts.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>-->
    <script src="js/custom.js"></script>

</body>

</html>

