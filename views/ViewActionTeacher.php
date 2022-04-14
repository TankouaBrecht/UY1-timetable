<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
}else{
	$id='';
}
$faculty_alert="";
$teachermanager = new DataManager();

if(isset($_POST['save_teacher'])){
	$tab['name'] =   $_POST['fullname'];
	$tab['email'] =  $_POST['email'];
	$tab['adress'] = $_POST ['adress'];
	$tab['phone'] =  $_POST['phone'];
	$tab['sex'] =    $_POST['sex'];
	$tab['pic'] =  'none';
	$tab['fac'] =    $_POST['fac'];
	
	if($_POST['fac']=='Select teacher faculty'){
		$faculty_alert="Speciality is required";
	}else{
		$teachermanager->postTeachers($tab);
		header('Location:teachers'); 
	}
	
}

if(isset($_POST['update_teacher'])){
	$name =   $_POST['fullname'];
	$email =  $_POST['email'];
	$adress = $_POST ['adress'];
	$phone =  $_POST['phone'];
	$sex =    $_POST['sex'];
	$pic =    'none';
	$fac =    $_POST['fac'];
	if($_POST['fac']=='Select teacher faculty'){
		$faculty_alert="Speciality is required";
	}else{
		$teachermanager->updateTeacher($name,$email,$adress,$phone,$sex,$pic,$fac,$id);
		header('Location:teachers'); 
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

    <title>Teacher | Add</title>
    
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
<?php
if(isset($_GET['action'])){
	$action = $_GET['action'];
	if($action == 'add'){
        include"./includes/teacher_add.php";
	}else{
		include"./includes/teacher_edit.php";
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
	
// $(document).ready(function() {
// });

	
</body>
</html>
