<?php
session_start();
require('../config/connect.php');
 
if(!isset($_SESSION['manager']) & empty($_SESSION['manager'])){
    header('location: login.php');
}


if(isset($_POST) & !empty($_POST)){
   // if(!isset($_POST['maincat']) & empty($_POST['maincat'])){
      //  $name = mysqli_real_escape_string($connection, $_POST['date']);
        $actname = mysqli_real_escape_string($connection, $_POST['actname']);

        $actcategory = mysqli_real_escape_string($connection, $_POST['actcategory']);
        $actdescriotion = mysqli_real_escape_string($connection, $_POST['description']);

           // getting the images
           $image = uniqid(). ".jpg";
        
           // $image = $_FILES['image']['name'];
           $image_tmp = $_FILES['actimages']['tmp_name'];
           move_uploaded_file($image_tmp, "dailyimages/$image");
           
        $sql = "INSERT INTO dailyactivities (actname,actcategory,actdescription,images) VALUES ('$actname','$actcategory', '$actdescriotion','$image')";
        $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if($res){
            $smsg = "Daily activities Created sucessfully";
        }else{
            $fmsg = "Failed to create daily activies";
        }
   // }

    
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
                             Daily Activities Page <small></small>
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
                            Daily Activities
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                     <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                 
                                <h4>Create Daily Activities</h4>
                                    <form role="form" method="post" action="#" enctype="multipart/form-data">

                                     <!--
                                       <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="date" class="form-control" name="date" placeholder="Category" required>
                                       
                                        </div>
                                         -->
                                        <div class="form-group">
                                            <label>Activities Name</label>
                                            <input class="form-control" name="actname" placeholder="Activities Name" required>
                                       
                                        </div>


                                        <div class="form-group">
                                            <label>Activities Category </label>
                                            <input class="form-control" name="actcategory" placeholder="Activities Category" required>
                                       
                                        </div>

                                        <div class="form-group">
                                            <label>Activities  Description</label>
                                            <textarea class="form-control" rows="3" name="description" required></textarea>
                                        </div>


                                        <div class="form-group">
                                            <label>Activities  Pictures</label>
                                            <input type="file" name ="actimages">
                                        </div>                                     
                                        
                                        
                                       <input type="submit" value="Create Activities" name="submit" class="btn btn-primary btn-lg">
                                        
                                       <!-- <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>  -->
                                    </form>




                             </div>  






                                <!-- /.col-lg-6 (nested) -->
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>


                        <hr/>

                      




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