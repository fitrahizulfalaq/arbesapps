<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_m extends CI_Model {
		
	public function get($id = null) 
	{
		$this->db->from('tb_materi');
		if ($id != null) {
			$this->db->where('pertemuan_id',$id);
		}

		$query = $this->db->get();
		return $query;
	}

	public function getPertanyaan($id = null) 
	{
		$this->db->from('tb_pertanyaan');
		if ($id != null) {
			$this->db->where('pertemuan_id',$id);
		}

		$query = $this->db->get();
		return $query;
	}

	public function getMateri($id = null) 
	{
		$this->db->from('tb_materi');
		if ($id != null) {
			$this->db->where('id',$id);
		}

		$query = $this->db->get();
		return $query;
	}

	public function addPertanyaan ($post)
	{
		$params['id'] =  "";	    
		$params['pertemuan_id'] =  $post['pertemuan_id'];	  
		$params['nama'] =  ucwords(strtolower($post['nama']));	  
		$params['nim'] =  $post['nim'];	  
		$params['pertanyaan'] =  $post['pertanyaan'];	  
		$params['created'] =  date("Y:m:d:H:i:sa");	  
		$this->db->insert('tb_pertanyaan',$params);
	}


}
