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

    function tampil_soal2($data)
    {
        $select = array('*');
		$get = $this->db->select($select)->from('tbl_kolomjawaban')->where($data)->get();
		return $get->result();	  
    }

    function hitungpesertaberdasarkanstatus()
    {
        $select = array('(select count(*) from tbl_peserta where status = "BM") as belummengerjakan','(select count(*) from tbl_peserta where status = "SM") as sedangmengerjakan','(select count(*) from tbl_peserta where status = "DONE") as selesaimengerjakan','(select count(*) from tbl_peserta) as totalpeserta');

        $count = $this->db->select($select)->from('tbl_peserta')->limit(1)->get();
        return $count->result();      
    }

    function psedangtest()
    {
        $select = array('*');
        $wherenya = array('status' => 'SM' );

        $list = $this->db->select($select)->from('tbl_peserta')->where($wherenya)->get();
        return $list->result();
    }

    function p_top10()
    {
        $select = array('tbl_peserta.id_user as iduser', 'tbl_peserta.nama_lengkap as namleng','tbl_peserta.no_ktp as noktp', 'tbl_nilai.nilai1 as NilaiAngkaHilang', 'tbl_nilai.nilai2 as NilaiHurufHilang', 'tbl_nilai.nilai3 as NilaiSimbolHilang');
        $wherenya = array('status' => 'DONE' );
        $gas = $this->db->select($select)->from('tbl_peserta')->join('tbl_nilai','tbl_nilai.id_user = tbl_peserta.id_user')->order_by('NilaiAngkaHilang', 'NilaiHurufHilang', 'NilaiSimbolHilang','desc')->where($wherenya)->limit(10)->get();

        return $gas->result();
    }

    function tampil_peserta_with_nilai()
    {
        $select = array('tbl_peserta.id_user as iduser', 'tbl_peserta.nama_lengkap as namleng','tbl_peserta.no_ktp as noktp','tbl_peserta.alamat as alamat','tbl_peserta.jenis_kelamin as jk','tbl_nilai.nilai1 as NilaiAngkaHilang', 'tbl_nilai.nilai2 as NilaiHurufHilang', 'tbl_nilai.nilai3 as NilaiSimbolHilang');
        $wherenya = array('status' => 'DONE' );
        $gas = $this->db->select($select)->from('tbl_peserta')->join('tbl_nilai','tbl_nilai.id_user = tbl_peserta.id_user')->order_by('NilaiAngkaHilang', 'NilaiHurufHilang', 'NilaiSimbolHilang','asc')->where($wherenya)->get();

        return $gas->result();
    }

    function detail_nilai_peserta($where)
    {
        $select = array('*');
        $dtl = $this->db->select($select)->from('tbl_nilai')->where($where)->order_by('tanggal','asc')->get();
        return $dtl->result();
    }

    function info_peserta_overview($where)
    {
        $select = array('tbl_user.id_user as iduser','tbl_peserta.no_ktp as noktp','tbl_peserta.nama_lengkap as namleng','tbl_peserta.jenis_kelamin as jk','tbl_peserta.alamat as almt','tbl_user.username as username','tbl_user.role as role', 'tbl_nilai.nilai1 as n1','tbl_nilai.nilai2 as n2', 'tbl_nilai.nilai3 as n3','tbl_nilai.tanggal as datamasuk');
        $querya = $this->db->select($select)->from('tbl_peserta')->join('tbl_user','tbl_peserta.id_user = tbl_user.id_user')->join('tbl_nilai','tbl_peserta.id_user = tbl_nilai.id_user')->where($where)->order_by('datamasuk','ASC')->limit(1)->get();
        return $querya->result();
    }

    function tampil_peserta_belum_ngerjain()
    {
        $select = array('id_user', 'nama_lengkap','no_ktp','alamat','jenis_kelamin');
        $wherenya = array('status' => 'BM' );
        $gas = $this->db->select($select)->from('tbl_peserta')->where($wherenya)->get();

        return $gas->result();    
    }

    function fetchpesertatokenlist()
    {
        $select = array('tbl_user.id_user as iduser','tbl_peserta.no_ktp as noktp','tbl_user.username as username','tbl_user.role as role','tbl_user.token_access as token');
        $querya = $this->db->select($select)->from('tbl_peserta')->join('tbl_user','tbl_peserta.id_user = tbl_user.id_user')->get();
        return $querya->result();   
    }
}
