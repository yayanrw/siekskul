<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title_page'] = 'Beranda';
		$data['id_menu'] = 'beranda';
		$this->load->view('admin/view_beranda', $data);		
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */