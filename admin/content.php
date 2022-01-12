<?php
session_start();
require('../config/connect.php');
 
if(!isset($_SESSION['manager']) & empty($_SESSION['manager'])){
	header('location: login.php');
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>S A N Admin</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
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
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <!--
                    <li>
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
                        <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
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

                    <li>
                        <a href="dailyactivities.php"><i class="fa fa-fw fa-file"></i>Daily Activities</a>
                    </li>

                    <li>
                        <a href="gallery.php"><i class="fa fa-fw fa-file"></i>Gallery</a>
                    </li>

                    
                    <li>
                        <a href="gallerytimeline.php"><i class="fa fa-fw fa-file"></i>Gallery Timeline</a>
                    </li>

                   <!-- <li>
                        <a href="staffreport.php"><i class="fa fa-fw fa-file"></i> Staff Report</a>
                    </li>
                     <li>
                        <a href="ambulance.php"><i class="fa fa-fw fa-file"></i> Ambulance Activities</a>
                    </li>  -->

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                          S A N Dashboard <small></small>
                        </h1>
					<!--	<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol>    -->
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->

                <!-- /. ROW  -->

      
                    

	   
				
				
				
               


                <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">

                       <div class="panel panel-default">
                        <div class="panel-heading">
                             BlOG CONTENT                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                                <th>Id</th>
                                                <th>Title</th> 
                                                <th>Image</th> 
                                                <th>Created On</th> 
                                                <th>Updated On</th> 
                                                <th>Status</th> 
                                                <th>Operations</th> 
                                               
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
                

                    $sql = "SELECT * FROM content";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {

                           ?>     
                                   <tr class="odd gradeX">
                          <a href="https://www.w3schools.com"><td><?php echo $row["id"]   ?></td>  </a>          
                                         
                    
						<td><?php echo $row['title']; ?></td> 
						<td><?php if(isset($row['featuredimage']) & !empty($row['featuredimage'])){echo "Yes";}else{echo "No";} ?></td> 
						<td><?php echo $row['createtime']; ?></td> 
						<td><?php echo $row['updatetime']; ?></td> 
						<td><?php echo $row['status']; ?></td> 
						<td><a href="editcontent.php?id=<?php echo $row['id']; ?>">Edit</a> <a href="delcontent.php?id=<?php echo $row['id']; ?>">Delete</a></td> 
                                    
                                  
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

                    </div>
                </div>
                <!-- /. ROW  -->
			
		
				<footer><p>All right reserved. S A N Group <?php echo date("Y")      ?></p>
				
        
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

      <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      <script>
    
      </script>

</body>

</html>