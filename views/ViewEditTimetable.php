<?php

function horaire($val1,$val2){
	$DataManager = new DataManager();
	$btn_modal = "<a href='#demo-modal' class='btn btn-primary' style='font-size: 10.5px !important' ><i class='fa fa-pencil'></i> Add Value</a>";
	$datas = $DataManager->getDatasbyId('course', 'day', $val1, 'time', $val2, 'Data');
	$count = count($datas);
	if($count==0){
	   echo	$btn_modal;
	}else{
		foreach($datas as $val){
		    $result1=$val->id_amphi();
			$result2=$val->id_ue();
			$result3=$val->id_teacher();
			echo"<p style='font-size: 15px !important';>
			<span> $result1 </span><br>
			<span> $result2 </span><br>
			<span> Dr $result3 </span>
			</p>";

		}
	}
}
if(isset($_POST['save_info'])){
	$DataManager = new DataManager();
	$tab['day'] = $_POST['day'];
	$tab['time'] = $_POST['time'];
	$tab['amphi'] = $_POST['amphi'];
	$tab['ue'] = $_POST['ue'];
	$tab['teacher'] = $_POST['teacher'];
	$DataManager->postTimes($tab);
		header('Location:timetable'); 
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

    <title>Time table | Add</title>
    
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

		<!-- Main content -->
		<section class="content">
		<div class="row">
			  
			  <div class="col-12">
			  <div class="box">
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
								 <td style="font-size: 10.6px !important;">07H00-9H55</td> 
								  <td><?php horaire('monday','07H00-9H55')?></td>
								  <td><?php horaire('tuesday','07H00-9H55')?></td>
								  <td><?php horaire('wenesday','07H00-9H55')?></td>
								  <td><?php horaire('thursday','07H00-9H55')?></td>
								  <td><?php horaire('friday','07H00-9H55')?></td>
								  <td><?php horaire('saturday','07H00-9H55')?></td>
								  <td><?php horaire('sunday','07H00-9H55')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 10.6px !important;">10H-12H55</td> 
								 <td><?php horaire('monday','10H-12H555')?></td>
								  <td><?php horaire('tuesday','10H-12H555')?></td>
								  <td><?php horaire('wenesday','10H-12H555')?></td>
								  <td><?php horaire('thursday','10H-12H555')?></td>
								  <td><?php horaire('friday','10H-12H555')?></td>
								  <td><?php horaire('saturday','10H-12H555')?></td>
								  <td><?php horaire('sunday','10H-12H555')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 10.6px !important;">13H-15H55</td> 
								  <td><?php horaire('monday','13H-15H55')?></td>
								  <td><?php horaire('tuesday','13H-15H55')?></td>
								  <td><?php horaire('wenesday','13H-15H55')?></td>
								  <td><?php horaire('thursday','13H-15H55')?></td>
								  <td><?php horaire('friday','13H-15H55')?></td>
								  <td><?php horaire('saturday','13H-15H55')?></td>
								  <td><?php horaire('sunday','13H-15H55')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 10.6px !important;">16H-18H55</td> 
								  <td><?php horaire('monday','16H-18H55')?></td>
								  <td><?php horaire('tuesday','16H-18H55')?></td>
								  <td><?php horaire('wenesday','16H-18H55')?></td>
								  <td><?php horaire('thursday','16H-18H55')?></td>
								  <td><?php horaire('friday','16H-18H55')?></td>
								  <td><?php horaire('saturday','16H-18H55')?></td>
								  <td><?php horaire('sunday','16H-18H55')?></td>
							  </tr>
							  <tr>
								 <td style="font-size: 10.6px !important;">19H-21H55</td> 
								  <td><?php horaire('monday','19H-21H55')?></td>
								  <td><?php horaire('tuesday','19H-21H55')?></td>
								  <td><?php horaire('wenesday','19H-21H55')?></td>
								  <td><?php horaire('thursday','19H-21H55')?></td>
								  <td><?php horaire('friday','19H-21H55')?></td>
								  <td><?php horaire('saturday','19H-21H55')?></td>
								  <td><?php horaire('sunday','19H-21H55')?></td>
							  </tr>

							  <tr>
								 <td style="font-size: 10.6px !important;">07H00-9H55</td> 
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
<div id="demo-modal" class="modal">
  <div class="modal__content">
      <div class="modal_txt">
		  <br>
		  <h1>Please Choose Information</h1>
		  <br>
          <form action="" method="POST" autocomplete="off">
           <div class="row">
			   <div class="col-md-6">
			   <div class="form-group">   
			   <h5>1 - Select Day <span class="text-danger">*</span></h5>
				<div class="controls">
				<select id="day" name="day" class="form-control">
				 <option selected>Select Day</option>
				 <option value="monday">Monday</option>
				 <option value="tuesday">Tuesday</option>
				 <option value="wenesday">Wenesday</option>
				 <option value="thursday">Thursday</option>
				 <option value="">Friday</option>
				 <option value="">Saturday</option>
				 <option value="">Sunday</option>
				</select>
					<span class="text-danger"><?php ?></span>
				</div>
				</div>
			   </div>
			   <div class="col-md-6">
			   <div class="form-group">
				<h5>2 - Select Time<span class="text-danger">*</span></h5>
					<div class="controls">
						<select id="time" name="time" class="form-control">
						<option selected>Select Course Time</option>
						<option value="7H-9H55">7H-9H55</option>
						<option value="10H-12H55">10H-12H55</option>
						<option value="13H-15H55">13H-15H55</option>
						<option value="16H-18H55">16H-18H55</option>
						<option value="19H-21H55">19H-21H55</option>
						</select>
					</div>
			   </div>
			   </div>
		   </div>
		   <div class="row">
			   <div class="col-md-6">
			   <div class="form-group">   
			   <h5>3 - Amphi <span class="text-danger">*</span></h5>
				<div class="controls">
				<select id="select_amphi" name="amphi" class="form-control">
			     	<option value="1">Select Amphi</option>
				</select>
					<span class="text-danger"><?php ?></span>
				</div>
				</div>
			   </div>
			   <div class="col-md-6">
			   <div class="form-group">
				<h5>4 - Select UE<span class="text-danger">*</span></h5>
					<div class="controls">
						<select id="select_ue" name="ue" class="form-control">
						<option selected>Select UE</option>
						</select>
					</div>
			   </div>
			   </div>
		   </div>
			<div class="form-group">
			   <h5>5 - Teacher <span class="text-danger">*</span></h5>
			  <div class="controls">
				<select id="select_teacher" name="teacher" class="form-control">
				 <option selected>Select Teacher</option>
				</select>
					<span class="text-danger"><?php ?></span>
			 </div>
			</div>
			<span class="text-danger"><?php ?></span>
		   <div class="form-group">
			 <div class="controls">
				<button class="btn btn-primary" name="save_info">Click to save</button>
			 </div>
			</div>
          </form>
      </div>
      <a href="" class="modal__close">&times;</a>
    </div>
</div>
<!-- ./wrapper -->
  	
<style>
	.modal {
 visibility: hidden;
 opacity: 0;
 position: absolute;
 top: 0;
 right: 0;
 bottom: 0;
 left: 0;
 display: flex;
 align-items: center;
 justify-content: center;
 padding-bottom: 155px;
 background: rgba(77, 77, 77, .7);
 transition: all .4s;

}

.modal:target {
 visibility: visible;
 opacity: 1;
}

.modal__content {
 border-radius: 4px;
 position: relative;
 width: 500px;
 max-width: 90%;
 background: rgba(39, 46, 72);
 padding: 1em 2em;
 margin-top: 80px;
}
.modal_title{
 text-transform: uppercase;
 font-size: 20px;
 font-weight: 500px;
 color: #333131;
}
.modal__footer {
 text-align: right;
}
.modal__close {
 position: absolute;
 top: 10px;
 right: 10px;
 color: #585858;
 text-decoration: none;
}
</style>	 
<!-- Vendor JS -->
<script src="./src/frontend/js/vendors.min.js"></script>
<script src="./src/assets/icons/feather-icons/feather.min.js"></script>	

<!-- Sunny Admin App -->
<script src="./src/frontend/js/template.js"></script>
<script src="./src/frontend/js/pages/dashboard.js"></script>
	
<script type="text/javascript">

$('select[name="time"]').on('change', function () {
var timeVal = $("#time").val();
var dayVal = $("#day").val();
console.log(dayVal);
console.log(timeVal);


	$.ajax({

	url: "Ajax/horaire_view.php",
	method: "POST",
	data: { timeVal:timeVal, dayVal:dayVal },
	beforeSend: function(){},
	success: function(response){

		// console.log(response);
		document.getElementById("select_amphi").innerHTML=response; 
	}

	});
 
});

$('select[name="amphi"]').on('change', function () {
var amphiVal = $("#select_amphi").val();

console.log(amphiVal);

	$.ajax({

	url: "Ajax/horaire_view.php",
	method: "POST",
	data: { amphiVal:amphiVal },
	beforeSend: function(){},
	success: function(response){

		// console.log(response);
		document.getElementById("select_ue").innerHTML=response; 
	}

	});
 
});

$('select[name="ue"]').on('change', function () {
var ueVal = $("#select_ue").val();
console.log(ueVal);

	$.ajax({

	url: "Ajax/horaire_view.php",
	method: "POST",
	data: { ueVal:ueVal },
	beforeSend: function(){},
	success: function(response){

		// console.log(response);
		document.getElementById("select_teacher").innerHTML=response; 
	}

	});
 
});

// $(document).ready(function() {
// });
</script>
	
</body>
</html>
