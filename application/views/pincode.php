<!doctype html>
<html lang="en">
<!-- Mirrored from themesdesign.in/tocly/layouts/5.3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 08:52:23 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Dashboard | Tocly - Admin & Dashboard Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesdesign" name="author" />
	<base href="<?php echo base_url(); ?>">
	<?php $this->load->view('links'); ?>
</head>
<?php $this->load->view('header'); ?>
<!-- Left Sidebar End -->
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<?php
			if($this->session->flashdata('success')){?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('success'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php }?>
				<?php
				if($this->session->flashdata('error')){?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('error'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php }?>
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header border-0 align-items-center d-flex pb-0">
							<h4 class="card-title mb-0 flex-grow-1">Pincode</h4>
							<a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
						</div>
						<div class="card-body">
							<?= form_open();?>                                           
							                                        
								<div class="row"> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="number" class="form-control" name='pincode' id="" placeholder="Enter Pin Code">
											<label for="floatingFirstnameInput">Pin Code</label>
											<?= form_error('pincode'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="number" class="form-control" name='delivery_charge' id="" placeholder="Enter Deliver Charges">
											<label for="floatingFirstnameInput">Delivery Charges</label>
											<?= form_error('delivery_charge'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<select class="form-select" name='status' id="floatingSelectGrid" >
												<option selected value="">Select Status</option>
												<option value="1">Active</option>
												<option value="0">Deactive</option> 
											</select>
											<label for="floatingSelectGrid">Status</label>
											<?= form_error('status'); ?>
										</div>
									</div>
								<div>
									<button type="submit" class="btn btn-primary w-md">Submit</button>
								</div>
								<?= form_close();?>   
						</div>
					</div>
				</div>
			</div>
			<!-- END ROW -->
		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->
	<?php $this->load->view('footer'); ?>
