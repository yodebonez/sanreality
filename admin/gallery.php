<?php
session_start();
require('../config/connect.php');
 
if(!isset($_SESSION['manager']) & empty($_SESSION['manager'])){
    header('location: login.php');
}


if(isset($_POST['videosubmit'])){

    $video = uniqid(). ".mp4";

    //$video = $_FILES['video']['name'];
    $videotemp = $_FILES['video']['tmp_name'];
    $firstimage = $_FILES['firstimage']['name'];
    $firstimagetmp = $_FILES['firstimage']['tmp_name'];
    $secondimage = $_FILES['secondimage']['name'];
    $secondimagetmp = $_FILES['secondimage']['tmp_name'];
    $thirdimage = $_FILES['thirdimage']['name'];
    $thirdimagetmp = $_FILES['thirdimage']['tmp_name'];
    $fourthmage = $_FILES['fourthmage']['name'];
    $fourthmagetmp = $_FILES['fourthmage']['tmp_name'];

    move_uploaded_file($videotemp, "videoandimages/$video");
    move_uploaded_file($firstimagetmp, "videoandimages/$firstimage");
    move_uploaded_file($secondimagetmp, "videoandimages/$secondimage");
    move_uploaded_file($thirdimagetmp, "videoandimages/$thirdimage");
    move_uploaded_file($fourthmagetmp, "videoandimages/$fourthmage");


    $sql = "INSERT INTO gallery (video,firstimage,secondimage,thirdimage,fourthimage) VALUES ('$video','$firstimage', '$secondimage','$thirdimage','$fourthmage')";
    $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if($res){
        $smsgg = "Upladed successfully";
    }else{
        $fmsgg = "Failed to Upload";
    }

 }



?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>S A N: AddCategory</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong> S A N</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
               
                     <li>
                        <a href="addcategory.php"><i class="fa fa-fw fa-file"></i> Add  Category</a>
                    </li>
                     <li>
                        <a href="addcontent.php"><i class="fa fa-fw fa-file"></i> Add  Content</a>
                    </li>
                
                    <li>
                        <a href="content.php"><i class="fa fa-fw fa-file"></i>View  Content</a>
                    </li>

                    <li>
                        <a href="comments.php"><i class="fa fa-fw fa-file"></i>View  Comments</a>
                    </li>

                    <li>
                        <a href="dailyactivities.php"><i class="fa fa-fw fa-file"></i>Daily Activities</a>
                    </li>

                    <li>
                        <a href="gallery.php"><i class="fa fa-fw fa-file"></i>Gallery</a>
                    </li>

                 

                    
                    <li>
                        <a href="gallerytimeline.php"><i class="fa fa-fw fa-file"></i>Gallery Timeline</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Gallery  <small></small>
                        </h1>
					<!--	<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
                    </ol> 
                      -->
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gallery
                        </div>
                        <div class="panel-body">
                           
                            <div class="row">
                                <div class="col-lg-8">
                     <?php if(isset($smsgg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsgg; ?> </div><?php } ?>
                    <?php if(isset($fmsgg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsgg; ?> </div><?php } ?>
                 
                                <h4>First Video and image section</h4>
                                    <form role="form" method="post" action="#" enctype="multipart/form-data">

                                     <!--
                                       <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="date" class="form-control" name="date" placeholder="Category" required>
                                       
                                        </div>
                                         -->
                                        <div class="form-group">
                                            <label>video</label>
                                            <input type="file" class="form-control" name="video" required>
                                       
                                        </div>


                                        <div class="form-group">
                                            <label> First Image </label>
                                            <input type = "file" class="form-control" name="firstimage">
                                       
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Second Image</label>
                                            <input type="file" class="form-control" name ="secondimage">
                                        </div>                                     
                                        


                                        <div class="form-group">
                                            <label>Third Image</label>
                                            <input type="file" class="form-control" name ="thirdimage">
                                        </div>    
                                        
                                        <div class="form-group">
                                            <label>Fourth Image</label>
                                            <input type="file" class="form-control" name ="fourthmage">
                                        </div>     
                                        
                                        
                                       <input type="submit" value="Upload" name="videosubmit" class="btn btn-primary btn-lg">
                                        
                                       <!-- <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>  -->
                                    </form>




                             </div> 

                             <hr/>

                              <br/>

                              <br/>

                              <br/>
                              <br/>

                             
                <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">

                       <div class="panel panel-default">
                        <div class="panel-heading">
                             GALLERY                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                                <th>id</th>
                                                <th>Video </th>
                                                <th>firstimage</th>
                                                <th>Secondimage</th>
                                                <th>thirdimage</th>
                                                <th>fouthimage</th>
                                                <th>status</th>
                                              
                                            
                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                                   
                       <?php
                               
                           //  $servername = "localhost";
                            // $username = "root";
                            // $password = "";
                            // $dbname = "codeteam";

                    // Create connection
                   // $conn = mysqli_connect($servername, $username, $password, $dbname);
                 //  $conn = mysqli_connect("localhost","codeteam_code","Ad~455Wnyj55","codeteam_codeteam");
              //  $conn = mysqli_connect("localhost","mcbuddye_cteam","^W@(aGb#?;qP","mcbuddye_codeteam");
                    // Check connection
                

                    $sql = "SELECT * FROM gallery";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {

                           ?>     
                                   <tr class="odd gradeX">
                          <a href="https://www.w3schools.com"><td><?php echo $row["id"]   ?></td>  </a>          
                                <td><?php echo $row["video"]   ?></td>  
                                  <td><?php echo $row["firstimage"]   ?></td>
                                  <td><?php echo $row["secondimage"]   ?></td>
                                   <td><?php echo $row["thirdimage"]   ?></td>
                                 <td><?php echo $row["fourthimage"]   ?></td>
                                 <td><?php echo $row["status"]   ?></td>
                                 <td> <a href="gallerystatus.php?id=<?php echo $row['id']; ?>&status=publish">Pub</a> <a href="gallerystatus.php?id=<?php echo $row['id']; ?>&status=draft">Dis</a> <a href="delgallery.php?id=<?php echo $row['id']; ?>">Del</a></td> 
                                    
                                  
                                    
                                  
                                     </tr>

                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                  }

                                mysqli_close($connection);
                                  

                                ?>
                                                              
                                           
                                                      
                                  
                                    
                                     
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>





                                <!-- /.col-lg-6 (nested) -->
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                      
                      
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div><footer><p>All right reserved. S A N Group <?php echo date("Y")      ?></p>
            </footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>