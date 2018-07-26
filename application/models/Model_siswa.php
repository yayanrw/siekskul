<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('Model_angkatan');
		
	}	

	public function index(Type $var = null)
	{
		$data['title_page'] = 'Siswa';
		$data['title']      = 'Data Siswa';
		$data['id_menu']    = 'siswa';	
		$data['siswa']      = $this->get();
		$this->load->view('siswa/index', $data);
	}

	public function get()
	{
		return $this->db->get('siswa')->result();
	}

	public function select($nis)
	{
		return $this->db->get_where('siswa', array('nis' => $nis))->row();
	}

	public function create()
	{
		$data['title_page'] = 'Siswa';
		$data['title']      = 'Tambah Siswa';
		$data['id_menu']    = 'siswa';	

		$data['angkatan']   = $this->Model_angkatan->get();
		$this->load->view('siswa/create', $data);
	}

	public function show($nis)
	{
		$data['title_page'] = 'Person In Charge';
		$data['title']      = 'Informasi Person In Charge';
		$data['id_menu']    = 'siswa';	
		$data['siswa']      = $this->select($nis);
		$data['angkatan']   = $this->Model_angkatan->get();		
		$this->load->view('siswa/detail', $data);
	}

	public function store()
	{
		$password = $this->encryption->encrypt($this->input->post('password'));
		$object = array(
			'nis' => $this->input->post('nis'),
			'password' => $password,
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
			'angkatan' => $this->input->post('angkatan')
		);
		$this->db->insert('siswa', $object);
		$this->session->set_flashdata('notif', 'Data berhasil ditambahkan!');
		redirect('siswa');
	}

	public function update($nis)
	{
		$object = array(
			'password' => $password,
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat')
		);
		$this->db->update('siswa', $object, array('nis' => $nis));
		$this->session->set_flashdata('notif', 'Data berhasil diubah!');
		redirect('siswa');
	}

	public function destroy($nis)
	{
		$this->db->delete('siswa', array('nis' => $nis));
		$this->session->set_flashdata('notif', 'Data berhasil dihapus!');
		redirect('siswa');
	}

}

/* End of file ModelName.php */
