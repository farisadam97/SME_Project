<?php
class m_inbox extends CI_Model
{
  function __construct() 
  {
    parent::__construct();
  }

  public function getDataInbox() 
  {
    $this->db->query('SET @@session.group_concat_max_len = 10000');
    // $this->db->select('id_inbox, id_conversation, SUBSTRING_INDEX(id_pesan, ";", -1) AS id_pesan, nipp_penerima, nipp_pengirim, SUBSTRING_INDEX(timestamp, ";", -1) AS timestamp, SUBSTRING_INDEX(isi_pesan, ";", -1) AS isi_pesan, subjek, keterangan, nama_pengirim, rating, SUBSTRING_INDEX(file, ";", -1) AS file, SUBSTRING_INDEX(read_pesan_penerima, ";", -1) AS read_pesan_penerima, SUBSTRING_INDEX(read_pesan_pengirim, ";", -1) AS read_pesan_pengirim');
    $this->db->select('id_inbox, id_conversation, id_pesan, nipp_pengirim, nipp_penerima, timestamp, isi_pesan, subjek, keterangan, nama_pengirim, rating, file, read_pesan_penerima, read_pesan_pengirim');
    $this->db->from('pesan');
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
    $this->db->or_where('nipp_pengirim', $this->session->userdata('nipp'));
    $this->db->group_by('id_pesan');
    $this->db->order_by('timestamp', 'desc');
    $data4 = $this->db->get();
    return $data4->result_array();
  }

  public function getDataInboxItem($id_conversation) 
  {
    $this->db->query('SET @@session.group_concat_max_len = 10000');
    $this->db->set('read_pesan_penerima', '1');
    $this->db->where('id_conversation', $id_conversation);
    $this->db->update('pesan');

    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('id_conversation',$id_conversation);
    $data = $this->db->get();
    return $data->result_array();

  }

  public function countUnread()
  {
    $countUnread = $this->db->query("select count(read_pesan_penerima) as countUnread FROM pesan where read_pesan_penerima = 0 AND nipp_penerima = ".$this->session->userdata('nipp'));
    // $this->db->select('COUNT(read_pesan_penerima) as countUnread');
    // $this->db->from('pesan');
    // $where = "id_pesan = ".$id_pesan." AND read_pesan_penerima = 0 AND nipp_penerima = ".$this->session->userdata('nipp');
    // $this->db->where($where);
    return $countUnread->num_rows();
  }

  public function updateKeterangan($id_conversation)
  {
    $this->db->set('keterangan', 'Solved');
    $this->db->where('id_conversation', $id_conversation);
    $this->db->update('pesan');
  }

  public function getPengirim($nipp_pengirim)
  {
    $data = $this->db->query('SELECT nipp_pengirim FROM pesan where id_conversation = '.$nipp_pengirim.' LIMIT 1');
    return $data->result_array();
  }

  public function updateQuestionCount($nipp_pengirim)
  {
    $this->db->query('UPDATE user set question = question + 1, poin = poin + 3 where nipp = '.$nipp_pengirim);
  }

  public function updateAnswerCount()
  {
    $this->db->query('UPDATE user set answer = answer + 1, poin = poin + 3 where nipp = '.$this->session->userdata('nipp'));
  }

  public function deleteDataInboxItem($id_pesan)
  {
    $this->db->query('UPDATE pesan set nipp_penerima = 1 where id_pesan = '.$id_pesan.' AND nipp_penerima = '.$this->session->userdata('nipp'));
  }

  public function InsertData($tableName,$data)
  {
    $res = $this->db->insert($tableName,$data);
    return $res;
  }

  public function getPesan()
  {
    
    $this->db->select('id_pesan');
    $this->db->from('pesan');
    $this->db->order_by('id_pesan', 'desc');
    $this->db->limit(1);
    $pesan = $this->db->get();
    return $pesan->result_array();
  }

  public function getConversation()
  {
    
    $this->db->select('id_conversation');
    $this->db->from('pesan');
    $this->db->order_by('id_conversation', 'desc');
    $this->db->limit(1);
    $conv = $this->db->get();
    return $conv->result_array();
  }

  public function getConversationID($id_inbox)
  {
    
    $this->db->select('id_conversation');
    $this->db->from('pesan');
    $this->db->where('id_inbox', $id_inbox);
    $conv = $this->db->get();
    return $conv->result_array();
  }

  // public function getConversationItem($id_inbox)
  // {
    
  //   $this->db->select('id_conversation');
  //   $this->db->from('pesan');
  //   $this->db->where('id_inbox', $id_inbox);
  //   $conv_item = $this->db->get();
  //   return $conv_item->result_array();
  // }

}

?>
