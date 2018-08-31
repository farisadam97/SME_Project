<?php 
 
class m_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function cek_nama()
	{
		$this->db->select('nama');
	    $this->db->from('user');
	    $this->db->where('nipp', $this->session->userdata('nipp'));
	    $result = $this->db->get();
	    $nama = $result->row();
	    return $nama->nama;
	}
}