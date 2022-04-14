<?php

$ues = $this->_DataManager->getInfobyId('ue','id',$id,'Data');
foreach($ues as $ue){
	$name = $ue->name();
	$semester = $ue->semester();
	$title = $ue->libelle();
	$level = $ue->level();
	$faculty = $ue->faculty();
	$teacher = $ue->teacher();
}
?>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		<form method="POST" >
		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add new course</h4>
			  <h6 class="box-subtitle">please enter correct information </h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					
					  <div class="row">
						<div class="col-12">						
                            <div class="row">
							  <div class="col-md-6">
                                <div class="form-group">
								 <h5>Course Code <span class="text-danger">*</span></h5>
								 <div class="controls">
									<input type="text" name="name" class="form-control" required data-validation-required-message="Adress is required" value="<?= $name ?>"> </div>
							    </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
								<h5>Course Title<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="libelle" required data-validation-required-message="Phone number is required" class="form-control"  value="<?= $title ?>"> </div>
						      	</div>
                              </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<h5>Faculty <span class="text-danger">*</span></h5>
										<div class="controls">
											<select id="select" name="class" class="form-control">
												<option selected>Select course faculty</option>
												<?php
												 foreach ($faculty_list as $faculty){
													?>
													<option value="<?= $faculty->faculty() ?>"><?= $faculty->faculty() ?></option>
												 <?php } ?>
											</select>
											<span class="text-danger"><?php echo $course_alert ?></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
                                <div class="form-group">
									<h5>Level <span class="text-danger">*</span></h5>
										<div class="controls">
											<select id="select" name="level" class="form-control">
											 <option selected>Select faculty level</option>
											 <option value="1">L1</option>
                                             <option value="2">L2</option>
                                             <option value="3">L3</option>
											</select>
											
										</div>
									</div>
								</div>
                            </div>
						</div>
					  </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
									<h5>Semester <span class="text-danger">*</span></h5>
										<div class="controls">
											<select id="select" name="semester" class="form-control">
											 <option selected>Select course semester</option>
											 <option value="1">1</option>
                                             <option value="2">2</option>
											</select>
											
										</div>
									</div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
								 <h5>Teacher Name <span class="text-danger">*</span></h5>
								 <div class="controls">
									<input type="text" name="teacher" class="form-control" required data-validation-required-message="Adress is required" value="<?= $teacher ?>"> </div>
							    </div>
                              </div>
                         </div>

						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info" name="save_course">Submit information</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
	<!-- /.content -->
<!-- ./wrapper -->
	  </div>
  </div>