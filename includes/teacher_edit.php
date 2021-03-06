<?php

$teachers = $this->_DataManager->getInfobyId('teachers','id',$id,'Data');
foreach($teachers as $teacher){
	$name = $teacher->name();
	$email = $teacher->email();
	$adress = $teacher->adress();
	$phone = $teacher->phone();
	$faculty = $teacher->faculty();
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
			  <h4 class="box-title">Add new Teacher</h4>
			  <h6 class="box-subtitle">please enter correct information </h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					
					  <div class="row">
						<div class="col-12">						
							<div class="form-group">
								<h5>Full Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="fullname" class="form-control" required data-validation-required-message="Full name is required" value="<?= $name ?>"> </div>
							</div>
							<div class="form-group">
								<h5>Email  <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="email" class="form-control" required data-validation-required-message="Email is required" value="<?= $email ?>"> </div>
							</div>
                            <div class="row">
							  <div class="col-md-6">
                                <div class="form-group">
								 <h5>Adress <span class="text-danger">*</span></h5>
								 <div class="controls">
									<input type="text" name="adress" class="form-control" required data-validation-required-message="Adress is required" value="<?= $adress ?>"> </div>
							    </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
								<h5>Phone<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="phone" required data-validation-required-message="Phone number is required" class="form-control" required  value="<?= $phone ?>"> </div>
						      	</div>
                              </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<h5>Speciality <span class="text-danger">*</span></h5>
										<div class="controls">
											<select  id="select" name="fac" class="form-control">
												<option selected>Select teacher faculty</option>
												<?php
												 foreach ($faculty_list as $faculty){
													?>
													<option value="<?= $faculty->faculty() ?>"><?= $faculty->faculty() ?></option>
												 <?php } ?>
												
											</select>
											<span class="text-danger"><?php echo $faculty_alert ?></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>Add profile picture <span class="text-danger">* optional</span></h5>
										<div class="controls">
											<input type="file" name="file" class="form-control" >
										 </div>
									</div>
								</div>
                            </div>
						</div>
					  </div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Gender <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_2" name="sex"  value="male">
											<label for="checkbox_2">Male</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_3" name="sex" value="female">
											<label for="checkbox_3">Female</label>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info" name="update_teacher">Update information</button>
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