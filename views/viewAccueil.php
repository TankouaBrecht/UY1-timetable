<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Sunny Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="src/frontend/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="src/frontend/css/style.css">
	<link rel="stylesheet" href="src/frontend/css/skin_color.css">
     <style>
		 /* tr{
			 color: white !important;
		 } */
	 </style>
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

<?php include"./includes/header.php"?>
  
  <!-- Left side column. contains the logo and sidebar -->

  <?php include"./includes/sidebar.php"?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Time Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
				<div class="box-header with-border">
				  <h3 class="box-title">Time Table</h3>
				  <h6 class="box-subtitle">Export data to CSV, Excel, PDF </h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
							    <th>Horaire</th>
								<th>Lundi</th>
								<th>Mardi</th>
								<th>Mercredi</th>
								<th>Jeudi</th>
								<th>Vendredi</th>
								<th>Samedi</th>
								<th>Dimanche</th>
							</tr>
						</thead>
						<tbody>
							<tr>
						     	<td>07h</td> 
								<td>Tiger Nixon <br>
								Tiger Nixon <br>
								Tiger Nixon
								</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
						     	<td>07h</td> 
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>61</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
							    <td>07h</td> 
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>61</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
						     	<td>07h</td> 
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>61</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
							   <td>07h</td> 
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>61</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
							   <td>07h</td> 
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>61</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>

						</tbody>				  
					</table>
					</div>              
				</div>
				<!-- /.box-body -->
			  </div>
			</div>

			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include"./includes/footer.php"?>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="./src/frontend/js/vendors.min.js"></script>
    <script src="./src/assets/icons/feather-icons/feather.min.js"></script>	
    <script src="./src/assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="./src/frontend/js/pages/data-table.js"></script>
	
	<!-- Sunny Admin App -->
	<script src="./src/frontend/js/template.js"></script>
	<script src="./src/frontend/js/pages/dashboard.js"></script>
	
	
</body>
</html>
