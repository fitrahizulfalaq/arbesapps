<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{	
		$data['row'] = $this->fungsi->pilihan_advanced("tb_bantuan","status","1");
		$this->templateadmin->load('templateadmin','home',$data);
	}
}
