<?php 

class Admin_Controller extends CI_Controller
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
	}

	function index()
	{
		$this->load->model('Xhilangmodel'); //loadmodelnya dulu
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
		$this->load->model('Xhilangmodel'); //loadmodelnya dulu
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->Xhilangmodel->tampilinformasiakun('tbl_user',$where);
		//END OF DEBUG LOG//
			//load view admin/blablabla.php
		$data['title'] = 'Dashboard - Menu Laporan';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/menu_laporan');
		$this->load->view('admin/footer');
	}

	function pilih_kelola_soal()
	{
		$this->load->model('Xhilangmodel'); //loadmodelnya dulu
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
		
		//END OF DEBUG LOG//
			//load view admin/blablabla.php
		if ($idsoal == 'S001') {
			$data['title'] = 'Dashboard - Kelola Soal Angka';
			$idkolomjawaban = "S0JL";
		} else if($idsoal == 'S002') {
			$data['title'] = 'Dashboard - Kelola Soal Huruf';
			$idkolomjawaban = "S1JL";
		} else {
			$data['title'] = 'Dashboard - Kelola Soal Simbol';
			$idkolomjawaban = "S2JL";
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
		$valuesoal1		= $this->input->post('tbsoalkolom1a');
		$valuesoal2		= $this->input->post('tbsoalkolom1b');
		$valuesoal3		= $this->input->post('tbsoalkolom1c');
		$valuesoal4		= $this->input->post('tbsoalkolom1d');

		$soalvalueunited = $valuesoal1."-".$valuesoal2."-".$valuesoal3."-".$valuesoal4;

		$data = array(
			'soal' => $soalvalueunited
		);

		$where = array(
			'id_kolomjawaban' => $idkolomjawabannya,
			'kolom' => $kolomnya
		);
		$this->load->model('Xhilangmodel'); //loadmodelnya dulu
		$this->Xhilangmodel->lakukan_update($where,$data,'tbl_kolomjawaban');
		if ($idkolomjawabannya == 'S0JL') {
			$message = "Perubahan Berhasil disimpan!";
    		echo "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S001') </script>";
			
		} else {
			print "<script type=\"text/javascript\">alert('u must be from aanother world?');
			</script>";
		}
		
	}

	function updatelistjawaban() {
		$idkolomjawabannya = $this->input->get('idkolomjawaban');
		$kolomnya = $this->input->get('kolomsoal');
		$i=1;
		$u=0;
		$ap = array('a','b','c','d');
		$output = '';
		$output1 ='';

		if ($kolomnya == 'KLM01') { //JIKA Kolom 1
			do{ //lakukan
				foreach ($ap as $k) { //pilah2 dulu array yang a b c d
					$a[$i] = $this->input->post('tb'.$k[$u].'baris'.$i.'kolom1'); //ambil isi2 textbox yang totalnya ada 4 (sebanyak pilihan yang ditentuin yaitu a b c d)
					//echo $a[$i].' : Textbox  baris '.$i.'<br>'; //munculin nilai for debug only
					$output.= $a[$i].' ';
				}
				$b[$i] = $this->input->post('radiobaris'.$i.'kolom1'); //mengambil nilai radio sesuai yang dipilih
				$output1.= $b[$i]; 
				//echo $b[$i].' : Jawaban dipilih pada baris '.$i.'<br>'; //debug untuk cek nilai radio yang dipilih
				$i++;
			}
			while ($i <= 30 && $u < count($ap));
			$nganu = wordwrap($output, 8, '-', true); //kumpulkan ke variabel nganau, sekalian di trim
			//echo 'this is the fucking output and it will be ready to be inserted to the facking database!: '.wordwrap($output, 8, '-', true); //debug only
			$nganu2 = wordwrap($output1,1,'-',true);
			//echo wordwrap($nganu2); debug only
			$data = array(
				'listjawaban' => $nganu,
				'jawabanbenar' => $nganu2
			);

			$where = array(
				'id_kolomjawaban' => $idkolomjawabannya,
				'kolom' => $kolomnya
			);

			$this->load->model('Xhilangmodel'); //loadmodelnya dulu
			$this->Xhilangmodel->lakukan_update($where,$data,'tbl_kolomjawaban');

			if ($idkolomjawabannya == 'S0JL') {
				$message = "Perubahan Berhasil disimpan!";
	    		echo "<script type='text/javascript'>alert('$message');window.location = ('kelola_soal/S001') </script>";
			
			} else {
				print "<script type=\"text/javascript\">alert('u must be from aanother world?');
				</script>";
			}

		} else {
			echo "just copy the code block on first statement above if u have more than one column dickhead!";
		}

	}
}