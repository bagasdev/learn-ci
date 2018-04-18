<?php
defined('BASEPATH') or exit('no way!');

class Home extends CI_Controller {

	public function index()	
	{
		$this->load->view('home');
	}

	public function what()
	{
		print('are you human?');
	}
}