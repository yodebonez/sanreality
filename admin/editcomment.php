<?php
session_start();
require('../config/connect.php');
 
if(!isset($_SESSION['manager']) & empty($_SESSION['manager'])){
    header('location: login.php');
}


if(isset($_GET['id']) & !empty($_GET['id'])){
	//select query
	$id = $_GET['id'];
	$selsql = "SELECT * FROM comments WHERE id=$id";
	$selres = mysqli_query($connection, $selsql);
	$selr = mysqli_fetch_assoc($selres);
	if(mysqli_num_rows($selres) <= 1){
		//redirect to view content page
	}
}else{
	//redirect view content page
}

if(isset($_POST) & !empty($_POST)){
	//print_r($_POST);
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$subject = mysqli_real_escape_string($connection, $_POST['subject']);
	$status = $_POST['status'];

	$sql = "UPDATE comments SET name='$name', email='$email', subject='$subject', status='$status' WHERE id=$id";
	$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	//$lid = mysqli_insert_id($connection);
	if($res){
		$smsg = "Comment updated Successfully";
       // header("location: editcomment.php?id=$id");
        header("location: comments.php");
	}else{
		$fmsg = "Failed to update Comment";
	}
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> S A N Admin : Add Blog Content </title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
     <script>tinymce.init({ selector:'textarea' });</script>
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
                <a class="navbar-brand" href="index.php"><strong>S A N</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                   
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                   
                    <!-- /.dropdown-tasks -->
                </li>
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
                        <a href="addcategory.php"><i class="fa fa-fw fa-file"></i> Add Category</a>
                    </li>
                     <li>
                        <a href="addcontent.php"><i class="fa fa-fw fa-file"></i> Add Content</a>
                    </li>

                    <li>
                        <a href="content.php"><i class="fa fa-fw fa-file"></i>View Content</a>
                    </li>

                    <li>
                        <a href="comments.php"><i class="fa fa-fw fa-file"></i>View Comments</a>
                    </li>

                    <li>
                        <a href="dailyactivities.php"><i class="fa fa-fw fa-file"></i>Daily Activities</a>
                    </li>
                
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Blog Content Page <small></small>
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
                      Edit Post Comment
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                     
                 
                                <h4>Edit Comment</h4>
                                    <form role="form" method="post" action="#">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" placeholder="Title" value="<?php echo $selr['name']; ?>">
                                       
                                        </div>


                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="email" value="<?php echo $selr['email']; ?>">
                                       
                                        </div>

                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea class="form-control" rows="3" name="subject"><?php echo $selr['subject']; ?></textarea>
                                        </div>

                                       

                                    <div class="form-group">
                                      <div class="row">
                                           
                                            <div class="col-md-6">
                                            <label>Comment Status</label>
                                                <select name="status" multiple class="form-control">
                                                <option value="draft" <?php if($selr['status'] == "draft"){ echo "selected"; } ?>>Draft</option>
							  <option value="publish" <?php if($selr['status'] == "publish"){ echo "selected"; } ?>>Published</option>
                                                </select>
                                            </div>
                                          </div>
                                      </div>



                                       
                                        
                                      
                                        
                                        
                                       <input type="submit" value="Edit Comment" class="btn btn-primary btn-lg">
                                        
                                       <!-- <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>  -->
                                    </form>




                                    


                                  </div>  






                                <!-- /.col-lg-6 (nested) -->
                               <div class="col-md-6">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">Categories</div>
                                      <div class="panel-body">
                                        Basic panel example
                                      </div>
                                    </div>

                                    <div class="panel panel-default">
                                    <div class="panel-heading">Recent Comments</div>
                                      <div class="panel-body">
                                        Basic panel example
                                      </div>
                                    </div>

                                    <div class="panel panel-default">
                                    <div class="panel-heading">Recent Articles</div>
                                      <div class="panel-body">
                                        Basic panel example
                                      </div>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<footer><p>All right reserved. S A N  <?php echo date("Y")      ?></p>

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