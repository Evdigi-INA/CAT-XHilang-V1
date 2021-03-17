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
}
