<?php 

class Peserta_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('modelverif');
	}

	function index()
	{
		$this->load->view('peserta/index');	
	}
}