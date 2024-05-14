
 

<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:12:47 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $this->load->view('front/links');?>
   </head>
   <body>
		<?php $this->load->view('front/header');?>
		<main>   
			<section class="tp-checkout-area pb-120 pt-40" data-bg-color="#EFF1F5">
				<div class="container">
					
						<div class="row">
						<div class="col-lg-10  mx-auto">
                     <div class="tp-checkout-bill-area">
                        <h3 class="tp-checkout-bill-title">Enter Order Number or Mobile/Email to track your order</h3>

                        <div class="tp-checkout-bill-form">
                           
                              <div class="tp-checkout-bill-inner">
											<?= form_open('order/order_track', array('id' => 'order_track','class' => 'order_track')); ?>
                                 <div class="row">
												<div class="col-md-8">
													<div class="tp-checkout-input">
													  
														<input type="text" id="order_track_val" name="order_track_val" placeholder="Example LTD.">
													</div>
												</div>
												<div class="col-md-4">
													<div class="tp-checkout-input">
														<button type="submit" value='order_track' class="tp-checkout-btn w-100">Check Order</button>
													</div>
												</div>
											</div>
											<?= form_close()?>	 

                                
                              </div>
                            
                        </div>
                     </div>
                  </div>
					</div>
				</div>
			</section>
		</main>
      <!-- footer area end -->
	  <?php $this->load->view('front/footer');?>

      <!-- JS here -->
 
   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:29 GMT -->
</html>
