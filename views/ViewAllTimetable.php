<?php

function horaire($val1,$val2){
	$DataManager = new DataManager();
	$btn_modal = "";
	$datas = $DataManager->getDatasbyId('course', 'day', $val1, 'time', $val2, 'Data');
	$count = count($datas);
	if($count==0){
	   echo	$btn_modal;
	}else{
		foreach($datas as $val){
		    $result1=$val->id_amphi();
			$result2=$val->id_ue();
			$result3=$val->id_teacher();
			$result4=$val->id_class();
			echo"<p style='font-size: 15px !important';>
			<span> $result1 </span><br>
			<span> $result2 </span><br>
			<span> Dr $result3 </span>
			</p>";

		}
	}
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

    <title>Time table | view</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="src/frontend/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="src/frontend/css/style.css">
	<link rel="stylesheet" href="src/frontend/css/skin_color.css">
    <style>
     th, td{text-align: center !important;}
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
								
								<li class="breadcrumb-item" aria-current="page">
								 <select class="form-control select2" name="branch_select" style="width: 100%;" id="branch">
									<option  selected disabled>Please Select Branch</option>
									<option>WATOP</option>
								 </select>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								 <select class="form-control select2" name="level_select" id="branchLevel" style="width: 100%;">
								    <option selected disabled>Please Select Branch level</option>
									<option value="L1">L1</option>
									<option value="L2">L2</option>
									<option value="L3">L3</option>
								 </select>
								</li>
								<li> <a type="submit" class="btn btn-primary" id="fetchBranchData" style="margin-left: 15px;">Submit</a> </li>
							</ol> 
						</nav>
					</div>
				</div>
			</div>
		</div>
<br><div class="container">
  <h2>View data</h2>
	<table class="table table-bordered table-sm" >
    <thead>
      <tr>
        <th>Name</th>
      </tr>
    </thead>
    <tbody id="table">
      
    </tbody>
  </table>
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
								  <th>Monday</th>
								  <th>Tuesday</th>
								  <th>Wenesday</th>
								  <th>Thursday</th>
								  <th>friday</th>
								  <th>Saturday</th>
								  <th>Sunday</th>
							  </tr>
						  </thead>
						  <tbody>
							  <tr>
								 <td style="font-size: 12px !important;">07H00-9H55</td> 
								  <td><?php horaire('monday','07H00-9H55')?></td>
								  <td><?php horaire('tuesday','07H00-9H55')?></td>
								  <td><?php horaire('wenesday','07H00-9H55')?></td>
								  <td><?php horaire('thursday','07H00-9H55')?></td>
								  <td><?php horaire('friday','07H00-9H55')?></td>
								  <td><?php horaire('saturday','07H00-9H55')?></td>
								  <td><?php horaire('sunday','07H00-9H55')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 12px !important;">10H-12H55</td> 
								 <td><?php horaire('monday','10H-12H555')?></td>
								  <td><?php horaire('tuesday','10H-12H555')?></td>
								  <td><?php horaire('wenesday','10H-12H555')?></td>
								  <td><?php horaire('thursday','10H-12H555')?></td>
								  <td><?php horaire('friday','10H-12H555')?></td>
								  <td><?php horaire('saturday','10H-12H555')?></td>
								  <td><?php horaire('sunday','10H-12H555')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 12px !important;">13H-15H55</td> 
								  <td><?php horaire('monday','13H-15H55')?></td>
								  <td><?php horaire('tuesday','13H-15H55')?></td>
								  <td><?php horaire('wenesday','13H-15H55')?></td>
								  <td><?php horaire('thursday','13H-15H55')?></td>
								  <td><?php horaire('friday','13H-15H55')?></td>
								  <td><?php horaire('saturday','13H-15H55')?></td>
								  <td><?php horaire('sunday','13H-15H55')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 12px !important;">16H-18H55</td> 
								  <td><?php horaire('monday','16H-18H55')?></td>
								  <td><?php horaire('tuesday','16H-18H55')?></td>
								  <td><?php horaire('wenesday','16H-18H55')?></td>
								  <td><?php horaire('thursday','16H-18H55')?></td>
								  <td><?php horaire('friday','16H-18H55')?></td>
								  <td><?php horaire('saturday','16H-18H55')?></td>
								  <td><?php horaire('sunday','16H-18H55')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 12px !important;">19H-21H55</td> 
								  <td><?php horaire('monday','19H-21H55')?></td>
								  <td><?php horaire('tuesday','19H-21H55')?></td>
								  <td><?php horaire('wenesday','19H-21H55')?></td>
								  <td><?php horaire('thursday','19H-21H55')?></td>
								  <td><?php horaire('friday','19H-21H55')?></td>
								  <td><?php horaire('saturday','19H-21H55')?></td>
								  <td><?php horaire('sunday','19H-21H55')?></td>
							  </tr>

							  <tr>
								 <td style="font-size: 12px !important;">07H00-9H55</td> 
								  <td><?php horaire('monday','07H00-9H55')?></td>
								  <td><?php horaire('tuesday','07H00-9H55')?></td>
								  <td><?php horaire('wenesday','07H00-9H55')?></td>
								  <td><?php horaire('thursday','07H00-9H55')?></td>
								  <td><?php horaire('friday','07H00-9H55')?></td>
								  <td><?php horaire('saturday','07H00-9H55')?></td>
								  <td><?php horaire('sunday','07H00-9H55')?></td>
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

// function fetch_select(val)
// {
//  $.ajax({
//  type: 'post',
//  url: 'test.php',
//  data: {
//   get_option:val,

//  },
//  success: function (response) {
//   document.getElementById("new_select").innerHTML=response; 
//  }
//  });
// }

	$("#fetchBranchData").click(function() {

		var branchVal = $("#branch").val();
		var branchLevelVal = $("#branchLevel").val();

		$.ajax({

			url: "Ajax/timetable_view.php",
			method: "POST",
			data: { branchVal:branchVal, branchLevelVal:branchLevelVal },
			beforeSend: function(){},
			success: function(response){

				// console.log(response);
				document.getElementById("table").innerHTML=response; 
			}
			
		});

	});
// $(document).ready(function() {
// });
</script>
	
</body>
</html>
