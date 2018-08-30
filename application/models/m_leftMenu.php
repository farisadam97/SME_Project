<?php
class m_leftMenu extends CI_Model
{

  public function countDataInbox() 
  {
   $this->db->count_all_results('pesan');  
	$this->db->from('pesan');
	$this->db->where('read_pesan', 0);
	$count = $this->db->get();
	$countPesan = $count->num_rows();
	if($countPesan > 0)
	{
		return $countPesan;
	}
	else
	{
		return 0;
	}
  }
}

?>
