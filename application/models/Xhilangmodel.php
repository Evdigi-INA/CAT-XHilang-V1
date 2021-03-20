<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Xhilangmodel extends CI_Model
{
	function tampilinformasiakun($table,$where)
	{
		$select = array('*');

        $qinfo = $this->db->select($select)->from($table)->where($where)->get();
        return $qinfo->result(); 
	}

	function listjawaban($data) {
		$select = array('*');
		$get = $this->db->select($select)->from('tbl_kolomjawaban')->where($data)->get();
		return $get->result();	
	}

	function lakukan_update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function lakukan_insert($table,$data)
	{
		$insert = $this->db->insert($table,$data);
		return $insert;
	}

	function tampil_peserta()
    {
        return $this->db->get('tbl_peserta');
    }

    function tampil_edit_peserta()
    {
    	$select = array('tbl_user.id_user','tbl_peserta.no_ktp','tbl_peserta.nama_lengkap','tbl_peserta.jenis_kelamin','tbl_peserta.alamat','tbl_user.username','tbl_user.password','tbl_user.role');
    	$querya = $this->db->select($select)->from('tbl_peserta')->join('tbl_user','tbl_peserta.id_user = tbl_user.id_user')->get();
    	return $querya->result();
    }

    function lakukan_delete_peserta($tbiduser)
	{
		$this->db->where('id_user', $tbiduser);
		
     	$query1 = $this->db->get('tbl_user');
     	$query2 = $this->db->get('tbl_peserta');

     	$this->db->delete('tbl_user', array('id_user' => $tbiduser));
     	$this->db->delete('tbl_peserta', array('id_user' => $tbiduser));
    }

    function tampil_soal()
    {
        $select = array('id_kolomjawaban','soal');

        $soal = $this->db->select($select)->from('tbl_kolomjawaban')->get();
        return $soal->result();  
    }
}
