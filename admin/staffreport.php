<?php
session_start();
require('../config/connect.php');
 
//if(!isset($_SESSION['manager']) && empty($_SESSION['role'])){
  //  header('location: login.php');
   // if (!isset($_SESSION['role'])){
     //   header('location: index.php');
    //}
//}


if(isset($_POST) & !empty($_POST)){
   
        $orderid = mysqli_real_escape_string($connection, $_POST['orderid']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $vname = mysqli_real_escape_string($connection, $_POST['vname']);
        $destination = mysqli_real_escape_string($connection, $_POST['destination']);
        $vcondition = mysqli_real_escape_string($connection, $_POST['vcondition']);
        $pname = mysqli_real_escape_string($connection, $_POST['pname']);
        $bpressure = mysqli_real_escape_string($connection, $_POST['bpressure']);
        $prate = mysqli_real_escape_string($connection, $_POST['prate']);
        $pname = mysqli_real_escape_string($connection, $_POST['btemperature']);
        $rrate = mysqli_real_escape_string($connection, $_POST['rrate']);
        $sp = mysqli_real_escape_string($connection, $_POST['sp']);
        $rbs = mysqli_real_escape_string($connection, $_POST['rbs']);
         $pcondition = mysqli_real_escape_string($connection, $_POST['pcondition']);
        $sql = "INSERT INTO staffreport (orderid,
name,vname, destination,vcondition,pname,bpressure,prate,btemperature,rrate,sp,rbs,
pcondition) VALUES ('$orderid','$name', '$vname','$destination','$vcondition','$pname','$bpressure','$prate','$pname','$rrate','$sp','$rbs','$pcondition')";
        $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if($res){
            $smsg = "Report Added Successfully";
        }else{
            $fmsg = "Failed to Add Report";
        }
    

   
}


?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BrainGrace: Ambulance staff Report</title>
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
                <a class="navbar-brand" href="index.php"><strong>S.A.N </strong></a>
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
                        <a href="staffreport.php"><i class="fa fa-fw fa-file"></i> Staff Report</a>
                    </li>
                     <li>
                        <a href="ambulance.php"><i class="fa fa-fw fa-file"></i>  Activities</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Staff Report Page <small></small>
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
                            Staff Report
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                     <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                 
                                <h4>Staff Report</h4>
                                    <form role="form" method="post" action="#">

                                        <div class="form-group">
                                            <label>Order ID</label>
                                            <input class="form-control" name="orderid" placeholder="">
                                                                             
                                        </div>
                                        <div class="form-group">
                                            <label>Staff Name</label>
                                            <input class="form-control" name="name" placeholder="" required>
                                       
                                        </div>

                                        <div class="form-group">
                                            <label>Vehicle Name</label>
                                             <input class="form-control" name="vname" placeholder="" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Destination</label>
                                             <input class="form-control" name="destination" placeholder="" required="">
                                        </div>

                                    <div class="form-group">
                                            <label>Vehicle condition</label>
                                        <select name="vcondition" class="form-control" required>
                                             <option value="">Select</option>
                                          <option value="Good">Good</option>
                                          <option value="Fair">Fair</option>
                                          <option value="bad">Bad</option>
                                         
                                        </select>
                                    </div>

                                         <div class="form-group">
                                            <label>Patient's Name</label>
                                           <input class="form-control" name="pname" placeholder="" required="">
                                        </div>

                                         <div class="form-group">
                                            <label>Blood pressure</label>
                                           <input class="form-control" type="number" name="bpressure" placeholder="" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Pulse Rate</label>
                                           <input class="form-control" type="number" name="prate" placeholder="" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Body Temperature</label>
                                           <input class="form-control" type="number" name="btemperature" placeholder="" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>Respiratory Rate</label>
                                           <input class="form-control" type="number" name="rrate" placeholder="" required="">
                                        </div>

                                         <div class="form-group">
                                            <label>SP 02</label>
                                           <input class="form-control" type="number" name="sp" placeholder="" required="">
                                        </div>
                                         <div class="form-group">
                                            <label>RBS</label>
                                           <input class="form-control" type="number" name="rbs" placeholder="" required="">
                                        </div>

                                        <div class="form-group">
                                            <label>Patient Condition</label>
                                        <select name="pcondition" class="form-control">
                                        <option value="">Select</option>
                                          <option value="Conscious">Conscious</option>
                                          <option value="Semi conscious">Semi conscious</option>
                                          <option value="Unconscious">Unconscious</option>
                                         
                                        </select>
                                       </div>



                                                       
                                       <input type="submit" value="Add Category" class="btn btn-primary btn-lg">
                                        
                                       <!-- <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>  -->
                                    </form>






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
            </div>
	<footer><p>All right reserved. S A N Group <?php echo date("Y")      ?></p></footer>
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