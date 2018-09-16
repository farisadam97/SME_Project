<?php
class m_inbox extends CI_Model
{
  function __construct() {
    parent::__construct();
    }
  public function getDataInbox() 
  {
    $this->db->query('SET @@session.group_concat_max_len = 10000');
    $this->db->select('id_inbox, id_conversation, SUBSTRING_INDEX(id_pesan, ";", -1) AS id_pesan, nipp_penerima, nipp_pengirim, SUBSTRING_INDEX(timestamp, ";", -1) AS timestamp, SUBSTRING_INDEX(isi_pesan, ";", -1) AS isi_pesan, subjek, keterangan, nama_pengirim, rating, SUBSTRING_INDEX(file, ";", -1) AS file, SUBSTRING_INDEX(read_pesan, ";", -1) AS read_pesan');
    $this->db->from('pesan');
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
    $this->db->or_where('nipp_pengirim', $this->session->userdata('nipp'));
    $this->db->group_by('id_conversation');
    $data4 = $this->db->get();
    return $data4->result_array();
  }

  // public function getDataInboxUnread()
  // {
    
  //   $this->db->select('*');
  //   $this->db->from('pesan');
  //   $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
  //   $unread = $this->db->get();
  //   return $unread->result_array();
  // }

  public function getDataInboxItem($id_conversation) 
  {
    $this->db->query('SET @@session.group_concat_max_len = 10000');
    $this->db->set('read_pesan', '1');
    $this->db->where('id_conversation', $id_conversation);
    $this->db->update('pesan');

    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('id_conversation',$id_conversation);
    $data = $this->db->get();
    return $data->result_array();

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
    // $this->db->set('answer', 'answer + 3');
    // $this->db->where('nipp', $this->session->userdata('nipp'));
    // $this->db->update('user');
  }

  // public function updateRank()
  // {
  //   $rank = $this->db->query('SELECT * FROM user ORDER BY poin desc');
  //   return $rank->result_array();
    
  //   $this->db->query('UPDATE user set rank = '$)
  // }

  public function deleteDataInboxItem($id_conversation)
  {
    $this->db->where_in('id_conversation', $id_conversation);
    $this->db->delete('pesan');
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
    // $this->db->where('id_conversation', $id_conversation);
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

  public function getConversationItem($id_inbox)
  {
    
    $this->db->select('id_conversation');
    $this->db->from('pesan');
    $this->db->where('id_inbox', $id_inbox);
    $conv_item = $this->db->get();
    return $conv_item->result_array();
  }

}

?>
