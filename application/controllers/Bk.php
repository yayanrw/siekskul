<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_bk');
	}

	// List all your items
	public function index()
	{
		$this->Model_bk->index();
	}

	public function show($nip)
	{
		$this->Model_bk->show($nip);
	}

	public function store()
	{
		$this->Model_bk->store();
	}

	public function update($nip)
	{
		$this->Model_bk->update($nip);
	}

	public function destroy($nip)
	{
		$this->Model_bk->destroy($nip);
	}
}

/* End of file Bimbingankonseling.php */
/* Location: ./application/controllers/Bimbingankonseling.php */
