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

		$data['soal1'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom1a);
		$data['soal2'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom2a);
		$data['soal3'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom3a);
		$data['soal4'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom4a);
		$data['soal5'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom5a);
		$data['soal6'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom6a);
		$data['soal7'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom7a);
		$data['soal8'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom8a);
		$data['soal9'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom9a);
		$data['soal10'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom10a);
		$data['soal11'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom1b);
		$data['soal12'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom2b);
		$data['soal13'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom3b);
		$data['soal14'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom4b);
		$data['soal15'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom5b);
		$data['soal16'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom6b);
		$data['soal17'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom7b);
		$data['soal18'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom8b);
		$data['soal19'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom9b);
		$data['soal20'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom10b);
		$data['soal21'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom1c);
		$data['soal22'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom2c);
		$data['soal23'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom3c);
		$data['soal24'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom4c);
		$data['soal25'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom5c);
		$data['soal26'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom6c);
		$data['soal27'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom7c);
		$data['soal28'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom8c);
		$data['soal29'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom9c);
		$data['soal30'] = $this->Xhilangmodel->tampil_soal2($jenissoalkolom10c);

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

	public function simpan_nilai()
	{
		$user_name = $this->input->post('tbusername');
		$id_user = $this->input->post('tbiduser');
		$tb_nilai1 = $this->input->post('tbnilai1');
		$tb_nilai2 = $this->input->post('tbnilai2');
		$tb_nilai3 = $this->input->post('tbnilai3');
		
		$datatbl= array(
			'nilai1'		=> $tb_nilai1,
			'nilai2'		=> $tb_nilai2,
			'nilai3'		=> $tb_nilai3,
			'id_user'	=> $id_user,
			'username'	=> $user_name
		);

		$this->Xhilangmodel->lakukan_insert('tbl_nilai',$datatbl);
		redirect('/login');
	}
}