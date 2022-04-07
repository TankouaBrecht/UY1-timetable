<?php
$sme = 0;
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
					<h3 class="page-title">Data Tables</h3>
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
					<div class="box-header">						
						<h4 class="box-title">Inscription</h4>
						<p class="float-right btn btn-primary"><a href="add" class="">Add Student</a></p>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th rowspan="2">All Name </th>
										<th colspan="4">Pension (FCFA)</th>
										<th colspan="2">Tenues</th>
										
									</tr>
									<tr>
										<th>1 Tranche</th>
										<th>2 Tranche</th>
										<th>3 Tranche</th>
										<th>TOTAL</th>
										<th>Class</th>
										<th>Sport</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                  foreach($lists as $list):
									$sme += $list->tranche1()+ $list->tranche2()+ $list->tranche3();
									?>
									<tr>
										<td><a href="edit&id=<?= $list->id() ?>"><?= $list->name() ?> </a> </td>
										<td><?php if(empty($list->tranche1())){echo'NULL';}else{ echo $list->tranche1();}  ?></td>
										<td><?php if(empty($list->tranche2())){echo'NULL';}else{echo $list->tranche2();}  ?></td>
										<td><?php if(empty($list->tranche3())){echo'NULL';}else{echo $list->tranche3();}  ?></td>
										<td><?= $list->tranche1()+ $list->tranche2()+ $list->tranche3(); ?></td>
										<td><?= $list->class() ?></td>
										<td><?= $list->tenue() ?></td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
							<br>
							<div>
							<div class="user-profile">
								<div class="ulogo">
									<a href="index.html">
									<!-- logo for regular state and mobile devices -->
										<div class="d-flex align-items-center justify-content-center">					 	
											<img src="../images/logo-dark.png" alt="">
											<h3><b>Montant</b> Total : <?= $sme ?> FCFA</h3>
										</div>
									</a>
								</div>
							</div>
							</div>
						</div>
					</div>
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
<style>
	a{
	 text-decoration: none !important;
	 color: white !important;
	}
</style>
	<!-- Vendor JS -->
	<script src="src/js/vendors.min.js"></script>
    <script src="src/assets/icons/feather-icons/feather.min.js"></script>	
    <script src="src/assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="src/js/pages/data-table.js"></script>
	
	<!-- Sunny Admin App -->
	<script src="src/js/template.js"></script>
	

</body>
</html>
