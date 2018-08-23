<?php
class m_header extends CI_Model
{
  
  public function getDataKnowledgeTopik()
  {
    $this->db->select('*');
    $this->db->from('user');
    $dataHeader = $this->db->get();
    return $dataHeader->result_array();
  }

} 

?>