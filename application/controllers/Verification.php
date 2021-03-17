<?php 

class Verification extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('modelverif');
	}

	function index()
	{
		$this->load->view('login_page');	
	}

	function loginkeun()
	{
		$username = $this->input->post('tbusername');
		$password = $this->input->post('tbpassword');
		$where = array(
			'username' => $username,
			'password' => $password //password menggunakan MD5! without MD5? simply remove it lol
			);

		$cek1 = $this->modelverif->cek_user("tbl_user",$where);

		if ($cek1->num_rows() > 0) //kondisi berdasarkan jumlah record
		{
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'iduser' => $cek1->row()->id_user, 
				'role' => $cek1->row()->role
			);
			$this->session->set_userdata($data_session);
			if($cek1->row()->role == 'admin'){
				redirect(base_url("index.php/admin/Admin_Controller/index"));
			} else {
				redirect(base_url("index.php/peserta/Peserta_Controller/index"));
			}
			
		}
		else
		{
			print "<script type=\"text/javascript\">alert('Username atau Password salah!');
			</script>";
			$this->load->view('login_page');
		};
	}

	function logoutkeun()
	{
		if($this->session->userdata('status') == 'login')
		{
			$this->session->sess_destroy();
			redirect(base_url('Verification'));//dis php
		}
		else
		{
			echo "LOGOUT FAILED! Error Code: 000";
		}
		
	}
}

?>