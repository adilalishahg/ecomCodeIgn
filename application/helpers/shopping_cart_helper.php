<?php 
	// application/helpers/shopping_cart_helper.php

function add_to_cart($product_id, $quantity) {
    // Add product to cart logic
}

function remove_from_cart($product_id) {
    // Remove product from cart logic
}
function get_from_cart($product_id='') {
    // Get product from cart logic 
    $CI =& get_instance();
    $CI->load->model('CartModel');
    $result = $CI->CartModel->get_cart();
    return $result;
}
function get_cart_total(){
	$CI =& get_instance();
    $CI->load->model('CartModel');
    $result = $CI->CartModel->cart_total();
    return $result;
}
function get_category_nav(){
	$CI =& get_instance();
    $CI->load->model('HomeModel');
    $result = $CI->HomeModel->get_category_nav();
    return $result;
}
function get_categories_all(){
	$CI =& get_instance();
    $CI->load->model('HomeModel');
    $result = $CI->HomeModel->get_categ();
    return $result;
}
function get_pending_orders(){
	$CI =& get_instance();
    $CI->load->model('OrderModel');
    $result = $CI->OrderModel->get_pending_orders();
    return $result;
}
 

// Add more functions as needed
