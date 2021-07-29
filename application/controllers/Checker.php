<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checker extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{	
		$this->templateadmin->load('templateadmin','checker/1_home');
	}

	public function proses()
	{	
		$urutan = $this->uri->segment(3);
		if ($urutan != null) {
			$this->templateadmin->load('templateadmin','checker/pros_'.$urutan);
		} else {
			redirect('checker');
		}
	}

	public function gejala()
	{	
		$urutan = $this->uri->segment(3);
		if ($urutan != null) {
			$this->templateadmin->load('templateadmin','checker/gejala_'.$urutan);
		} else {
			redirect('checker');
		}
	}
}
