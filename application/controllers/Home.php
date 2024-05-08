<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('front/index');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function services()
	{
		$this->load->view('services');
	}

	public function portfolio()
	{
		$this->load->view('portfolio');
	} 

}

?>
