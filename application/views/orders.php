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
                                                        <td><?= ucfirst($order->order_status)?></td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0);" class="px-2 text-primary"><i class="ri-pencil-line font-size-18"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0);" class="px-2 text-danger"><i class="ri-delete-bin-line font-size-18"></i></a>
                                                                </li>
                                                                <!-- <li class="list-inline-item dropdown">
                                                                    <a class="dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </li> -->
                                                            </ul>
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
	<!-- End Page-content -->
	<?php $this->load->view('footer'); ?>
