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

	function checktoken()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$token = $this->input->post('token');
		$where = array(
			'username' => $username,
			'password' => $password, //password menggunakan MD5! without MD5? simply remove it lol
			'token_access' => $token
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
				echo "admin";
			} else {
				echo "peserta";
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
			echo "ok";
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

	function update_token()
	{
		$iduser=$this->input->post('username');
        $password=$this->input->post('password');
        $token=$this->input->post('token');

        $where = array(
			'username'		=> $iduser,
			'password'		=> $password
		);
 		
 		$data = array('token_access' => $token);

 		$this->modelverif->lakukan_update($where,$data,'tbl_user');
	}
}

?>