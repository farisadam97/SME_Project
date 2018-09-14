<?php
class m_inbox extends CI_Model
{
  function __construct() {
    parent::__construct();
    }
  public function getDataInbox() 
  {
   
    $this->db->select('id_inbox, id_conversation, SUBSTRING_INDEX(id_pesan, ";", -1) AS id_pesan, nipp_penerima, nipp_pengirim, SUBSTRING_INDEX(timestamp, ";", -1) AS timestamp, SUBSTRING_INDEX(isi_pesan, ";", -1) AS isi_pesan, subjek, keterangan, nama_pengirim, rating, SUBSTRING_INDEX(file, ";", -1) AS file, SUBSTRING_INDEX(read_pesan, ";", -1) AS read_pesan');
    $this->db->from('pesan');
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
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
    $this->db->set('read_pesan', '1');
    $this->db->where('id_conversation', $id_conversation);
    $this->db->update('pesan');

    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
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

  public function deleteDataInboxItem($id_inbox)
  {
    $this->db->where_in('id_inbox', $id_inbox);
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
    // $this->db->where('id_inbox', $id_inbox);
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

  // public function updateConversation($updated, $id_conversation)
  // {
  //   $this->db->set('id_conversation', $updated);
  //   $this->db->where('id_conversation', $id_conversation);
  //   $this->db->update('pesan');
  // }

  // public function InsertReply($tableName,$data)
  // {
  //   $res2 = $this->db->insert($tableName,$data);
  //   return $res2;
  // }

}

?>
