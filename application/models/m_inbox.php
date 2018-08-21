<?php
class m_inbox extends CI_Model
{

  public function getDataInbox() 
  {
    $data4 = $this->db->select('*')->from('pesan')->get();
    return $data4->result_array();
  }

  public function getDataInboxItem($id_pesan) 
  {
    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('id_pesan', $id_pesan);
    $data = $this->db->get();
    return $data->result_array();
  }

}

?>
