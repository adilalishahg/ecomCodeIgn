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
					<div class="alert col-xl-6"></div>
					<div class="card">
					<div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="form-inline float-md-start mb-3">
                                                    <div class="search-box me-2">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control border" placeholder="Search...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="mb-3 float-end">
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                                        <i class="mdi mdi-plus me-1"></i> Add User
                                                    </a>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- end row -->
                                        <div class="table-responsive mb-4">
                                            <table class="table table-hover table-nowrap align-middle mb-0">
                                                <thead class="bg-light">
                                                  <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="contacusercheck">
                                                            <label class="form-check-label" for="contacusercheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Buyer Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Contact No</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" style="width: 200px;">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
													<?php if(!empty($orders)):foreach($orders as $order):?>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                                <label class="form-check-label" for="contacusercheck1"></label>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                            <a href="#" class="text-body"><?= $order->cust_name?></a>
                                                        </td>
                                                        <td><?= $order->cust_email?></td>
                                                        <td><?= $order->cust_mobile?></td>
                                                        <td><?= $order->address.','.$order->city?></td>
                                                        <td style="    white-space: normal;"> 
														<select class="form-select" name='status' id="floatingSelectGrid" style="width: auto;" onchange="change_order_status(<?=$order->id ?>,<?=$order->order_id ?>,this.value)">
															<option selected value="">Select Status</option>
															<option value="pending" <?php if($order->order_status=='pending'){echo "selected";} ?>>Pending</option>
															<option value="on_the_way" <?php if($order->order_status=='on_the_way'){echo "selected";} ?>>On The Way</option> 
															<option value="delivered" <?php if($order->order_status=='delivered'){echo "selected";} ?>>Delivered</option> 
															<option value="returned" <?php if($order->order_status=='returned'){echo "selected";} ?>>Returned</option> 
														</select> 
													</td>
                                                        
                                                    </tr>
													<?php endforeach;endif;?>
                                                   </tbody>
                                            </table>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <div>
                                                    <p class="mb-sm-0">Showing 1 to 10 of 12 entries</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="float-sm-end">
                                                    <ul class="pagination mb-sm-0">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
					</div>
				</div>
			</div>
			<!-- END ROW -->
		</div>
		<!-- container-fluid -->
	</div>
	<script>
		function change_order_status(id,order_id,st){
			Swal.fire({
					title: "Do you want to save the changes?", 
					showCancelButton: true,
					confirmButtonText: "Save" 
				}).then((result) => {
				/* Read more about isConfirmed, isDenied below */
				if (result.isConfirmed) {
					// Swal.fire("Saved!", "", "success");
				
				$.ajax({
					url: "<?php echo base_url();?>order/change_order_status",
					type: "POST",
					data: {id:id,order_id:order_id,st:st},
					success: function(data){
						//alert(data);
						let data1  = JSON.parse(data)
						console.log(data1)
						if(data1.status==1){   
							if (data1.msg!== '') {
								Swal.fire(data1.msg_alert, "", "success");
								Toastify({
									text: data1.msg,
									className: "info",
									style: {
										background: "linear-gradient(to right, #00b09b, #96c93d)",
									}
								}).showToast(); 
							} else {
								Toastify({
									text: 'Oops! An error occured and your message could not be sent.',
									className: "info",
									style: {
										background: "linear-gradient(to right, #00b09b, #96c93d)",
									}
								}).showToast();  
							}
					
						} 
				}
			})
		}  
	});
	}
	</script>
	<!-- End Page-content -->
	<?php $this->load->view('footer'); ?>
