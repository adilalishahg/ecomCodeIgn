<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

     public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc.
        $this->load->library('form_validation');
        $this->load->model('SettingsModel');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function pincode()
	{
		$this->form_validation->set_rules('pincode', 'Pincode', 'required|trim');
		$this->form_validation->set_rules('delivery_charge', 'Delivery Charges', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			
			// $data['categories'] = $this->SettingsModel->all_category();
			$this->load->view('pincode'); 
		} else { 
			$post= $this->input->post();
			$check = $this->SettingsModel->add_pincode($post);
			if($check){
				$this->session->set_flashdata('success','Category Added Successfully');
				
			}
			else{
				$this->session->set_flashdata('error','Something went wrong');
			}
			redirect('settings/pincode');
		} 
	}
	public function banner()
	{
		if(empty($_FILES['banner_image']['name'])){

			$this->form_validation->set_rules('banner_image', 'Banner Image', 'required|trim');
		}
		
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			
			// $data['categories'] = $this->SettingsModel->all_category();
			$this->load->view('banner'); 
		} else { 
			$post= $this->input->post();
			$config = array('upload_path' => "./assets/images/uploads",
							'allowed_types' => "gif|jpg|png|jpeg");
			$this->load->library('upload', $config);
			if($this->upload->do_upload('banner_image')){
				$image = $this->upload->data(); 
				$post['banner_image'] = $image['file_name'];
			}else{
				$error = $this->upload->display_errors();
				log_message('error', $error); // Log the error message
				echo $error; // Display the error message
			}
			 
			$check = $this->SettingsModel->add_banner($post); 
			if($check){
				$this->session->set_flashdata('success','Category Added Successfully');
				
			}
			else{
				$this->session->set_flashdata('error','Something went wrong');
			}
			redirect('settings/banner');
		} 
	}
}
