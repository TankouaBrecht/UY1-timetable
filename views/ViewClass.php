<?php

if(isset($_POST['save_class'])){
	$tab['faculty'] =   $_POST['faculty'];
    $tab['level'] =   $_POST['level'];
	$tab['capacity'] =  $_POST['capacity'];
	
    $this->_DataManager->postCl($tab);
	header('Location:class&action=view'); 
	
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

    <title>Class | View</title>
    
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
  <?php
if(isset($_GET['action'])){
	$action = $_GET['action'];
	if($action == 'edit'){
        include"./includes/class_edit.php";
	}else{
		include"./includes/class_view.php";
	}
}
?>
  <!-- /.content-wrapper -->
  <?php include"./includes/footer.php"?>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="./src/frontend/js/vendors.min.js"></script>
    <script src="./src/assets/icons/feather-icons/feather.min.js"></script>	
	<!-- Sunny Admin App -->
	<script src="./src/frontend/js/template.js"></script>
	<script src="./src/frontend/js/pages/dashboard.js"></script>

<script type="text/javascript">	
$.ajax({

url: "Ajax/class_view.php",
method: "POST",
data: { },
beforeSend: function(){},
success: function(response){

	// console.log(response);
	document.getElementById("table").innerHTML=response; 
}

});
</script>

	
</body>
</html>
