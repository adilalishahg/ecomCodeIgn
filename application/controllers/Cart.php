<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc.
        $this->load->library('form_validation');
        $this->load->model('CartModel');
    }
	public function index()
	{ 
	} 
	public function add_to_cat(){
		$post = $this->input->post();
		$this->CartModel->add_to_cart($post); 
	}
	 

}

?>

