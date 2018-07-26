<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_periode');
	}

	// List all your items
	public function index()
	{
		$this->Model_periode->index();
	}

	public function show()
	{
		$this->Model_periode->show();
	}

	// Add a new item
	public function store()
	{
		$this->Model_periode->store();
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->Model_periode->update();
	}

	//Delete one item
	public function destroy($id_angkatan)
	{
		$this->Model_periode->destroy($id_angkatan);
	}
}

/* End of file Personincharge.php */
/* Location: ./application/controllers/Personincharge.php */
