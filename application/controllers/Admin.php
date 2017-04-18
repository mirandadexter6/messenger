<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
	}

	public function index()
	{
		$data['getalldata']=$this->loginmodel->getall();
		$this->load->view('templates/header_login');
		$this->load->view('dashboard/anotherpage',$data);
		$this->load->view('templates/footer');
		
	}
	
	
	
	
}
