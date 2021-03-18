<?php 

class Peserta_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();		
		$this->load->model('modelverif');

		//detection authorization! jadi lo GAK BISA SEMBARANG MASUK KE METHOD INI BOS!!! (Kalo akses web biasa bisa)
		if($this->session->userdata('status') != "login")
		{
			redirect(base_url("Verification"));
		}

		$this->load->helper('text');
		$this->load->model('Xhilangmodel'); //loadmodelnya dulu
	}

	function index()
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);

		$data['title'] = 'Konfirmasi Mulai Test';
		$this->load->view('peserta/header',$data);
		$this->load->view('peserta/confirmation_page');
		$this->load->view('peserta/footer');	
	}
}