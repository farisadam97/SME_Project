<?php
class m_inbox extends CI_Model
{
  function __construct() {
    parent::__construct();
    }
  public function getDataInbox() 
  {
   
    $data4 = $this->db->select('*')->from('pesan')->where('nipp_penerima', $this->session->userdata('nipp'))->get();
    return $data4->result_array();
  }

  public function getDataInboxUnread()
  {
    
    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('read_pesan', 0);
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
    $unread = $this->db->get();
    return $unread->result_array();
  }

  public function getDataInboxItem($id_inbox) 
  {
    $this->db->set('read_pesan', '1');
    $this->db->where('id_inbox', $id_inbox);
    $this->db->update('pesan');

    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('nipp_penerima', $this->session->userdata('nipp'));
    $this->db->where('id_inbox',$id_inbox);
    $data = $this->db->get();
    return $data->result_array();

  }

  public function updateKeterangan($id_inbox)
  {
    $this->db->set('keterangan', 'Solved');
    $this->db->where('id_inbox', $id_inbox);
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
