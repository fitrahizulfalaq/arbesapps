<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maps_m extends CI_Model {
		
	function get_zona($id = null)
	{
		$this->db->from('tb_kelurahan');
		if ($id != null) {
			$this->db->where('id',$id);
		}
		$query = $this->db->get();
		return $query;  	  	  
	}

	function get_zona_sekitar($asal, $tujuan)
	{
		$this->db->from('tb_kelurahan');
		if ($asal != $tujuan) {
			$this->db->where('kode',$asal);
			$this->db->or_where('kode',$tujuan);
		} else {
			$this->db->where('kode',$asal);				
		}
		$this->db->order_by('status','desc');
		$query = $this->db->get();
		return $query;  	  	  
	}

	function get_detail_zona($id = null)
	{
		$this->db->from('tb_data');
		if ($id != null) {
			$this->db->where('kelurahan_id',$id);
		}
		$this->db->order_by('tgl','desc');
		$query = $this->db->get();
		return $query;  	  	  
	}




}
