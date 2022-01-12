<?php
   session_start();
   require('config/connect.php');
  

If(isset($_POST['submit'])){

        $appid = $_POST["appid"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $sex = $_POST["sex"];
        $audition = $_POST["audition"];
        $skills = $_POST["skills"];
        $email = $_POST["email"];                    
        $mobile = $_POST["mobile"];
       // $nationalty = $_POST["nationalty"];
        $experience = $_POST["experience"];
        $currentprofess = $_POST["currentprofess"];
        $qualification = $_POST["qualification"];
        $dob = $_POST["dob"];
        $address = $_POST['address'];
        

        // getting the images
         $image = uniqid(). ".jpg";
        
// $image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp, "images/$image");

//for cv
$file_cv = $_FILES['filecv']['name'];
$filecv = $_FILES['filecv']['tmp_name'];
move_uploaded_file($filecv,"cv/$file_cv");

//for video

$video = $_FILES['video']['name'];
$temName = $_FILES['video']['tmp_name'];
move_uploaded_file($temName,"Audvideo/$video");


$query = mysqli_query($connection,"SELECT email,mobile FROM applicant WHERE email ='$email' OR mobile = '$mobile'");

if (mysqli_num_rows($query) > 0)

// if(mysqli_fetch_array($query) !== false)
  {
       $sfmsg = $name . " Has applied before";
    //   echo $sfmsg;           
  
    }
  else
  {

      $sql = "INSERT INTO applicant (appid,firstname,surname,sex ,mobile,email,dob,address,qualification ,cprofession,experience ,skills,auditioncenter,picture,profile,video)
VALUES ('$appid','$name',' $surname','$sex','$mobile',' $email','$dob','$address','$qualification','$currentprofess','$experience',' $skills','$audition','$image',' $file_cv','$video')";

if (mysqli_query($connection, $sql)) {
   // echo "Voting Casted successfully by " . $name;

    $ssmsg = $name . " applied sucessfully Check your mail";
  //  echo $ssmsg;
   

          $applicantId = $appid;
          $to      = $email; // Send email to our user
          $subject = 'Link to share to fans'; // Give the email a subject 
          $message = '

          Thanks for signing up!
          Your account has been created.



          share the link to fans for endorsement:
          http://www.yourwebsite.com/endorse.php?email='.  $applicantId .'

          '; // Our message above including the link
                              
          $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
          mail($to, $subject, $message, $headers); // Send our email

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
  <title>Audition &mdash; </title>
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
          <!-- <li><a class="btn btn-sm btn-outline-secondary" type="button"
              href="login.php"><small><b>LOGIN</b></small></a></li>
          <li><a class="btn btn-sm " type="button" href="register.php"
              style="background-color: #c11021; color: #fff;"><small><b>SIGN
                  UP</b></small></a>
          </li> -->

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



            <!-- <li><a href="login.php" class="btn btn-sm btn-outline-secondary px-2"
                type="button"><small><b>LOGIN</b></small></a></li>
            <li><a href="register.php" class="btn btn-sm " type="button"
                style="background-color:#c11021; color: #fff;"><small><b>SIGN
                    UP</b></small></a>
            </li> -->


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
        <p class="text-white text-center pt-4 px-2">Super Affiliate virtual audition process will commence by July (date
          to be announce soon). If you are a young and talented business entrepreneur within the age range of 20 - 40
          years and you think you have got what it takes to be exclusive, then this show is for you. Take advantage of
          this unique platform to let the industries and the world know what they have been missing for not having you.

          In the step two of this online registration, you are expected to fill in the required details and upload a
          maximum of 3 minute prerecorded video of your self stating your general background and the reason why you
          should be considered as one of our affiliates to compete in the first edition of Super Affiliate.

          In step 3, which is the final step, you are expected to read and accept our terms and conditions by checking
          the required box provided in that section.

          Please you are expected to provide us with correct and accurate information in step 2 of this registration
          process. You will be disqualified from the auditioning process if we discover you deliberately give the
          auditors false and misleading information your self.

          The online audition is free and open to all interested and qualify male and female Nigerians and non
          -Nigerians living within the six geopolitical zone of the country and must be 20 years of age by July …..,
          2020.

          Best of luck on this!</p>
      </div>
    </div>
  </div>
  <div class="container bg-form">

    <div class="row">

      <div class="col-md-8 col-md-offset-2">

        <div class="applicationForm"
          style=" background: linear-gradient(to top, #2D2E33 30%, #2D2E33 70%, #2D2E33 100%);">

          <div class="py-4 px-5">
            <img src="img/logo2.png" style="height: 100px;width: 100px; display: block;
          margin-left: auto; margin-right: auto; border-radius: 50%;">
            <h2 class="text-center pb-1">Application form</h2>
            <form method="post" action="applicant.php" enctype="multipart/form-data">
            <?php if(isset($ssmsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $ssmsg; ?> </div><?php } ?>
            <?php if(isset($sfmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $sfmsg; ?> </div><?php } ?>
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="name" class="cols-sm-2 control-label">Applicant ID</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="appid" id="name" placeholder="Your first name" value="AP<?php 
                                            function gen_random_string($length=6)
                                            {
                                               // $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
                                               // $im = IM;
                                                $chars  =  "123456789";
                                                $final_rand ='';
                                                for($i=0;$i<$length; $i++)
                                                {
                                                    $final_rand .= $chars[ rand(0,strlen($chars)-1)];
                                                }
                                                return $final_rand;
                                            }
                                            echo gen_random_string()."\n"; //generates a string 
                                            ?>" />
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
                  <label for="surname" class="cols-sm-2 control-label">Surname</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon  pr-4"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="surname" id="surname" placeholder="Your surname" />
                    </div>
                  </div>
                </div>


              


                <div class="form-group col-md-6">
                  <label for="audition">Audition center</label>
                  <select id="audition" name="audition" class="form-control">
                    <option selected>Choose...</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Port Harcourt">Port Harcourt</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Enugu">Enugu</option>
                  </select>
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
                <!-- <div class="form-group col-md-12">
                  <div class="chiller_cb">
                    <input id="myCheckbox" type="checkbox" checked>
                    <label for="myCheckbox"><small>Accept terms & conditions and submit your application</small></label>
                    <span></span>
                  </div>
                </div> -->

              </div>
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