<?php

use Google\Service\AIPlatformNotebooks\Location;

$studentmanager = new VideoManager();
if(isset($_POST['add'])){

  if(empty($_POST['tranche1'])){
    $tranche1 = 0;
  }else{
    $tranche1 = $_POST['tranche1'];
  }

  if(empty($_POST['tranche2'])){
    $tranche2 = 0;
  }else{
    $tranche2 = $_POST['tranche2'];
  }

  if(empty($_POST['tranche3'])){
    $tranche3 = 0;
  }else{
    $tranche3 = $_POST['tranche3'];
  }

  $tab['name'] = $_POST['name'];
  $tab['t1'] = $tranche1;
  $tab['t2'] = $tranche2;
  $tab['t3'] = $tranche3;
  $tab['class'] = $_POST['class'];
  $tab['tenue']=$_POST['tenue'];
  $studentmanager->postLists($tab);
  header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">
    <title>School Manage system</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="src/frontend/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="src/frontend/css/style.css">
	<link rel="stylesheet" href="src/frontend/css/skin_color.css">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary">
<div class="wrapper">

<?php include_once('./includes/header.php')?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Data Insert</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Insert</li>
								<li class="breadcrumb-item active" aria-current="page">Data Insert</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
            <div class="col-12">
            <div class="box">
					<div class="box-header">						
						<h4 class="box-title">Add Student </h4>
					</div>
                    <div class="box-body p-50">
                <form action="" method="POST" enctype="multipart/form-data">			
                        <div class="form-group">
                            <h5>Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" value="" placeholder="Enter student full name">
                                <span class="text-danger"></span>  
                            </div>
                        </div><br>
                        <div class="form-group">
                            <h5>Class <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="class" class="form-control" value="" placeholder="Enter student class">
                                <span class="text-danger"></span>  
                            </div>
                        </div><br>
                        <div class="form-group">
                            <h5>Sport <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="tenue" class="form-control" value="" placeholder="Enter student sport">
                                <span class="text-danger"></span>  
                            </div>
                        </div><br>
                        <div class="row p-10 formss"> 
                        <style>
                          .formss{display: flex !important; justify-content: center !important;}
                        .row .form-group{margin-right: 35px !important};
                      
                       </style>
                        <div class="form-group text-center">
                            <h5>Tranche 1 <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="Tranche1" class="form-control" value="" placeholder="Enter first tranche">
                                <span class="text-danger"></span>  
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <h5>Tranche 2 <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="Tranche2" class="form-control" value="" placeholder="Enter second tranche">
                                <span class="text-danger"></span>  
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <h5>Tranche 3 <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="Tranche3" class="form-control" value="" placeholder="Enter third tranche">
                                <span class="text-danger"></span>  
                            </div>
                        </div>
                        </div>
                    <div class="text-xs-right">
                        <button type="submit" class="btn  btn-info" name="add">Add Student</button>
                    </div>
                </form>
                </div>
            </div>
			</div>
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2020 <a href="#">Psd to Html Expert</a>. All Rights Reserved.
  </footer>

</div>
<!-- ./wrapper -->

	<!-- Vendor JS -->
	<script src="src/js/vendors.min.js"></script>
    <script src="src/assets/icons/feather-icons/feather.min.js"></script>	
	
	<!-- Sunny Admin App -->
	<script src="src/js/template.js"></script>
	

</body>
</html>
