<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_siswa');
	}

	// List all your items
	public function index()
	{
		$this->Model_siswa->index();
	}

	public function show($nis)
	{
		$this->Model_siswa->show($nis);
	}

	public function create()
	{
		$this->Model_siswa->create();
	}

	// Add a new item
	public function store()
	{
		$this->Model_siswa->store();
	}

	//Update one item
	public function update($nis)
	{
		$this->Model_siswa->update($nis);
	}

	//Delete one item
	public function destroy($nis)
	{
		$this->Model_siswa->destroy($nis);
	}
}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */
