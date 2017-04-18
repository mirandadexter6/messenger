<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
	}
	
	public function index()
	{
		$data['getalldata']=$this->loginmodel->getall();
		$this->load->view('templates/header',$data);
		$this->load->view('login/login',$data);
		$this->load->view('templates/footer');
		
	}
	public function performlogin()
	{
		$this->loginmodel->login();
	}
	public function insert()
	{
		$this->loginmodel->insert();
	}
	public function delete()
	{
		$this->loginmodel->delete();
	}
	public function logout()
	{
		$this->loginmodel->logout();
	}
	
}
