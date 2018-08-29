<?php
class m_expert extends CI_Model
{

  public function getDataExperts() 
  {

//     SELECT sme_list.nipp, sme_list.nama_sme, sme_list.bidang_keahlian_sme, sme_pengetahuan.nipp_sme, sme_pengetahuan.id_pengetahuan, GROUP_CONCAT(pengetahuan.nama_pengetahuan SEPARATOR ";") as ilmu
// FROM sme_list
// INNER JOIN sme_pengetahuan ON sme_list.nipp = sme_pengetahuan.nipp_sme
// INNER JOIN pengetahuan ON sme_pengetahuan.id_pengetahuan = pengetahuan.id_pengetahuan
// GROUP BY sme_list.nipp
    $this->db->select('sme_list.nipp, sme_list.nama_sme, sme_list.bidang_keahlian_sme, sme_pengetahuan.nipp_sme, sme_pengetahuan.id_pengetahuan, GROUP_CONCAT(pengetahuan.nama_pengetahuan SEPARATOR ";") as ilmu');
    $this->db->from('sme_list');
    $this->db->join('sme_pengetahuan', 'sme_list.nipp = sme_pengetahuan.nipp_sme');
    $this->db->join('pengetahuan', 'sme_pengetahuan.id_pengetahuan = pengetahuan.id_pengetahuan');
    $this->db->group_by('sme_list.nipp');
    $data5 = $this->db->get();
    return $data5->result_array();
  }

  // public function getDataExperts()
  // {
  //   $this->db->select('*');
  //   $this->db->from('sme_list');
  //   $this->db->order_by("nama_sme", "asc");
  // 	$data5 = $this->db->get();
  // 	return $data5->result_array();
  // }

  public function getDataExpertsItem($nipp) 
  {
    $this->db->select('id, nipp, nama_sme, kelas_jabatan_sme, jabatan_sme, unit_kerja_sme, GROUP_CONCAT(bidang_keahlian_sme SEPARATOR ";") as ahli');
    $this->db->from('sme_list');
    $this->db->where('nipp', $nipp);
    $data = $this->db->get();
    return $data->result_array();
  }

} 

?>