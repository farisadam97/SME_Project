<?php
class m_knowledge extends CI_Model
{

  public function getDataKnowledgeTopikExpert()
  {
    $this->db->select('pengetahuan.id_pengetahuan, pengetahuan.nama_pengetahuan, GROUP_CONCAT(topik.nama_topik SEPARATOR ";") as topik, GROUP_CONCAT(sme_list.nama_sme SEPARATOR ";") as expert, GROUP_CONCAT(sme_list.nipp SEPARATOR ";") as nippsme');
    $this->db->from('pengetahuan');
    $this->db->join('topik', 'pengetahuan.id_pengetahuan = topik.id_pengetahuan', 'left');
    $this->db->join('sme_pengetahuan', 'topik.id_pengetahuan = sme_pengetahuan.id_pengetahuan', 'left');
    $this->db->join('sme_list', 'sme_pengetahuan.nipp_sme = sme_list.nipp', 'left');
    $this->db->group_by('pengetahuan.id_pengetahuan');
    $data7 = $this->db->get();
    return $data7->result_array();
  }

  public function getDataKnowledgeTopikItem($id_knowledge) 
  {
    $this->db->select('pengetahuan.id_pengetahuan, pengetahuan.nama_pengetahuan, pengetahuan.definisi_pengetahuan, GROUP_CONCAT(topik.nama_topik SEPARATOR ";") as topik');
    $this->db->from('pengetahuan');
    $this->db->join('topik', 'pengetahuan.id_pengetahuan = topik.id_pengetahuan', 'left');
    $this->db->where('pengetahuan.id_pengetahuan', $id_knowledge);
    $this->db->group_by('pengetahuan.id_pengetahuan');
    $data8 = $this->db->get();
    return $data8->result_array();
  }

  public function getDataKnowledgeExpertItem($id_knowledge) 
  {
    $this->db->select('pengetahuan.id_pengetahuan, GROUP_CONCAT(sme_list.id SEPARATOR ";") as idsme, GROUP_CONCAT(sme_list.nipp SEPARATOR ";") as nippsme, GROUP_CONCAT(sme_list.nama_sme SEPARATOR ";") as expert');
    $this->db->from('pengetahuan');
    $this->db->join('sme_pengetahuan', 'pengetahuan.id_pengetahuan = sme_pengetahuan.id_pengetahuan', 'left');
    $this->db->join('sme_list', 'sme_pengetahuan.nipp_sme = sme_list.nipp', 'left');
    $this->db->where('pengetahuan.id_pengetahuan', $id_knowledge);
    $this->db->group_by('pengetahuan.id_pengetahuan');
    $data9 = $this->db->get();
    return $data9->result_array();
  }

} 

?>