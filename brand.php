<?php
   session_start();
   require('config/connect.php');
   if (!isset($_SESSION["manager"])) {
    header("location: login.php");
    exit();
   }
  

if(isset($_POST['submit'])){

        $bronzebrand = $_POST["bronzebrand"];
        $bronzeproduct = $_POST["bronzeproduct"];
        $silverbrand = $_POST["silverbrand"];
        $silverproduct = $_POST["silverproduct"];
        $goldbrand = $_POST["goldbrand"];
        $goldproduct = $_POST["goldproduct"];
        $premiumbrand = $_POST["premiumbrand"];
        $premiumproduct = $_POST["premiumproduct"];
        $creditbrand = $_POST["creditbrand"];
        $creditproduct = $_POST["creditproduct"];
        $email = "yodeboy@gmail.com";
       
       


//$query = mysqli_query($connection,"SELECT email,mobile FROM applicant WHERE email ='$email' OR mobile = '$mobile'");


$query = mysqli_query($connection,"SELECT email FROM brand WHERE email ='$email'");

if (mysqli_num_rows($query) > 0)

// if(mysqli_fetch_array($query) !== false)
  {
       $sfmsg = $name . " Have selected Brand before";
    //   echo $sfmsg;           
  
  }
  else
  {
    
      $sql = "INSERT INTO brand (bronzebrand,bronzeproduct,silverbrand,silverproduct,goldbrand,goldproduct,premiumbrand,premiumproduct,creditbrand,creditproduct)
VALUES ('$bronzebrand','$bronzeproduct','$silverbrand',' $silverproduct',' $goldbrand','$goldproduct','$premiumbrand','$premiumproduct','$creditbrand','$creditproduct')";

if (mysqli_query($connection, $sql)) {
   // echo "Voting Casted successfully by " . $name;

    $ssmsg = "You've selected your Brand sucessfully";
  //  echo $ssmsg;
   


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
    
  }

mysqli_close($connection);
} 

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Drafting &mdash; </title>
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
  <!-- Registration form-->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 bg-form1">
        <img src="img/Banner1.png" class="img-fluid">
      </div>
      <div class="col-md-12 ">
        <p class="text-white text-center pt-4 px-2"><b>WhatisSuperAffiliatedraftchallenge? </b> <br/>
            It a process of drafting and confirmation of brands that will participate inthe 
           upcoming reality showby allowing fans
           to predict brand/product that will be drafted onthe show to
            win attractive prices that will motivate them to participate in the up 
                coming show andtoalsoqualifythemformoreoffersduringtheshow. <br/>


 <b>Howdoesthisworks?</b> <br> Simply select your challenge category and draft the required number of brands and products for that category, then submit the form. You will receive an email notification to confirm your draft; code, category and predictions. You can participate in any of the category as many times as possible to increase your chances of winning. However, the firstbronzetrialisfree. </br>

 <b>Whatdoesitcosttoparticipateinthechallenge?</b> <br/> Depending on the challenge category, it cost between N 100 to N 500 to participate in theSuperAffiliateSeasononedraftChallenge 

 <b>Whatnextaftercompletingyourchallenge?</b> <br/>
  Follow our social media pages (facebook/twitter/instagram/linkedin/youtube) @officialsan77andalsostaytunedtowww.san.diipsolution.comforupdatesondrafted brandsandproductsonSuperAffiliateSeasonone 

  </br>
  <b>Whatarethechallengecategory?</b><br/>

  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">No Of Brand</th>
      <th scope="col">No Of Product</th>
      <th scope="col">Cost Per Production</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bronze</th>
      <td>10</td>
      <td>1</td>
      <td>100</td>
      <td>10,000</td>
    </tr>
    <tr>
      <th scope="row">Silver</th>
      <td>20</td>
      <td>2</td>
      <td>200</td>
      <td>100,0000</td>
    </tr>
    <tr>
      <th scope="row">Gold</th>
      <td>30</td>
      <td>3</td>
      <td>300</td>
      <td>1000,000.00</td>
    </tr>

    <tr>
      <th scope="row">Premium</th>
      <td>50</td>
      <td>5</td>
      <td>500</td>
      <td>10,000,000.00</td>
    </tr>
  </tbody>
</table>


         

          Best of luck on this!</p>
      </div>
    </div>
  </div>
  <div class="container bg-form">

    <div class="row">

      <div class="col-md-8 col-md-offset-2">

      <!-- <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
          <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
          <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
          <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
      </ul> -->

      

        <div class="applicationForm"
          style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);">

          <div class="py-4 px-5">
            <img src="img/logo2.png" style="height: 100px;width: 100px; display: block;
          margin-left: auto; margin-right: auto; border-radius: 50%;">
            <h2 class="text-center pb-1">Choose your Favorite Brand</h2>

           


            <form method="post" action="brand.php" enctype="multipart/form-data">

            <?php if(isset($ssmsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $ssmsg; ?> </div><?php } ?>
            <?php if(isset($sfmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $sfmsg; ?> </div><?php } ?>
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">BRONZE</a></li>
              <li><a data-toggle="tab" href="#menu1">SILVER</a></li>
              <li><a data-toggle="tab" href="#menu2">GOLD</a></li>
              <li><a data-toggle="tab" href="#menu3">PREMIUM</a></li>
              <li><a data-toggle="tab" href="#menu4">CREDIT</a></li>
            </ul>



   <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
              
              <div class="form-group col-md-6">
                  <label for="audition">Select Brand</label>
                  <select id="audition" name="bronzebrand" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="audition">Select Product</label>
                  <select id="audition" name="bronzeproducts" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

               
              
              </div>
              <div id="menu1" class="tab-pane fade">
              
              <div class="form-group col-md-6">
                  <label for="audition">Select Brand</label>
                  <select id="audition" name="silverbrand" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="audition">Select Product</label>
                  <select id="audition" name="silverproduct" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

              </div>
              <div id="menu2" class="tab-pane fade">
      
              <div class="form-group col-md-6">
                  <label for="audition">Select Brand</label>
                  <select id="audition" name="goldbrand" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
              </div>

                <div class="form-group col-md-6">
                  <label for="audition">Select Products</label>
                  <select id="audition" name="goldproduct" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

              </div>
             
             
             <div id="menu3" class="tab-pane fade">
           
              <div class="form-group col-md-6">
                  <label for="audition">Select Brand</label>
                  <select id="audition" name="premiumbrand" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="audition">Select Product</label>
                  <select id="audition" name="premiumproduct" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

              </div>

              <div id="menu4" class="tab-pane fade">
           
              <div class="form-group col-md-6">
                  <label for="audition">Select Brand</label>
                  <select id="audition" name="creditbrand" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="audition">Select Product</label>
                  <select id="audition" name="creditproduct" class="form-control">
                    <option selected>Choose...</option>
                    <option value="DAN">Dangote</option>
                    <option value="NES">Nestle</option>
                    <option value="NIB">Nigeria Brewery</option>
                    <option value="CAD">Cadbury</option>
                  </select>
                </div>

              </div>
  </div>






         
         



              <div class="form-row">
             
                

<!-- 
              </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="surname" class="cols-sm-2 control-label">Surname</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="surname" id="surname" placeholder="Your surname" />
                    </div>
                  </div>
                </div>


              


               



                <div class="form-group col-md-6">
                  <label for="name" class="cols-sm-2 control-label">First name</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Your first name" />
                    </div>
                  </div>
                </div>


              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Sex">Sex</label>
                  <select id="Sex" name="sex" class="form-control">
                    <option selected>Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="tel" class="cols-sm-2 control-label">Tel</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-phone-square fa"
                          aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="mobile" id="tel" placeholder="Your phone " />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email" class="cols-sm-2 control-label">Email</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your email" />
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="date" class="cols-sm-2 control-label">Date Of Birth</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                      <input type="date" class="form-control" name="dot" id="date" placeholder="Your date of birth" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="address" class="cols-sm-2 control-label">Address</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="address" id="name" placeholder="Your address" />
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="qualification">Qualification(s)</label>
                  <select id="qualification" name="qualification" class="form-control">
                    <option selected>Choose...</option>
                    <option value="Degree">Degree</option>
                    <option value="HND">HND</option>
                    <option value="Diploma">Diploma</option>
                    <option value="MSC">Master of Science</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="qualification">Current Profession</label>
                  <select id="qualification" name="currentprofess" class="form-control">
                    <option selected>Choose...</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Dancer">Dancer</option>
                    <option value="Comedian">Comedian</option>
                    <option value="Health">Health</option>
                    <option value="Comedian">Comedian</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="name" class="cols-sm-2 control-label">Relevant Experience</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Your experience" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="skills" class="cols-sm-2 control-label">Special Skills</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="skills" id="skills" placeholder="Your experience" />
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="qualification">Upload Video</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" name="video" for="customFile">Choose file</label>
                  </div>
                </div>
              
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="qualification">Upload picture</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" name="image" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="qualification">Upload supported Doc</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" name="filecv" for="customFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <div class="chiller_cb">
                    <input id="myCheckbox" type="checkbox" checked>
                    <label for="myCheckbox"><small>Accept terms & conditions and submit your application</small></label>
                    <span></span>
                  </div>
                </div>

              </div> -->
              <div class="form-group ">
                <!-- <button type="button" style="background-color: #c11021; color:#fff; font-weight: 700;"
                  class="btn   btn-block login-button">Submit</button> -->

                  <input type="submit" value="submit" name="submit" style="background-color: #c11021; color:#fff; font-weight: 700;"  class="btn   btn-block login-button">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <br/>
  <br/>

  <div>
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">No Of Brand</th>
      <th scope="col">No Of Product</th>
      <th scope="col">Cost Per Production</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bronze</th>
      <td>10</td>
      <td>1</td>
      <td>100</td>
      <td>10,000</td>
    </tr>
    <tr>
      <th scope="row">Silver</th>
      <td>20</td>
      <td>2</td>
      <td>200</td>
      <td>100,0000</td>
    </tr>
    <tr>
      <th scope="row">Gold</th>
      <td>30</td>
      <td>3</td>
      <td>300</td>
      <td>1000,000.00</td>
    </tr>

    <tr>
      <th scope="row">Premium</th>
      <td>50</td>
      <td>5</td>
      <td>500</td>
      <td>10,000,000.00</td>
    </tr>
  </tbody>
</table>
  </div>
  <!-- End Registration form-->

  <!-- Footer -->
  <footer class="mt-5" style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);
">
    <div class="container">
      <div class="col-md-12 py-4">
        <!--<img src="img/logo2.png" style="height: 100px;width: 100px; display: block;
          margin-left: auto; margin-right: auto; border-radius: 50%;">-->

        <p class="text-center " style="color: #d3d3dd;"><small>Powered by </small><span
            class="text-danger"><b>Diipsolution</b></span></p>
        <p class="text-center"><small style="font-size: 13px;"> <a href="#">Terms & Conditions |</a> <a href="#">Privacy
              & Cookie Policy |</a> <a href="#">Responsible Disclosure Policy |</a> <a href="#"> Copyright
              | Open Source
              |</a> <a href="#"> Contact Us | Scam alert</a></small></p>

      </div>

    </div>
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