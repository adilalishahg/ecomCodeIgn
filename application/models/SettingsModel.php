<?php
defined("BASEPATH") OR exit("No direct script allowed");



class SettingsModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function add_banner($post){
		$post['added_on'] = date('Y-m-d');
		$post['banner_id'] = mt_rand(1111,9999);
		try {  
			$q = $this->db->insert('ec_banner',$post); 
	
			if($q) {
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
	 
}
