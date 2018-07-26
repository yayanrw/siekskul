<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_periode extends CI_Model {

	public function index(Type $var = null)
	{
		$data['title_page'] = 'periode';
		$data['title']      = 'Data Tahun periode';
		$data['title2']      = 'Form Tambah Tahun periode';
		$data['id_menu']    = 'ekskul';	
		$data['periode']   = $this->get();
		$this->load->view('periode/index', $data);
	}

	public function get()
	{
		return $this->db->get('periode')->result();
	}

	public function select($id)
	{
		return $this->db->get_where('periode', array('id_periode' => $id))->row();
	}

	public function show($id)
	{
		// $data['title_page'] = 'Person In Charge';
		// $data['title']      = 'Informasi Person In Charge';
		// $data['id_menu']    = 'periode';	
		// $data['periode']         = $this->select($id);		
		// $this->load->view('periode/detail', $data);
	}

	public function store()
	{
		$object = array(
			'periode' => $this->input->post('periode')
		);
		$this->db->insert('periode', $object);
		$this->session->set_flashdata('notif', 'Data berhasil ditambahkan!');
		redirect('periode');
	}

	public function destroy($id)
	{
		$this->db->delete('periode', array('id_periode' => $id));
		$this->session->set_flashdata('notif', 'Data berhasil dihapus!');
		redirect('periode');
	}

}

/* End of file ModelName.php */
