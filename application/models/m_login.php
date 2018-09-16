<?php 
ob_start();
// your code here


 
class m_login extends CI_Model{	

	function cek_login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}	

	function getRole() //dipake di home
	{
		$this->db->select('*');
	    $this->db->from('user');
	    $this->db->where('nipp', $this->session->userdata('nipp'));
	    $result = $this->db->get();
	    $role = $result->row();
	    return $role->role;
	}

	function getLoginDate()
	{
		$this->db->select('tanggal');
	    $this->db->from('user');
	    $this->db->where('nipp', $this->session->userdata('nipp'));
	    $sekarang = $this->db->get();
		return $sekarang->result_array();
	}

	public function set_counter()
    {
        $sql = 'SELECT * FROM user WHERE nipp = '.$this->session->userdata('nipp') ;
        $query = $this->db->query($sql);
        $date = DATE('Y-m-d');

        if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                    $data['login'] = $row['login'];
                    $data['poin'] = $row ['poin'];
                }
                $login= $data['login'];
                $login = $login + 1;

                $poin = $data['poin'];
                $poin = $poin + 1;

                $data = array(
                        'login' => $login,
                        'poin' => $poin,
                        'tanggal' => $date
                );
                $this->db->where('nipp', $this->session->userdata('nipp'));
                $this->db->update('user', $data);
            }
            return false;

    }

	function updateLoginCount()
	{	
		$this->db->set('tanggal', DATE('Y-m-d'));
		$this->db->set('login', 'login + 1');
	    $this->db->where('nipp', $this->session->userdata('nipp'));
	    $this->db->update('user');
	}

	public function updateKeterangan($id_conversation)
	{
		$this->db->set('keterangan', 'Solved');
		$this->db->where('id_conversation', $id_conversation);
		$this->db->update('pesan');
	}
}