<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_angkatan extends CI_Model {

	public function index(Type $var = null)
	{
		$data['title_page'] = 'Angkatan';
		$data['title']      = 'Data Tahun Angkatan';
		$data['title2']      = 'Form Tambah Tahun Angkatan';
		$data['id_menu']    = 'siswa';	
		$data['angkatan']   = $this->get();
		$this->load->view('angkatan/index', $data);
	}

	public function get()
	{
		return $this->db->get('angkatan')->result();
	}

	public function select($id_angkatan)
	{
		return $this->db->get_where('angkatan', array('id_angkatan' => $id_angkatan))->row();
	}

	public function show($id_angkatan)
	{
		// $data['title_page'] = 'Person In Charge';
		// $data['title']      = 'Informasi Person In Charge';
		// $data['id_menu']    = 'angkatan';	
		// $data['angkatan']         = $this->select($id_angkatan);		
		// $this->load->view('angkatan/detail', $data);
	}

	public function store()
	{
		$object = array(
			'tahun' => $this->input->post('tahun')
		);
		$this->db->insert('angkatan', $object);
		$this->session->set_flashdata('notif', 'Data berhasil ditambahkan!');
		redirect('angkatan');
	}

	public function destroy($id_angkatan)
	{
		$this->db->delete('angkatan', array('id_angkatan' => $id_angkatan));
		$this->session->set_flashdata('notif', 'Data berhasil dihapus!');
		redirect('angkatan');
	}

}

/* End of file ModelName.php */
