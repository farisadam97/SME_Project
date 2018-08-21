<?php
class m_inbox extends CI_Model
{

  public function getDataInbox() 
  {
    $data4 = $this->db->select('*')->from('pesan')->get();
    return $data4->result_array();
  }

}

?>
