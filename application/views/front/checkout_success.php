
 

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
				
						<div class="col-lg-10 mx-auto">
                     <!-- checkout place order -->
                     <div class="tp-checkout-place white-bg">
								<?php if($found): ?>
                        <h3 class="tp-checkout-place-title">Thank you for order. Your details are below:  </h3>

                        <div class="tp-order-info-list">
                           <ul>

                              <!-- header -->
                              <li class="tp-order-info-list-header">
                                 <h4>Order Status</h4>
                                 <?php if($order_status=='pending'): $class="tp-coupon-date"; elseif($order_status=='in-progress'): $class="tp-coupon-date-in-progress"; elseif($order_status=='on-the-way'): $class="tp-coupon-date-on-the-way";elseif($order_status=='completed'): $class="tp-coupon-date-completed";endif; ?>
											<div class=<?= $class ?>> <span><?= ucfirst($order_status) ?></span> </div>
                              </li>
                              <!-- header -->
                              <li class="tp-order-info-list-header">
                                 <h4>Order ID</h4>
                                 <h4><?= $order_id ?></h4>
                              </li>

                              <!-- item list -->
                              <li class="tp-order-info-list-desc">
                                 <p>Quantities </p>
                                 <span><?= $pro_qty ?></span>
                              </li>
                              <li class="tp-order-info-list-header">
                                 <h4>Customer Name</h4>
                                 <h4><?= ucfirst($cust_name) ?></h4>
                              </li>
                              <li class="tp-order-info-list-desc">
                                 <p>Delivery Address</p>
                                 <span><?= $address.' '.$city.' '.$country ?></span>
                              </li>
                              <!-- subtotal -->
                              <li class="tp-order-info-list-subtotal">
                                 <span>Order Date </span>
                                 <span><?= $order_date ?></span>
                              </li>
                              <li class="tp-order-info-list-subtotal">
											<p>Deliver Expected Date</p>
                                 <span><?= $delivery_date ?></span>
                              </li>
                               


                              <!-- shipping -->
                              <li class="tp-order-info-list-shipping">
                                 <span>Shipping</span>
                                 <div class="tp-order-info-list-shipping-item d-flex flex-column align-items-end">
											<?php if($pay_mode=='cod'): if($delivery_charge==0): ?>
												
												<span>
                                       <input id="free_shipping" type="radio" name="shipping" checked>
                                       <label for="free_shipping">Free shipping</label>
                                    </span>
											<?php else: ?>
												<span>
                                       <input id="flat_rate" type="radio" name="shipping" checked>
                                       <label for="flat_rate">Flat rate: <span><?= $delivery_charge ?></span></label>
                                    </span>
											 <?php endif; endif; ?> 
                                    <!-- <span>
                                       <input id="local_pickup" type="radio" name="shipping">
                                       <label for="local_pickup">Local pickup: <span>$25.00</span></label>
                                    </span> -->
                                   
                                 </div>
                              </li>

                              <!-- total -->
                              <li class="tp-order-info-list-total">
                                 <span>Total</span>
                                 <span><?= $total ?></span>
                              </li>
                           </ul>
                        </div>
                        <div class="tp-checkout-payment">
                         
                           <div class="tp-checkout-payment-item">
										<?php if($pay_mode=='cod'): ?>
                              <input type="radio" id="cod" name="payment" checked>
                              <label for="cod">Cash on Delivery</label>
										<?php endif;?>
                              
                           </div>
                          
                        </div>
								<?php else: ?>
									<h3 class="tp-checkout-place-title">Sorry , No order found.Click here to order <a href="<?= base_url()?>" class="btn btn-outline-primary btn-lg  ml-4">Show Now</a> </h3>
									<?php endif; ?>
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
