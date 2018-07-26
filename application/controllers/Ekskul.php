<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_ekskul');
		$this->load->model('Model_periode');
	}

	// List all your items
	public function index()
	{
		if(($this->session->userdata('level') == 'admin') || ($this->session->userdata('level') == 'bk')) {
			$data['title_page'] = 'Ekskul';
			$data['title'] = 'Data Ekstrakulikuler';
			$data['id_menu'] = 'ekskul';
			$data['ekskul'] = $this->Model_ekskul->get();
			$this->load->view('admin/ekskul', $data);
		}
		elseif ($this->session->userdata('level') == 'pic') {
			$data['title_page'] = 'Ekskul';
			$data['title'] = 'Ajukan Ekstrakulikuler';
			$data['id_menu'] = 'ekskul';
			$data['periode'] = $this->Model_periode->get();
			$this->load->view('pic/ekskul', $data);
		}
		elseif ($this->session->userdata('level') == 'siswa') {
			$data['title_page'] = 'Ekskul';
			$data['id_menu'] = 'ekskul';
			$data['ekskul'] = $this->Model_ekskul->get();
			$this->load->view('siswa/ekskul', $data);
		}
		else{
			redirect('landingpage','refresh');			
		}
	}

	public function store(Type $var = null)
	{
		$this->Model_ekskul->store();
	}

	public function setuju($id_ekskul)
	{
		$this->Model_ekskul->setuju($id_ekskul);
	}

	public function tolak($id_ekskul)
	{
		$this->Model_ekskul->tolak($id_ekskul);
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
	public function delete( $id = NULL )
	{

	}
}

/* End of file Ekstrakulikuler.php */
/* Location: ./application/controllers/Ekstrakulikuler.php */
