<?php
class home_model extends CI_Model
{

  public function getDataExpert() 
  {
    $data1 = $this->db->select('*')->from('sme_list')->limit(8)->get();
    return $data1->result_array();
  }

  public function getDataPengetahuan()
  {
    $this->db->select('*');
    $this->db->from('pengetahuan');
    $this->db->join('topik', 'pengetahuan.id_pengetahuan = topik.id_pengetahuan', 'left');
    $this->db->join('sme_pengetahuan', 'topik.id_pengetahuan = sme_pengetahuan.id_pengetahuan', 'left');
	$data2 = $this->db->get();
  }

}

?>
