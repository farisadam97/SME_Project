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
    $this->db->select('pesan.id_inbox, pesan.id_conversation, pesan.id_pesan, pesan.nipp_pengirim, pesan.nipp_penerima, pesan.timestamp, pesan.isi_pesan, pesan.subjek, pesan.keterangan, pesan.nama_pengirim, pesan.rating, pesan.file, pesan.read_pesan_penerima, pesan.read_pesan_pengirim, user.role');
    $this->db->from('pesan');
    $this->db->join('user', 'pesan.nipp_penerima = user.nipp');
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

}

?>
