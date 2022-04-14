<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
}else{
	$id='';
}
$course_alert="";
$coursemanager = new DataManager();

if(isset($_POST['save_course'])){
	$tab['name'] =   $_POST['name'];
	$tab['libelle'] =  $_POST['libelle'];
	$tab['semester'] = $_POST ['semester'];
	$tab['class'] =  $_POST['class'];
	$tab['level'] =    $_POST['level'];
	$tab['teacher'] =    $_POST['teacher'];
	if($_POST['course']=='Select course class'){
		$class_alert="Class is required";
	}else{
		$coursemanager->postCourses($tab);
		header('Location:courses'); 
	}
	
}

if(isset($_POST['update_course'])){
	$name =   $_POST['name'];
	$libelle =  $_POST['libelle'];
	$semester = $_POST ['semester'];
	$class =  $_POST['class'];
	$level =    $_POST['level'];
	$teacher =    $_POST['teacher'];
	if($_POST['course']=='Select course class'){
		$class_alert="Class is required";
	}else{
		$coursemanager->updateCourse($name,$libelle,$semester,$class,$level,$teacher,$id);
		header('Location:courses'); 
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

    <title>course | Action</title>
    
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
        include"./includes/course_add.php";
	}else{
		include"./includes/course_edit.php";
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
