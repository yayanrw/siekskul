<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angkatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_angkatan');
	}

	// List all your items
	public function index()
	{
		$this->Model_angkatan->index();
	}

	public function show()
	{
		$this->Model_angkatan->show();
	}

	// Add a new item
	public function store()
	{
		$this->Model_angkatan->store();
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->Model_angkatan->update();
	}

	//Delete one item
	public function destroy($id_angkatan)
	{
		$this->Model_angkatan->destroy($id_angkatan);
	}
}

/* End of file Personincharge.php */
/* Location: ./application/controllers/Personincharge.php */
