<?php 

require APPPATH.'vendor/autoload.php';
date_default_timezone_set('Asia/Jakarta');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Admin_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('modelverif');

		//detection authorization! jadi lo GAK BISA SEMBARANG MASUK KE CONTROLLER INI BOS!!! (Kalo SELAIN controller ini sih bisa)
		if($this->session->userdata('status') != "login")
		{
			redirect(base_url("Verification"));
		}

		if($this->session->userdata('role') != "admin")
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

		$data['title'] = 'Dashboard';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');	
	}

	function laporan_list()
	{
	
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);

		$data['top10'] = $this->Xhilangmodel->p_top10();
		$data['countpeserta'] = $this->Xhilangmodel->hitungpesertaberdasarkanstatus();
		$data['configtokenexpiredtime'] = $this->Xhilangmodel->loadconfig('tokenexpiredtime');
		$data['configtokenvalue'] = $this->Xhilangmodel->loadconfig('token_access');
		$data['configtokenlastupdated'] = $this->Xhilangmodel->loadconfig('update_token_time');
		$data['title'] = 'Dashboard - Menu Laporan';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/menu_laporan');
		$this->load->view('admin/footer');
	}

	function refreshtokenlistpeserta()
	{
		$data=$this->Xhilangmodel->fetchpesertatokenlist();
        echo json_encode($data);
	}

	function daftar_peserta() //tampildata peserta
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);
		$data['listpeserta'] = $this->Xhilangmodel->tampil_peserta()->result();
		$data['qeditpeserta'] = $this->Xhilangmodel->tampil_edit_peserta();
		$data['title'] = 'Dashboard - Daftar Peserta';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/daftar_peserta');
		$this->load->view('admin/edit_data_peserta');
		$this->load->view('admin/footer');
	}

	function pilih_kelola_soal()
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);

		$data['title'] = 'Dashboard - Pilih Jenis Soal';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/jenis_kelola_soal');
		$this->load->view('admin/footer');
	}

	function kelola_soal($idsoal)
	{
		$this->load->model('Xhilangmodel'); //loadmodelnya dulu
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);

		$jenissoal = array(
			"id_soal" => $idsoal
		);
		$data['idkolomjawaban'] = '';
		if ($idsoal == 'S001') {
			$data['title'] = 'Dashboard - Kelola Soal Angka';
			$data['jenissoalnya'] = "Soal Angka (S0JL)";
			$idkolomjawaban = 'S0JL';

		} else if($idsoal == 'S002') {
			$data['title'] = 'Dashboard - Kelola Soal Huruf';
			$data['jenissoalnya'] = "Soal Huruf (S1JL)";
			$idkolomjawaban = 'S1JL';
		} else {
			$data['title'] = 'Dashboard - Kelola Soal Simbol';
			$data['jenissoalnya'] = "Soal Simbol (S2JL)";
			$idkolomjawaban = 'S2JL';
		}
		
		$jenissoalkolom1 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM01"
		);
		$jenissoalkolom2 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM02"
		);
		$jenissoalkolom3 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM03"
		);
		$jenissoalkolom4 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM04"
		);
		$jenissoalkolom5 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM05"
		);
		$jenissoalkolom6 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM06"
		);
		$jenissoalkolom7 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM07"
		);
		$jenissoalkolom8 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM08"
		);
		$jenissoalkolom9 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM09"
		);
		$jenissoalkolom10 = array(
			"id_kolomjawaban" => $idkolomjawaban,
			"kolom" => "KLM10"
		);

		$data['datajawabanlistkolom1'] = $this->Xhilangmodel->listjawaban($jenissoalkolom1);
		$data['datajawabanlistkolom2'] = $this->Xhilangmodel->listjawaban($jenissoalkolom2);
		$data['datajawabanlistkolom3'] = $this->Xhilangmodel->listjawaban($jenissoalkolom3);
		$data['datajawabanlistkolom4'] = $this->Xhilangmodel->listjawaban($jenissoalkolom4);
		$data['datajawabanlistkolom5'] = $this->Xhilangmodel->listjawaban($jenissoalkolom5);
		$data['datajawabanlistkolom6'] = $this->Xhilangmodel->listjawaban($jenissoalkolom6);
		$data['datajawabanlistkolom7'] = $this->Xhilangmodel->listjawaban($jenissoalkolom7);
		$data['datajawabanlistkolom8'] = $this->Xhilangmodel->listjawaban($jenissoalkolom8);
		$data['datajawabanlistkolom9'] = $this->Xhilangmodel->listjawaban($jenissoalkolom9);
		$data['datajawabanlistkolom10'] = $this->Xhilangmodel->listjawaban($jenissoalkolom10);

		$this->load->view('admin/header',$data);
		$this->load->view('admin/kelola_soal');
		$this->load->view('admin/footer');
	}

	function updatesoal(){
		$idkolomjawabannya = $this->input->get('idkolomjawaban');
		$kolomnya = $this->input->get('kolomsoal');

		if($kolomnya == 'KLM01') {
			$valuesoal1		= $this->input->post('tbsoalkolom1a');
			$valuesoal2		= $this->input->post('tbsoalkolom1b');
			$valuesoal3		= $this->input->post('tbsoalkolom1c');
			$valuesoal4		= $this->input->post('tbsoalkolom1d');
			$valuesoal5		= $this->input->post('tbsoalkolom1e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;	
		} elseif ($kolomnya == 'KLM02') {
			$valuesoal1		= $this->input->post('tbsoalkolom2a');
			$valuesoal2		= $this->input->post('tbsoalkolom2b');
			$valuesoal3		= $this->input->post('tbsoalkolom2c');
			$valuesoal4		= $this->input->post('tbsoalkolom2d');
			$valuesoal5		= $this->input->post('tbsoalkolom2e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		} elseif ($kolomnya == 'KLM03') {
			$valuesoal1		= $this->input->post('tbsoalkolom3a');
			$valuesoal2		= $this->input->post('tbsoalkolom3b');
			$valuesoal3		= $this->input->post('tbsoalkolom3c');
			$valuesoal4		= $this->input->post('tbsoalkolom3d');
			$valuesoal5		= $this->input->post('tbsoalkolom3e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		} elseif ($kolomnya == 'KLM04') {
			$valuesoal1		= $this->input->post('tbsoalkolom4a');
			$valuesoal2		= $this->input->post('tbsoalkolom4b');
			$valuesoal3		= $this->input->post('tbsoalkolom4c');
			$valuesoal4		= $this->input->post('tbsoalkolom4d');
			$valuesoal5		= $this->input->post('tbsoalkolom4e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		} elseif ($kolomnya == 'KLM05') {
			$valuesoal1		= $this->input->post('tbsoalkolom5a');
			$valuesoal2		= $this->input->post('tbsoalkolom5b');
			$valuesoal3		= $this->input->post('tbsoalkolom5c');
			$valuesoal4		= $this->input->post('tbsoalkolom5d');
			$valuesoal5		= $this->input->post('tbsoalkolom5e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		} elseif ($kolomnya == 'KLM06') {
			$valuesoal1		= $this->input->post('tbsoalkolom6a');
			$valuesoal2		= $this->input->post('tbsoalkolom6b');
			$valuesoal3		= $this->input->post('tbsoalkolom6c');
			$valuesoal4		= $this->input->post('tbsoalkolom6d');
			$valuesoal5		= $this->input->post('tbsoalkolom6e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;	
		} elseif ($kolomnya == 'KLM07') {
			$valuesoal1		= $this->input->post('tbsoalkolom7a');
			$valuesoal2		= $this->input->post('tbsoalkolom7b');
			$valuesoal3		= $this->input->post('tbsoalkolom7c');
			$valuesoal4		= $this->input->post('tbsoalkolom7d');
			$valuesoal5		= $this->input->post('tbsoalkolom7e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		} elseif ($kolomnya == 'KLM08') {
			$valuesoal1		= $this->input->post('tbsoalkolom8a');
			$valuesoal2		= $this->input->post('tbsoalkolom8b');
			$valuesoal3		= $this->input->post('tbsoalkolom8c');
			$valuesoal4		= $this->input->post('tbsoalkolom8d');
			$valuesoal5		= $this->input->post('tbsoalkolom8e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		} elseif ($kolomnya == 'KLM09') {
			$valuesoal1		= $this->input->post('tbsoalkolom9a');
			$valuesoal2		= $this->input->post('tbsoalkolom9b');
			$valuesoal3		= $this->input->post('tbsoalkolom9c');
			$valuesoal4		= $this->input->post('tbsoalkolom9d');
			$valuesoal5		= $this->input->post('tbsoalkolom9e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		} else {
			$valuesoal1		= $this->input->post('tbsoalkolom10a');
			$valuesoal2		= $this->input->post('tbsoalkolom10b');
			$valuesoal3		= $this->input->post('tbsoalkolom10c');
			$valuesoal4		= $this->input->post('tbsoalkolom10d');
			$valuesoal5		= $this->input->post('tbsoalkolom10e');

			$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4."-".$valuesoal5;
		}
		$data = array(
			'soal' => $soalvalueunited
		);

		$where = array(
			'id_kolomjawaban' => $idkolomjawabannya,
			'kolom' => $kolomnya
		);
		
		$this->Xhilangmodel->lakukan_update($where,$data,'tbl_kolomjawaban');
		
		if ($idkolomjawabannya == 'S0JL') {
			$message = "Perubahan pada SOAL ANGKA ".$kolomnya." Berhasil disimpan!";
    		print "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S001'); </script>";
		} elseif ($idkolomjawabannya == 'S1JL') {
			$message = "Perubahan pada SOAL HURUF ".$kolomnya." Berhasil disimpan!";
    		print "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S002'); </script>";
		} else {
			$message = "Perubahan pada SOAL SIMBOL ".$kolomnya." Berhasil disimpan!";
    		print "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S003'); </script>";
		}		
	}

	function updatelistjawaban() {
		$idkolomjawabannya = $this->input->get('idkolomjawaban');
		$kolomnya = $this->input->get('kolomsoal');
		$i=1;	
		$u=0;
		$ap = array('1','2','3','4');
		$output = '';

		if ($kolomnya == 'KLM01') { //JIKA Kolom 1
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom1'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM02') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom2'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM03') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom3'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM04') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom4'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM05') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom5'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM06') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom6'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM07') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom7'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM08') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom8'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} elseif ($kolomnya == 'KLM09') {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom9'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		} else {
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom10'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				} 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 50 && $u < count($ap));
		}

		if ($idkolomjawabannya == 'S0JL') {
			$nganu = wordwrap($output, 8, '-', true); //kumpulkan ke variabel nganu daftar jawaban pada tbnya, sekalian di trim
			//echo wordwrap($nganu2); debug only
			$data = array(
				'listjawaban' => $nganu
			);

			$where = array(
				'id_kolomjawaban' => $idkolomjawabannya,
				'kolom' => $kolomnya
			);

			$this->load->model('Xhilangmodel'); //loadmodelnya dulu
			$this->Xhilangmodel->lakukan_update($where,$data,'tbl_kolomjawaban');
			$message = "Perubahan pada jawaban angka untuk ".$kolomnya." Berhasil disimpan!";
    		print "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S001') </script>";
		
		} elseif ($idkolomjawabannya == 'S1JL') {
			$nganu = wordwrap($output, 8, '-', true); //kumpulkan ke variabel nganu daftar jawaban pada tbnya, sekalian di trim
			//echo wordwrap($nganu2); debug only
			$data = array(
				'listjawaban' => $nganu
			);

			$where = array(
				'id_kolomjawaban' => $idkolomjawabannya,
				'kolom' => $kolomnya
			);

			$this->load->model('Xhilangmodel'); //loadmodelnya dulu
			$this->Xhilangmodel->lakukan_update($where,$data,'tbl_kolomjawaban');
			$message = "Perubahan pada jawaban huruf untuk ".$kolomnya." Berhasil disimpan!";
    		print "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S002') </script>";
		} else {
			$nganu = $output;

			//$owo = str_split($nganu, 4); //kumpulkan ke variabel nganu daftar jawaban pada tbnya, sekalian di trim (12 karena UTF8 Simbol, beda dengan yang diatur ke 8)
			$encode = mb_convert_encoding($nganu, 'UTF-7');
			$wrap = wordwrap($encode,21,' - ',true);
			//echo $wrap.'<br><br>';
			//echo strlen($encode).' panjaangnya<br>';
			$decode = mb_convert_encoding($wrap, 'UTF-8','UTF-7');
			$cleaned = str_replace(' - ','-',$decode);
			//echo $cleaned;
			//$utf7 = wordwrap(mb_convert_encoding($nganu, 'UTF-7'),21,' - ',true);//debug only
			//$utf8 = iconv('UTF-7','UTF-8',$utf7);
			//echo $utf7.'<br><br>';
			
			//$cleaned = str_replace(' - ','-',$utf8);
			$lengthdata = strlen($encode);
			//echo 'panjang string '.strlen($cleaned);
			if ($lengthdata == 1000) {
				$data = array(
					'listjawaban' => $cleaned
				);

				$where = array(
					'id_kolomjawaban' => $idkolomjawabannya,
					'kolom' => $kolomnya
				);

				$this->load->model('Xhilangmodel'); //loadmodelnya dulu
				$this->Xhilangmodel->lakukan_update($where,$data,'tbl_kolomjawaban');
				$message = "Perubahan pada jawaban simbol untuk ".$kolomnya." Berhasil disimpan!";
	    		print "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S003') </script>";
			} else {
				$message = "Terdapat karakter bukan simbol pada inputan anda (".$kolomnya."), harap masukan simbol!";
				print "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S003'); </script>";
			}
		}
		
		//echo 'this is the fucking output and it will be ready to be inserted to the facking database!: '.wordwrap($output, 12, '-', true); //debug only

	}

	function update_token()
	{
        $token=$this->input->post('token');
        $valuetime=$this->input->post('timeexpiredvalue');

        $updatetime = array('value' => date('Y-m-d H:i:s'));
 		$tokenvalue = array('value' => $token);
 		$tokenexpiredtime = array('value' => $valuetime);
 		$whereexpiredtokenoption = array('nama_config' => 'tokenexpiredtime');
 		$wheretokenaccessvalueoption = array('nama_config' => 'token_access');
 		$wheretokenupdatelasttimeoption = array('nama_config' => 'update_token_time');

 		$this->Xhilangmodel->lakukan_update($whereexpiredtokenoption,$tokenexpiredtime,'tbl_config');
 		$this->Xhilangmodel->lakukan_update($wheretokenaccessvalueoption,$tokenvalue,'tbl_config');
 		$this->Xhilangmodel->lakukan_update($wheretokenupdatelasttimeoption,$updatetime,'tbl_config');
	}

	function update_peserta()
	{
		$tbidusr = $this->input->post('tbiduser');
		$tbidktp = $this->input->post('tbidnomor');
		$tbnamleng = $this->input->post('tbnamalengkap');
		$tbjk = $this->input->post('tbjeniskelamin');
		$tbalmt = $this->input->post('tbalamat');
		$tbusernem = $this->input->post('tbusername');
		$tbpasswod = $this->input->post('tbpassword');
		$tbrol = $this->input->post('tbrole');

		$datatbl1 = array(
			'no_ktp' => $tbidktp,
			'nama_lengkap' => $tbnamleng,
			'alamat' => $tbalmt,
			'jenis_kelamin' => $tbjk
		);

		$datatbl2 = array(
			'username' => $tbusernem,
			'password' => $tbpasswod,
			'role' => $tbrol
		);

		$where = array('id_user' => $tbidusr);

		$this->Xhilangmodel->lakukan_update($where,$datatbl1,'tbl_peserta');
		$this->Xhilangmodel->lakukan_update($where,$datatbl2,'tbl_user');
		redirect('/admin/Admin_Controller/daftar_peserta');
	}

	public function tambah_peserta()
	{
		$iduser = $this->input->post('tbiduser');
		$tbnoktp = $this->input->post('tbidnomor');
		$tbnamaleng = $this->input->post('tbnamalengkap');
		$tbjk = $this->input->post('tbjeniskelamin');
		$tbalamat	= $this->input->post('tbalamat');
		$tbusernem = $this->input->post('tbusername');
		$tbpasswod = $this->input->post('tbpassword');
		$tbrol = $this->input->post('tbrole');
		$tbstatus = 'BM';
		$datatbl1= array(
			'id_user'	=> $iduser,
			'no_ktp'		=> $tbnoktp,
			'nama_lengkap'	=> $tbnamaleng,
			'alamat'	=> $tbalamat,
			'jenis_kelamin'	=> $tbjk,
			'status' => $tbstatus
			
		);

		$datatbl2=array(
			'id_user'	=> $iduser,
			'username'		=> $tbusernem,
			'password'	=> $tbpasswod,
			'role'	=> $tbrol
		);

		$insert1 = $this->Xhilangmodel->lakukan_insert('tbl_peserta',$datatbl1);
		$insert2 = $this->Xhilangmodel->lakukan_insert('tbl_user',$datatbl2);
		if ($insert1>0 && $insert2>0) {
			redirect('/admin/Admin_Controller/daftar_peserta');
		} else {
			echo "Data sudah tersedia";
		}
	}

	public function hapus_peserta($id_user)
	{
		$fetchid = $id_user;
		$this->Xhilangmodel->lakukan_delete_peserta($fetchid);
		$message = "Sukses menghapus ".$id_user.".";
		print "<script type='text/javascript'>alert('$message');window.location = ('daftar_peserta'); </script>";
		redirect('/admin/Admin_Controller/daftar_peserta');
	}

	function peserta_sedang_test() //tampildata peserta
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);
		$data['listpesertasedangtest'] = $this->Xhilangmodel->psedangtest();
		//END OF DEBUG LOG//
		//load view admin/blablabla.php
		$data['title'] = 'Sedang Test';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/peserta_sedang_test');
		$this->load->view('admin/footer');
	}

	function peserta_dinilai()
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);
		$data['listpesertadinilai'] = $this->Xhilangmodel->tampil_peserta_with_nilai();
		//END OF DEBUG LOG//
		//load view admin/blablabla.php
		$data['title'] = 'Peserta Dinilai';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/peserta_dinilai');
		$this->load->view('admin/footer');	
	}

	function peserta_belum_test()
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);
		$data['listpesertabelumdinilai'] = $this->Xhilangmodel->tampil_peserta_belum_ngerjain();
		//END OF DEBUG LOG//
		//load view admin/blablabla.php
		$data['title'] = 'Peserta Dinilai';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/peserta_belum_test');
		$this->load->view('admin/footer');	
	}

	public function detail_peserta($id_peserta)
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);

		$dimana = array('tbl_nilai.id_user' => $id_peserta);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);
		$data['dtlnilailist'] = $this->Xhilangmodel->detail_nilai_peserta($dimana);
		$data['infop'] = $this->Xhilangmodel->info_peserta_overview($dimana);
		//END OF DEBUG LOG//
		//load view admin/blablabla.php
		$data['title'] = 'Peserta Dinilai';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/detail_nilai_peserta');
		$this->load->view('admin/footer');	
	}

	function upload()
	{
		$fileName = $_FILES['fileexcel']['name'];
         
        $config['upload_path'] = './temp_doc/'; //path upload
        $config['file_name'] = $fileName;  // nama file
        $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
        $config['max_size'] = 10000; // maksimal sizze
 
        $this->load->library('upload'); //meload librari upload
        $this->upload->initialize($config);
          
        if(! $this->upload->do_upload('fileexcel') ){
            echo $this->upload->display_errors();
            exit();
        }
              
        $inputFileName = './temp_doc/'.$fileName;
 
        try {

            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }

		$arraysoaldata =array();

		$idjs = $objExcel->getSheet(1)->getCellByColumnAndRow(1,1)->getValue();

    	//$ngan = 0;
        foreach ($objExcel->getAllSheets() as $key => $sheet) {              

        	$idjenissoal = $sheet->getCellByColumnAndRow(1,1)->getValue();

        	$kolom = $sheet->getCellByColumnAndRow(1,2)->getValue();

        	$soalnyaa = $sheet->getCellByColumnAndRow(1,3)->getValue();
        	$soalnyab = $sheet->getCellByColumnAndRow(2,3)->getValue();
        	$soalnyac = $sheet->getCellByColumnAndRow(3,3)->getValue();
        	$soalnyad = $sheet->getCellByColumnAndRow(4,3)->getValue();
        	$soalnyae = $sheet->getCellByColumnAndRow(5,3)->getValue();
        	$datasoal = $soalnyaa.'-'.$soalnyab.'-'.$soalnyac.'-'.$soalnyad.'-'.$soalnyae;
        	
        	if (!$idjenissoal || !$kolom || !$soalnyaa || !$soalnyab || !$soalnyac || !$soalnyad || !$soalnyae) {
				unlink($inputFileName);
				die('Isi file tidak lengkap : pastikan setiap sheet tercantum id jenis soal, kolom, dan jawaban peserta');
			}//handling empty field

        	$data = '';
        	
            $row = 4;
            for ($row; $row <= 53; $row++) { //limit untuk 50 soal/kolom 
                $pilihana = $sheet->getCellByColumnAndRow(1,$row)->getValue();
                $pilihanb = $sheet->getCellByColumnAndRow(2,$row)->getValue();
                $pilihanc = $sheet->getCellByColumnAndRow(3,$row)->getValue();
                $pilihand = $sheet->getCellByColumnAndRow(4,$row)->getValue();
                $data.= $pilihana.' '.$pilihanb.' '.$pilihanc.' '.$pilihand.'-';
                if (!$pilihana || !$pilihanb || !$pilihanc || !$pilihand) {
                	unlink($inputFileName);
                	die('Isi file tidak lengkap : soal-soal ada yang kosong, harap cek kembali');
                }
            }
        	
        	$datakomplit = array(
        		'id_kolomjawaban' 	=> $idjenissoal,
        		'kolom'				=> $kolom,
        		'soal'				=> $datasoal,
        		'jawabanlist'		=> rtrim($data, '-')
        	);     
 				
            array_push($arraysoaldata, $datakomplit);
        }

        //print_r($arraysoaldata);

        //simpan data ke database
		$this->Xhilangmodel->import_soal($arraysoaldata);

		unlink($inputFileName);
        if ($idjs == 'S0JL') {
			$message = "Sukses upload soal angka.";
			redirect('/admin/Admin_Controller/kelola_soal/S001');
		} elseif ($idjs == 'S1JL') {
			$message = "Sukses upload soal huruf.";
			redirect('/admin/Admin_Controller/kelola_soal/S002');
		} elseif ($idjs == 'S2JL') {
			$message = "Sukses upload soal simbol.";
			redirect('/admin/Admin_Controller/kelola_soal/S003');
		} else {
			echo "failed";
		}

		
	}
}

