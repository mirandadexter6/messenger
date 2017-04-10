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
		$result=$this->loginmodel->getnewsdata(2);
		
		$data['newsdata']=$result;
		$data['getalldata']=$this->loginmodel->getall();
		
		$this->load->view('templates/header');
		$this->load->view('dashboard/dashboard',$data);
		$this->load->view('templates/footer');
	}
	
	public function anotherpage()
	{
		$this->load->view('dashboard/anotherpage');
	}
	
	
	
	
}
