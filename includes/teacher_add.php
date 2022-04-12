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
									<input type="text" name="fullname" class="form-control" required data-validation-required-message="Full name is required"> </div>
							</div>
							<div class="form-group">
								<h5>Email  <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="email" class="form-control" required data-validation-required-message="Email is required"> </div>
							</div>
                            <div class="row">
							  <div class="col-md-6">
                                <div class="form-group">
								 <h5>Adress <span class="text-danger">*</span></h5>
								 <div class="controls">
									<input type="text" name="adress" class="form-control" required data-validation-required-message="Adress is required"> </div>
							    </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
								<h5>Phone<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="phone" required data-validation-required-message="Phone number is required" class="form-control" required> </div>
						      	</div>
                              </div>
                            </div>

							<div class="form-group">
								<h5>File Input Field <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="file" name="file" class="form-control" > </div>
							</div>
						</div>
					  </div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Gender <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_2" name="sex" required value="male">
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
							<button type="submit" class="btn btn-rounded btn-info" name="save_teacher">Submit</button>
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