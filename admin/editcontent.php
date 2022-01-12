<?php
session_start();
require('../config/connect.php');
 
if(!isset($_SESSION['manager']) & empty($_SESSION['manager'])){
    header('location: login.php');
}



if(isset($_GET['id']) & !empty($_GET['id'])){
	//select query
	$id = $_GET['id'];
	$selsql = "SELECT * FROM content WHERE id=$id";
	$selres = mysqli_query($connection, $selsql);
	$selr = mysqli_fetch_assoc($selres);
	if(mysqli_num_rows($selres) <= 1){
		//redirect to view content page
	}
}else{
	//redirect view content page
}

if(isset($_POST) & !empty($_POST)){
	print_r($_POST);
	$title = mysqli_real_escape_string($connection, $_POST['title']);
	echo $url = str_replace(' ', '-', $title);
	$content = mysqli_real_escape_string($connection, $_POST['content']);
	$catid = implode(",", $_POST['cat']);
	$updatetime = date("Y-m-d H:i:s");
	$status = $_POST['status'];

	if(isset($_FILES) & !empty($_FILES)){
		$name = $_FILES['fimage']['name'];
		$size = $_FILES['fimage']['size'];
		$type = $_FILES['fimage']['type'];
		$tmp_name = $_FILES['fimage']['tmp_name'];

		$max_size = 10000000;
		$extension = substr($name, strpos($name, '.') + 1);

		if(isset($name) && !empty($name)){
			if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $extension == $size<=$max_size){
				$location = "uploads/";
				$filepath = $location.$name;
				if(move_uploaded_file($tmp_name, $filepath)){
					$smsg = "Uploaded Successfully";
				}else{
					$fmsg = "Failed to Upload File";
				}
			}else{
				$fmsg = "File size should be 10,000 KiloBytes & Only JPEG File";
			}
		}else{
			$fmsg = "Please Select a File";
		}
	}else{
		$filepath = $selr['featuredimage'];
	}

	$sql = "UPDATE content SET title='$title', content='$content', catid='$catid', url='$url', updatetime='$updatetime', status='$status', featuredimage='$filepath' WHERE id=$id";
	$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	//$lid = mysqli_insert_id($connection);
	if($res){
		$smsg = "Content updated Successfully";
		//header("location: editcontent.php?id=$id");
		header("location: content.php");
	}else{
		$fmsg = "Failed to update Content";
	}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> S A N Admin : Edit Blog Content </title>
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
                 <!--   <li>
                        <a href="ui-elements.html"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li>
					<li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href="form.html" class="active-menu"><i class="fa fa-edit"></i> Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>

                -->
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
                        <a href="dailyactivities.php"><i class="fa fa-fw fa-file"></i>Daily Activities</a>
                    </li>

                  <!--  <li>
                        <a href="staffreport.php"><i class="fa fa-fw fa-file"></i> Staff Report</a>
                    </li>
                     <li>
                        <a href="ambulance.php"><i class="fa fa-fw fa-file"></i> Ambulance Activities</a>
                    </li>   -->
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
                            Blog Content(Post)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                     
                 
                                <h4>Edit  Content</h4>
                                    <form role="form" method="post" action="#" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" placeholder="Title" value="<?php echo $selr['title']; ?>" >
											
                                       
                                        </div>

                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" rows="3" name="content"><?php echo $selr['content']; ?></textarea>
                                        </div>

                                         <div class="form-group">
                                            <label>Feature Image</label>
											<?php if(isset($selr['featuredimage']) & !empty($selr['featuredimage'])){ ?>
			    		<img src="<?php echo $selr['featuredimage']; ?>" width="100px" height="100px">
			    		<a href="fimagedel.php?id=<?php echo $selr['id']; ?>">Delete Image</a>
			    <?php }else{ ?>
			    		<input type="file" name="fimage" >
			    		<p class="help-block">Only jpeg, png file formats allowed.</p>
			    <?php } ?>
                                          <!--  <p>Only jpg images are allowed</p> -->
                                        </div>

                                    <div class="form-group">
                                      <div class="row">
                                            <div class="col-md-6">
                                                <label>Categories</label>
                        <select name="cat[]" multiple class="form-control">
												<?php 
								$categories = explode(",", $selr['catid']); 
								$selcatsql = "SELECT * FROM category";
								$selcatres = mysqli_query($connection, $selcatsql);
								while($selcatr = mysqli_fetch_assoc($selcatres)){
							?>
								<option value="<?php echo $selcatr['id']; ?>" 
							<?php
									foreach ($categories as $key => $value) {
							?>
							  <?php if($selcatr['id'] == $value){ echo "selected"; } ?>
							<?php } ?>
							><?php echo $selcatr['name']; ?></option>
							<?php } ?>
                      </select>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Post Status</label>
                                                <select name="status" multiple class="form-control">
												<option value="draft" <?php if($selr['status'] == "draft"){ echo "selected"; } ?>>Draft</option>
							                    <option value="published" <?php if($selr['status'] == "published"){ echo "selected"; } ?>>Published</option>
                                                </select>
                                            </div>
                                          </div>
                                      </div>



                                       
                                        
                                      
                                        
                                        
                                       <input type="submit" value="Save Content" class="btn btn-primary btn-lg">
                                        
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