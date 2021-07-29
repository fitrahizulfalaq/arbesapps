<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("form");
		$this->load->model("materi_m");
	}

	public function index()
	{
		$data['menu'] = "Tugas / Sumbit";
		$data['judul'] = "Tambah Data tugas";
		
		$this->templateadmin->load('templateadmin','materi/menuMateri',$data);
	}

	public function alihkan()
	{
		$post = $this->input->post(null, TRUE);
		$pertemuan_id = $post['pertemuan_id'];

		redirect('materi/pertemuan/'.$pertemuan_id);
	}
	
	public function pertemuan()
	{
		$id = $this->uri->segment(3);
		$data['menu'] = "Materi / Pertemuan Ke ".$id;
		$data['judul'] = "Materi Pertemuan Ke ".$id;
		$data['pertemuan_id'] = $id;
		$data['row'] = $this->materi_m->get($id);
		$data['xtanya'] = $this->materi_m->getPertanyaan($id);
		$this->templateadmin->load('templateadmin','materi/materi_data',$data);
	}

	public function addPertanyaan ()
	{
		$post = $this->input->post(null, TRUE);
		if ($post == null) {
			redirect('');
		}

		$this->materi_m->addPertanyaan($post);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success','Berhasil ditanyakan');
		}

		redirect('materi/pertemuan/'.$post['pertemuan_id']);		
	}

	public function view()
	{
		$pertemuan_id = $this->uri->segment(4);
		$files_id = $this->uri->segment(6);

		$query = $this->materi_m->getMateri($files_id);
		if ($query->num_rows() > 0) {
			$data['url'] = 'https://admin.inobelum-arbes.com/assets/dist/files/materi/'.$query->row("file");
			$this->templateadmin->load('templateadmin','materi/materi_detail',$data);
		} else {
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "<script>window.location='".site_url('user')."';</script>";
		}
	}	
}
