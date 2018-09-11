<?php
class m_home extends CI_Model
{

  public function getDataExpert() 
  {
    $data1 = $this->db->select('*')->from('sme_list')->limit(8)->get();
    return $data1->result_array();
  }

  public function getDataPengetahuanTopik()
  {
    $this->db->select('pengetahuan.id_pengetahuan, pengetahuan.nama_pengetahuan, GROUP_CONCAT(topik.nama_topik SEPARATOR ";") as topik');
    $this->db->from('pengetahuan');
    $this->db->join('topik', 'pengetahuan.id_pengetahuan = topik.id_pengetahuan', 'left');
    $this->db->group_by('pengetahuan.id_pengetahuan');
    $this->db->limit(5);
  	$data2 = $this->db->get();
  	return $data2->result_array();
  }

  public function getDataPengetahuanExpert()
  {
    $this->db->select('GROUP_CONCAT(sme_list.nama_sme SEPARATOR ";") as expert');
    $this->db->from('pengetahuan');
    $this->db->join('sme_pengetahuan', 'pengetahuan.id_pengetahuan = sme_pengetahuan.id_pengetahuan', 'left');
    $this->db->join('sme_list', 'sme_pengetahuan.nipp_sme = sme_list.nipp', 'left');
    $this->db->group_by('pengetahuan.id_pengetahuan');
  	$data3 = $this->db->get();
  	return $data3->result_array();
  }

  public function getDataKnowledgeTopikExpert()
  {
    $this->db->query('SET @@session.group_concat_max_len = 10000');
    $this->db->select('pengetahuan.id_pengetahuan, pengetahuan.nama_pengetahuan, GROUP_CONCAT(topik.nama_topik SEPARATOR ";") as topik, GROUP_CONCAT(sme_list.nama_sme SEPARATOR ";") as expert, GROUP_CONCAT(sme_list.nipp SEPARATOR ";") as nippsme');
    $this->db->from('pengetahuan');
    $this->db->join('topik', 'pengetahuan.id_pengetahuan = topik.id_pengetahuan', 'left');
    $this->db->join('sme_pengetahuan', 'topik.id_pengetahuan = sme_pengetahuan.id_pengetahuan', 'left');
    $this->db->join('sme_list', 'sme_pengetahuan.nipp_sme = sme_list.nipp', 'left');
    $this->db->group_by('pengetahuan.id_pengetahuan');
    $this->db->limit(5);
    $data7 = $this->db->get();
    return $data7->result_array();
  }

}

?>
