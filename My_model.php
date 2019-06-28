<?php
 class My_model extends CI_Model
 {

 	public function data($data)
 	{
 		$data=$this->db->insert('task',$data);    
 	//	echo $data; 
 		//exit();

 	}
 	
 	public function reg_inser($data)
 	{
 		$this->db->insert('task',$data);
 		return true; 
 	}

 	public function lavi()
 	{
 		$this->db->select('*');
 		$this->db->from('task');
 		$data=$this->db->get();
 		$data = $data->result();
 		return $data;
 	}

 	public function reg_insert($data)
 	{
 		if($this->db->insert('task',$data))
 		{
 			return True;
 		}
 	}
 	public function delete($data)
 	{   $this->db->where('id',$data);
 		$this->db->delete('task');
 		return true;
 	}
 }
?>