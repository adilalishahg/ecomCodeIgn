 
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
							<h4 class="card-title mb-0 flex-grow-1">Product</h4>
							<a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
						</div>
						<div class="card-body"> 
							<?= form_open_multipart();?>                                           
							                                        
								<div class="row">
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="number" readonly value="<?= set_value('prod_id',$prod_id) ?>" class="form-control" name='prod_id' id=""  placeholder="Enter Your Product ID">
											<label for="floatingFirstnameInput">Product ID</label>
											<?= form_error('prod_id'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<select class="form-select" name='category' onchange="get_categories(this.value)" id="floatingSelectGrid" >
												<option selected value="">select</option>
												<?php foreach($categories as $cat){?>
												<option value="<?= $cat->cate_id;?>"><?= $cat->cate_name;?></option>
												<?php }?>
												<!-- <option value="1">Active</option>
												<option value="0">Deactive</option>  -->
												 
											</select>
											<label for="floatingSelectGrid">Category</label>
											<?= form_error('category'); ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<select class="form-select subcat" name='sub_category' id="floatingSelectGrid" >
												<option selected value="">select</option>
												 
												<!-- <option value="1">Active</option>
												<option value="0">Deactive</option>  -->
												 
											</select>
											<label for="floatingSelectGrid">Sub Category</label>
											<?= form_error('sub_category'); ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name='pro_name' id=""  placeholder="Enter Your Product Name">
											<label for="floatingFirstnameInput">Product Name</label>
											<?= form_error('pro_name'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name='brand' id=""  placeholder="Enter Your Brand Name">
											<label for="floatingFirstnameInput">Brand Name</label>
											<?= form_error('brand'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<select class="form-select" name='featured' id="floatingSelectGrid" >
												<option selected value="">Select Status</option>
												<option value="1">Deal of the Month</option>
												<option value="2">New arrival</option> 
											</select>
											<label for="floatingSelectGrid">Featured</label>
											<?= form_error('featured'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<textarea class="form-select" name='highlights' id="floatingSelectGrid" >
												 
											</textarea>
											<label for="floatingSelectGrid">Highlights</label>
											<?= form_error('highlights'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<textarea class="form-select" name='description' id="floatingSelectGrid" >
												 
											</textarea>
											<label for="floatingSelectGrid">Description</label>
											<?= form_error('description'); ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="number" class="form-control" name='stock' id=""  placeholder="Enter Your Product ID">
											<label for="floatingFirstnameInput">Product Stock</label>
											<?= form_error('stock'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="number" class="form-control" name='mrp' id=""  placeholder="Enter Your Product ID">
											<label for="floatingFirstnameInput">Product MRP</label>
											<?= form_error('mrp'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="number" class="form-control" name='selling_price' id=""  placeholder="Enter Your Product ID">
											<label for="floatingFirstnameInput">Product Selling Price</label>
											<?= form_error('selling_price'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name='meta_title' id=""  placeholder="Enter Your First Name">
											<label for="floatingFirstnameInput">Meta Title</label>
											<?= form_error('meta_title'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name='meta_keywords' id=""  placeholder="Enter Your First Name">
											<label for="floatingFirstnameInput">Meta Keywords</label>
											<?= form_error('meta_keywords'); ?>
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name='meta_desc' id=""  placeholder="Enter Your First Name">
											<label for="floatingFirstnameInput">Meta Description</label>
											<?= form_error('meta_desc'); ?>
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
									<div class="col-md-6">
										<div class="form-floating mb-3">
										<input type="file" class="form-control" name='pro_main_image' id=""  placeholder="Enter Your First Name">

											<label for="floatingSelectGrid">Product Image</label>
											<?= form_error('pro_main_image'); ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
										<input type="file" class="form-control" name='gallery_image' id=""  placeholder="Enter Your First Name">

											<label for="floatingSelectGrid">Product Gallary Image</label>
											<?= form_error('gallery_image'); ?>
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
