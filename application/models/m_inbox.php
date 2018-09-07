<?php
class m_inbox extends CI_Model
{
  function __construct() {
    parent::__construct();
    }
  public function getDataInbox() 
  {
   
    $data4 = $this->db->select('*')->from('pesan')->where('nipp_penerima', $this->session->userdata('nipp'))->get();
    return $data4->result_array();
  }

  public function getDataInboxUnread()
  {
    
    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('read_pesan', 0);
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
    $unread = $this->db->get();
    return $unread->result_array();
  }

  public function getDataInboxItem($id_pesan) 
  {
    $this->db->set('read_pesan', '1');
    $this->db->where('id_pesan', $id_pesan);
    $this->db->update('pesan');

    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
    $data = $this->db->get();
    return $data->result_array();

    
  }

  public function balasPesan($id_pesan) 
  {
    $this->db->set('read_pesan', '1');
    $this->db->where('id_pesan', $id_pesan);
    $this->db->update('pesan');

    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
    $data = $this->db->get();
    return $data->result_array();

    
  }

  public function deleteDataInboxItem($id_pesan2)
  {
    $this->db->where_in('id_pesan', $id_pesan2);
    $this->db->delete('pesan');
  }


  public function getNama()
  {
    
  }
  public function kirimPesan($data_insert)
  {
    $this->db->insert('pesan',$data_insert);
  }

}

?>
