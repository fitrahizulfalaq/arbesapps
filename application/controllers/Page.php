<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{	
		redirect('');
	}

	public function media_arbes()
	{	
		$data['menu'] = "tentang";
		$data['judul'] = "Tentang Media Arbes";
		$this->templateadmin->load('templateadmin','page/media_arbes',$data);
	}

	public function matkul()
	{	
		$data['menu'] = "tentang";
		$data['judul'] = "Tentang Media Arbes";
		$this->templateadmin->load('templateadmin','page/page_matkul',$data);
	}

	public function petunjuk()
	{	
		$data['menu'] = "petunjuk";
		$data['judul'] = "Petunjuk Penggunaan Media Arbes";
		$this->templateadmin->load('templateadmin','page/petunjuk',$data);
	}

	public function materi()
	{	
		$data['menu'] = "materi";
		$data['judul'] = "Materi Ajar";
		$this->templateadmin->load('templateadmin','page/materi',$data);
	}

	public function pertemuan_menu()
	{	
		$data['menu'] = "materi / pertemuan";
		$data['judul'] = "Materi Pertemuan 1";
		$this->templateadmin->load('templateadmin','page/pertemuan_menu',$data);
	}

	public function view_files()
	{	
		$data['menu'] = "materi / lihat materi";
		$data['judul'] = "Lihat Materi";
		$this->templateadmin->load('templateadmin','page/view_files',$data);
	}
	
}
