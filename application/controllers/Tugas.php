<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('tugas_m');
	}

	public function index()
	{
		//Load librarynya dulu
		$this->load->library('form_validation');
		//Atur validasinya
		$this->form_validation->set_rules('judul', 'judul', 'min_length[3]|is_unique[tb_modul.judul]|max_length[50]');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['menu'] = "Tugas / Sumbit";
			$data['judul'] = "Tambah Data tugas";
			
			$this->templateadmin->load('templateadmin','tugas/addTugas',$data);
	    } else {
			$post = $this->input->post(null, TRUE);

				//CEK GAMBAR
		        $config2['upload_path']          = 'assets/files/tugas';
		        $config2['allowed_types']        = 'doc|docx|pdf|ppt|pptx';
		        $config2['max_size']             = 5000;
		        $config2['file_name']            = strtoupper($post['nama']).'-'.$post['nim'].'-PertemuanKe'.$post['pertemuan_id'];

				$upload_2 = $this->load->library('upload', $config2);
				if (@$_FILES['file']['name'] != null) {
						$this->upload->initialize($config2);
				  	if ($this->upload->do_upload('file')) {
				  	 	$post['file'] = $this->upload->data('file_name');
	        	} else {
							$pesan = $this->upload->display_errors();
							$this->session->set_flashdata('danger',$pesan);
							redirect('tugas/tambah');
		        }
		    }				
			 
			$this->tugas_m->simpan($post);
	    	if ($this->db->affected_rows() > 0) {
	    		$this->session->set_flashdata('success','Tugas Berhasil Dikirim');
	    	}	  	 	
	      redirect('tugas');	        	
	    }
	}

	function hapusTugas(){
	  	$id = $this->uri->segment(3);

		$itemmateri = $this->tugas_m->get($id)->row();
		if ($itemmateri->file != null) {
			$target_file = 'assets/files/tugas/'.$itemmateri->file;
			unlink($target_file);
		}
		
		$this->tugas_m->hapusTugas($id);
		$this->session->set_flashdata('danger','Materi Berhasil Di Hapus');
		redirect('https://admin.inobelum-arbes.com/tugas/');
	}



		
}
