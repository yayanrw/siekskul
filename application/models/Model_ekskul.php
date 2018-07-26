<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ekskul extends CI_Model {

	
	public function __construct()
	{
		$this->load->model('Model_pic');		
	}
	

    public function index(Type $var = null)
	{
		$data['title_page'] = 'Ekskul';
		$data['title']      = 'Data Ekskul';
		$data['id_menu']    = 'ekskul';	
		$data['ekskul']         = $this->get();
		$this->load->view('ekskul/index', $data);
	}

	public function get()
	{
		return $this->db->get('ekskul')->result();
	}

	public function select($id)
	{
		return $this->db->get_where('ekskul', array('id' => $id))->row();
	}

	public function selectByPic($username)
	{
		return $this->db->get_where('ekskul', array('username' => $username))->row();
	}

	public function store()
	{
		$username = $this->session->userdata('username');
		$pic = $this->Model_pic->select($username);

		$object = array(
			'status' => 'Sudah', 
		);

		$this->db->update('pic', $object, array('username' => $username));		

		$object = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('deskripsi'),
			'periode' => $this->input->post('periode'),	
			'kuota' => $this->input->post('kuota'), 
			'status' => 'Menunggu',
			'username' => $username
		);
		$this->db->insert('ekskul', $object);
		$this->session->set_flashdata('notif', 'Data berhasil disimpan!');
		redirect('ekskul');
	}

	public function show($id_ekskul)
	{
		$data['title_page'] = 'Ekskul';
		$data['title']      = 'Data Ekskul';
		$data['id_menu']    = 'ekskul';	
		$data['ekskul']         = $this->select($id_ekskul);
		$this->load->view('ekskul/detail', $data);
	}

	public function setuju($id_ekskul)
	{
		$object = array(
			'status' => 'Disetujui'
		);
		$this->db->update('ekskul', $object, array('id_ekskul' => $id_ekskul));
		$this->session->set_flashdata('notif', 'Ekskul berhasil disetujui!');
		redirect('ekskul');
	}

	public function tolak($id_ekskul)
	{
		$object = array(
			'status' => 'Ditolak'
		);
		$this->db->update('ekskul', $object, array('id_ekskul' => $id_ekskul));
		$this->session->set_flashdata('notif', 'Ekskul berhasil ditolak!');
		redirect('ekskul');
	}

}