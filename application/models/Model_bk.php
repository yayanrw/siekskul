<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bk extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
	}	

	public function index(Type $var = null)
	{
		$data['title_page'] = 'Bimbingan Konseling';
		$data['title']      = 'Data Bimbingan Konseling';
		$data['title2']     = 'Tambah Bimbingan Konseling';
		$data['id_menu']    = 'bk';	
		$data['bk']         = $this->get();
		$this->load->view('bk/index', $data);
	}

	public function get()
	{
		return $this->db->get('bk')->result();
	}

	public function select($nip)
	{
		return $this->db->get_where('bk', array('nip' => $nip))->row();
	}

	public function show($nip)
	{
		$data['title_page'] = 'Bimbingan Konseling';
		$data['title']      = 'Informasi Bimbingan Konseling';
		$data['id_menu']    = 'bk';	
		$data['bk']         = $this->select($nip);		
		$this->load->view('bk/detail', $data);
	}

	public function store()
	{
		$password = $this->encryption->encrypt($this->input->post('password'));
		$object = array(
			'nip' => $this->input->post('nip'),
			'password' => $password,
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat')
		);
		$this->db->insert('bk', $object);
		$this->session->set_flashdata('notif', 'Data berhasil ditambahkan!');
		redirect('bk');
	}

	public function update($nip)
	{
		$object = array(
			'password' => $password,
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat')
		);
		$this->db->update('bk', $object);
		$this->session->set_flashdata('notif', 'Data berhasil diubah!');
		redirect('bk');
	}

	public function destroy($nip)
	{
		$this->db->delete('bk', array('nip' => $nip));
		$this->session->set_flashdata('notif', 'Data berhasil dihapus!');
		redirect('bk');
	}

}

/* End of file Model_bimbingankonseling.php */
/* Location: ./application/models/Model_bimbingankonseling.php */