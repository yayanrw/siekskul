<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pic extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pic');
	}

	// List all your items
	public function index()
	{
		$this->Model_pic->index();
	}

	public function show($id)
	{
		$this->Model_pic->show($id);
	}

	public function store()
	{
		$this->Model_pic->store();
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function destroy($email)
	{
		$this->Model_pic->destroy($email);
	}
}

/* End of file Personincharge.php */
/* Location: ./application/controllers/Personincharge.php */
