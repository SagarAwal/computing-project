<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function registration()
	{
		$this->load->view('registration.php');
	}
	public function login()
	{
		$this->load->view('login.php');
	}
}
