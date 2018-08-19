<?php
class home_model extends CI_Model
{

  public function getDataExpert() 
  {
    $data1 = $this->db->select('*')->from('sme_list')->limit(8)->get();
    return $data1->result_array();
  }

}

?>
