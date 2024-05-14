<?php 


function debug($data) {
    // Add product to cart logic
	echo "<pre/>";
	print_r($data);
	exit;
}

function generate_slug($string) {
	// Convert the string to lowercase
	$slug = strtolower($string);
	
	// Replace spaces with dashes
	$slug = str_replace(' ', '-', $slug);
	
	// Remove special characters
	$slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
	
	// Remove consecutive dashes
	$slug = preg_replace('/-+/', '-', $slug);
	
	// Trim dashes from the beginning and end of the string
	$slug = trim($slug, '-');
	
	return $slug;
}
  function get_userid($session){
	 
	return   $session->userdata('user_id');
}
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function get_custom_date($days){
	$currentDate = date('Y-m-d');
	return date('Y-m-d', strtotime('+'.$days.' days', strtotime($currentDate)));
}
