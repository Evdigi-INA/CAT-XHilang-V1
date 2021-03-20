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
		$data['soalkolom'] = $this->Xhilangmodel->tampil_soal();
		$jenissoalkolom1a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM01"
		);
		$jenissoalkolom2a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM02"
		);
		$jenissoalkolom3a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM03"
		);
		$jenissoalkolom4a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM04"
		);
		$jenissoalkolom5a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM05"
		);
		$jenissoalkolom6a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM06"
		);
		$jenissoalkolom7a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM07"
		);
		$jenissoalkolom8a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM08"
		);
		$jenissoalkolom9a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM09"
		);
		$jenissoalkolom10a = array(
			"id_kolomjawaban" => "S0JL",
			"kolom" => "KLM10"
		);
		$jenissoalkolom1b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM01"
		);
		$jenissoalkolom2b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM02"
		);
		$jenissoalkolom3b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM03"
		);
		$jenissoalkolom4b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM04"
		);
		$jenissoalkolom5b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM05"
		);
		$jenissoalkolom6b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM06"
		);
		$jenissoalkolom7b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM07"
		);
		$jenissoalkolom8b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM08"
		);
		$jenissoalkolom9b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM09"
		);
		$jenissoalkolom10b = array(
			"id_kolomjawaban" => "S1JL",
			"kolom" => "KLM10"
		);
		$jenissoalkolom1c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM01"
		);
		$jenissoalkolom2c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM02"
		);
		$jenissoalkolom3c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM03"
		);
		$jenissoalkolom4c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM04"
		);
		$jenissoalkolom5c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM05"
		);
		$jenissoalkolom6c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM06"
		);
		$jenissoalkolom7c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM07"
		);
		$jenissoalkolom8c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM08"
		);
		$jenissoalkolom9c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM09"
		);
		$jenissoalkolom10c = array(
			"id_kolomjawaban" => "S2JL",
			"kolom" => "KLM10"
		);

		$data['datajawabanlistkolom1a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom1a);
		$data['datajawabanlistkolom2a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom2a);
		$data['datajawabanlistkolom3a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom3a);
		$data['datajawabanlistkolom4a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom4a);
		$data['datajawabanlistkolom5a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom5a);
		$data['datajawabanlistkolom6a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom6a);
		$data['datajawabanlistkolom7a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom7a);
		$data['datajawabanlistkolom8a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom8a);
		$data['datajawabanlistkolom9a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom9a);
		$data['datajawabanlistkolom10a'] = $this->Xhilangmodel->listjawaban($jenissoalkolom10a);
		$data['datajawabanlistkolom1b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom1b);
		$data['datajawabanlistkolom2b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom2b);
		$data['datajawabanlistkolom3b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom3b);
		$data['datajawabanlistkolom4b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom4b);
		$data['datajawabanlistkolom5b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom5b);
		$data['datajawabanlistkolom6b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom6b);
		$data['datajawabanlistkolom7b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom7b);
		$data['datajawabanlistkolom8b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom8b);
		$data['datajawabanlistkolom9b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom9b);
		$data['datajawabanlistkolom10b'] = $this->Xhilangmodel->listjawaban($jenissoalkolom10b);
		$data['datajawabanlistkolom1c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom1c);
		$data['datajawabanlistkolom2c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom2c);
		$data['datajawabanlistkolom3c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom3c);
		$data['datajawabanlistkolom4c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom4c);
		$data['datajawabanlistkolom5c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom5c);
		$data['datajawabanlistkolom6c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom6c);
		$data['datajawabanlistkolom7c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom7c);
		$data['datajawabanlistkolom8c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom8c);
		$data['datajawabanlistkolom9c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom9c);
		$data['datajawabanlistkolom10c'] = $this->Xhilangmodel->listjawaban($jenissoalkolom10c);

		$data['title'] = 'Konfirmasi Mulai Test';
		$this->load->view('peserta/header',$data);
		$this->load->view('peserta/confirmation_page');
		$this->load->view('peserta/footer');	
	}
}