<?php 
date_default_timezone_set('Asia/Jakarta');
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

	function checktoken()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$token = $this->input->post('token');
		$where = array(
			'username' => $username,
			'password' => $password, //password menggunakan MD5! without MD5? simply remove it lol
		);

		$fetchtokentimelastupdate = $this->modelverif->loadconfig("update_token_time");
		$tokenaccess = $this->modelverif->loadconfig("token_access");

		$cek1 = $this->modelverif->cek_user("tbl_user",$where);
		$cekconfigexpired = $this->modelverif->loadconfig("tokenexpiredtime");
		
		$timeadd = 0;
        if ($cekconfigexpired->value == 0) {
            $timeadd =+ 600;
        } elseif ($cekconfigexpired->value == 1) {
            $timeadd =+ 1800;
        } elseif ($cekconfigexpired->value == 2) {
            $timeadd =+ 3600;
        } elseif ($cekconfigexpired->value == 3) {
            $timeadd =+ 21600;
        } elseif ($cekconfigexpired->value == 4) {
            $timeadd =+ 43200;
        } else {
            $timeadd =+ 86400;
        }
	
		$timestamp = strtotime($fetchtokentimelastupdate->value);

		$cDate = strtotime(date('Y-m-d H:i:s'));

		$oldDate = $timestamp + $timeadd;

		if ($token == $tokenaccess->value) //kondisi berdasarkan jumlah record
		{
			if ($cDate > $oldDate) {
				echo "expired";
			} else {
				if($cek1->row()->role == 'peserta'){
					$data_session = array(
						'nama' => $username,
						'status' => "login",
						'iduser' => $cek1->row()->id_user, 
						'role' => $cek1->row()->role
					);
					$this->session->set_userdata($data_session);
					echo "peserta";
				} else {
					echo "failed";
				}
			}
			
		}
		else
		{
			echo "wrong";
		};	
	}

	function loginkeun()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password //password menggunakan MD5! without MD5? simply remove it lol
			);

		$cek1 = $this->modelverif->cek_user("tbl_user",$where);

		if ($cek1->num_rows() > 0) //kondisi berdasarkan jumlah record
		{
			if($cek1->row()->role == 'admin'){
				$data_session = array(
					'nama' => $username,
					'status' => "login",
					'iduser' => $cek1->row()->id_user, 
					'role' => $cek1->row()->role
				);
				$this->session->set_userdata($data_session);
				echo "admin";
			} else {
				echo "ok";
			}
		}
		else
		{
			echo "failed";
		};
	}

	function logoutkeun()
	{
		if($this->session->userdata('status') == 'login')
		{
			$this->session->sess_destroy();
			redirect(base_url('login'));//dis php
		}
		else
		{
			echo "LOGOUT FAILED! Error Code: 000";
		}
		
	}
}

?>