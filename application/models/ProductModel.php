<?php
defined("BASEPATH") OR exit("No direct script allowed");



class ProductModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function add_product($post){
		try {
			$post['added_on'] = date('d M, Y'); 
			$post['slug'] =$this->generate_slug($post['pro_name']); 
			$q = $this->db->insert('ec_product',$post); 
	
			if($q) {
				$this->session->unset_userdata('prod_id');
				return true;
			} else {
				return false;
			}
		} catch (Exception $e) {
			// Handle the exception here
			log_message('error', $e->getMessage()); // Log the error message
			return false; // Return false indicating failure
		}
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
	
	 
}
