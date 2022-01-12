<?php
session_start();
require('../config/connect.php');
 
if(!isset($_SESSION['manager']) & empty($_SESSION['manager'])){
    header('location: login.php');
}


if(isset($_POST) & !empty($_POST)){
    if(!isset($_POST['maincat']) & empty($_POST['maincat'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $description = mysqli_real_escape_string($connection, $_POST['description']);
        $sql = "INSERT INTO category (name,caturl, description) VALUES ('$name','$name', '$description')";
        $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if($res){
            $smsg = "Category Added Successfully";
        }else{
            $fmsg = "Failed to Add Category";
        }
    }

    if(isset($_POST['maincat']) & !empty($_POST['maincat'])){
        $maincatid = mysqli_real_escape_string($connection, $_POST['maincat']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $description = mysqli_real_escape_string($connection, $_POST['description']);
        $sql = "INSERT INTO subcat (catid, name, description) VALUES ($maincatid, '$name', '$description')";
        $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if($res){
            $ssmsg = "Sub Category Added Successfully";
        }else{
            $sfmsg = "Failed to Add Sub Category";
        }
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
                        <a href="comments.php"><i class="fa fa-fw fa-file"></i>View Comments</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Blog Category Page <small></small>
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
                            Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                     <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                 
                                <h4>Add  Category</h4>
                                    <form role="form" method="post" action="#">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" name="name" placeholder="Category">
                                       
                                        </div>

                                        <div class="form-group">
                                            <label>Category Description</label>
                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                        </div>



                                       
                                        
                                      
                                        
                                        
                                       <input type="submit" value="Add Category" class="btn btn-primary btn-lg">
                                        
                                       <!-- <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>  -->
                                    </form>




                                    <div class="panel panel-default">
                                      <div class="panel-body">
                                      <ul>
                                        <?php 
                                            $selsql = "SELECT * FROM category";
                                            $selres = mysqli_query($connection, $selsql);
                                            while($selr = mysqli_fetch_assoc($selres)){
                                        ?>
                                                <li><?php echo $selr['name']; ?> <a href="catdel.php?id=<?php echo $selr['id']; ?>">Delete</a>
                                                    <ul>
                                                        <?php 
                                                            $selsubsql = "SELECT * FROM subcat WHERE catid={$selr['id']}";
                                                            $selsubres = mysqli_query($connection, $selsubsql);
                                                        while($selsubr = mysqli_fetch_assoc($selsubres)){
                                                        ?>
                                                            <li><?php echo $selsubr['name']; ?></li>
                                                        <?php   
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                        <?php   }   ?>
                                        </ul>
                                      </div>
                                    </div>


                                  </div>  






                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">

                    <?php if(isset($ssmsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $ssmsg; ?> </div><?php } ?>
                    <?php if(isset($sfmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $sfmsg; ?> </div><?php } ?>

                                
                                    <h4>Add Sub Category</h4>
                                    <form role="form" method="post" action="#">

                                    <div class="form-group">
                                            <label>Selects Main Category</label>
                                            <select class="form-control" name="maincat">
                                         <?php 
                                        $selsql = "SELECT * FROM category";
                                        $selres = mysqli_query($connection, $selsql);
                                        while($selr = mysqli_fetch_assoc($selres)){
                                         ?>
                                                <option value="<?php echo $selr['id']; ?>"><?php echo $selr['name']; ?></option>
                                        <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Sub category name</label>
                                            <input class="form-control" name="name" placeholder="Sub Category Name">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Sub category Description</label>
                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                        </div>


                                        <!--   <button type="submit" class="btn btn-primary">Submit Button</button>  -->
                                        <input type="submit" value="Add Category" class="btn btn-primary">
                                       
                                    </form>


                                   
                                    
                                   
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