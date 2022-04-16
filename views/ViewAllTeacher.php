<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Teacher | view</title>
    
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
					<h3 class="page-title">Select Branch & Level</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								
								<li class="breadcrumb-item" aria-current="page">
								 <select class="form-control select2" name="branch_select" style="width: 100%;" id="branch">
									<option  selected disabled>Please Select Faculty</option>
									<option value="informatic">informatic</option>
								 </select>
								</li>
								<li> <a type="submit" class="btn btn-primary" id="fetchBranchData" style="margin-left: 15px;">Submit</a> </li>
							</ol> 
						</nav>
					</div>
				</div>
			</div>
		</div>
<br>
		<!-- Main content -->
		<section class="content">
		<div class="row">
			  
			  <div class="col-12">
			  <div class="box">
				  <div class="box-header with-border">
					<h3 class="box-title">All Teacher</h3>
					<h6 class="box-subtitle">Export data to CSV, Excel, PDF </h6>
				  </div>
				  <!-- /.box-header -->
				  <div class="box-body">
					  <div class="table-responsive">
						<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Full name</th>
								  <th>Email</th>
								  <th>Adress</th>
								  <th>Phone</th>
								  <th>Gender</th>
								  <th>Faculty</th>
								  <th>Action</th>
							  </tr>
						  </thead>
						  <tbody id="table">
      
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
	  

<!-- ./wrapper -->

	

	

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
	
<script type="text/javascript">

	$("#fetchBranchData").click(function() {

		var branchVal = $("#branch").val();
		var branchLevelVal = $("#branchLevel").val();

		$.ajax({

			url: "Ajax/teacher_view.php",
			method: "POST",
			data: { branchVal:branchVal, branchLevelVal:branchLevelVal },
			beforeSend: function(){},
			success: function(response){

				// console.log(response);
				document.getElementById("table").innerHTML=response; 
			}
			
		});

	});
$.ajax({

url: "Ajax/teacher_view.php",
method: "POST",
data: { },
beforeSend: function(){},
success: function(response){

	// console.log(response);
	document.getElementById("table").innerHTML=response; 
}

});
// $(document).ready(function() {
// });
</script>
	
</body>
</html>
