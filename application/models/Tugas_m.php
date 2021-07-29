<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_m extends CI_Model {
		
	public function get($id = null) 
	{
		$this->db->from('tb_tugas');
		if ($id != null) {
			$this->db->where('id',$id);
		}

		$query = $this->db->get();
		return $query;
	}

	public function get_tugas($limit, $start) 
	{		
		$this->db->order_by('created','DESC');
		$query = $this->db->get('tb_tugas',$limit, $start);
		return $query;
	}	

	function simpan($post)
	{

	  $params['id'] =  "";
	  $params['pertemuan_id'] =  $post['pertemuan_id'];
	  $params['nama'] =  $post['nama'];
	  $params['nim'] =  $post['nim'];
	  $params['file'] =  $post['file'];
	  $params['created'] =  date("Y:m:d:h:i:sa");

	  $this->db->insert('tb_tugas',$params);	  	 		  	 		   			
	}

	function update($post)
	{

	  $params['id'] =  $post['id'];
	  $params['judul'] =  ucwords($post['judul']);
	  $params['deskripsi'] =  $post['deskripsi'];
	  $params['link'] =  $post['link'];
	  $params['created'] =  $post['created'];
	  
	  if ($post['foto'] != null) {
  	  	$params['foto'] =  $post['foto'];
  	}

	  $this->db->where('id',$params['id']);
	  $this->db->update('tb_tugas',$params);	  	 		  	 		   			
	}

	function hapus($id){

	  $this->db->where('id', $id);
	  $this->db->delete('tb_tugas');

	}



}
