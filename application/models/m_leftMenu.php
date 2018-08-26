<?php
class m_leftMenu extends CI_Model
{

  public function countDataInbox() 
  {
    $countPesan = $this->db->count_all('pesan');
    return $countPesan;
  }
}

?>
