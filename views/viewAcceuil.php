<?php 
$DataManager = new DataManager();
$male_teacher = $DataManager->getInfobyId('teachers','gender','male','Data');
$male_count = count($male_teacher);
$woman_teacher = $DataManager->getInfobyId('teachers','gender','woman','Data');
$woman_count = count($woman_teacher);
$teachers = $male_count+$woman_count;
$get_ues = $DataManager->getDatasbyId('ue','class','informatic','level','3','Data');
$amphis = $DataManager->getAmphiList();
$ues = $DataManager->getueList();

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

    <title>Sunny Admin - Dashboard </title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="src/frontend/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="src/frontend/css/style.css">
	<link rel="stylesheet" href="src/frontend/css/skin_color.css">
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

<?php include"./includes/header.php"?>
  
  <!-- Left side column. contains the logo and sidebar -->

  <?php include"./includes/sidebar.php"?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-primary-light rounded w-60 h-60">
								<i class="text-primary mr-0 font-size-50 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Teachers</p>
								<h3 class="text-white mb-0 font-weight-500"><?php echo $teachers ?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-warning-light rounded w-60 h-60">
								<i class="text-warning mr-0 font-size-50 mdi mdi-grid"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Amphi</p>
								<h3 class="text-white mb-0 font-weight-500"><?php echo count($amphis) ?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-50 mdi mdi-file"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">UE</p>
								<h3 class="text-white mb-0 font-weight-500"><?php echo count($ues) ?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
				<div class="row">
					 <div class="col-md-6 ">
					  <div id="chart_div" style="width: 500px; height: 350px; "></div>
					 </div>
					 <div class="col-md-6 ">
					   <div id="piechart" style="width: 500px; height: 350px;"></div>
					 </div>
				 </div>
				</div>
				<div class="col-12">
				<h1 class="text-center" style="text-align: center !important;">INFO L3 - TIME TABLE GRAPH</h1>
					<div class="row text-center align-center">
						
						<div id="chart_divs" style="width: 100%; height: 500px;"></div>
					</div>
				</div>
			</div>
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
	<!-- Sunny Admin App -->
	<script src="./src/frontend/js/template.js"></script>
	<script src="./src/frontend/js/pages/dashboard.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'sex');
      data.addColumn('number', 'number');
      data.addRows([
        ['Male', <?php echo $male_count ?>],
        ['Woman', <?php echo $woman_count ?>],
 
      ]);

      var options = {
        title: 'Teachers Chart',
        sliceVisibilityThreshold: .2
      };

      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
	</script>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Amphi', 'Capacity'],
		  <?php
		  foreach($amphis as $a){
			?>
			['<?= $a->name() ?>', <?= $a->capacity() ?>],
		 <?php }
		  ?>
          
        ]);

        var options = {
          title: 'Amphi Capacity',
          legend: '',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
	
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'INFO L3', 'f':'INFO L3<div style="color:red; font-style:italic">Class</div>'},
           '', 'The President'],
		   <?php
		  foreach($get_ues as $val){
			  $value= $val->name();
			  $get_amphi = $DataManager->getInfobyId('course','id_ue',$value,'Data');
			?>
			[{'v':'<?= $val->name() ?>', 'f':'<?= $val->name() ?><div style="color:red; font-style:italic">UE</div>'},
           'INFO L3', 'VP'],
		   <?php
		   foreach($get_amphi as $val){
			?>
          ['<?= $val->id_amphi() ?><br><p style="font-size:8.5px;"><?= $val->day() ?><br>(<?= $val->time() ?>)</p>', '<?= $val->id_ue() ?>', 'Bob Sponge'],
		 <?php }}
		  ?>

        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_divs'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
   </script> 
	
</body>
</html>
