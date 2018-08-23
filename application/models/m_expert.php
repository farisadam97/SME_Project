<?php
class m_expert extends CI_Model
{

  public function getDataExperts()
  {
    $this->db->select('*');
    $this->db->from('sme_list');
  	$data5 = $this->db->get();
  	return $data5->result_array();
  }

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