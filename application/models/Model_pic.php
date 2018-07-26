<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pic extends CI_Model {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('Model_ekskul');
	}	

	public function index(Type $var = null)
	{
		$data['title_page'] = 'Person In Charge';
		$data['title']      = 'Data Person In Charge';
		$data['id_menu']    = 'pic';	
		$data['pic']         = $this->get();
		$this->load->view('pic/index', $data);
	}

	public function get()
	{
		return $this->db->get('pic')->result();
	}

	public function select($username)
	{
		return $this->db->get_where('pic', array('username' => $username))->row();
	}

	public function show($username)
	{
		$data['title_page'] = 'Person In Charge';
		$data['title']      = 'Informasi Person In Charge';
		$data['id_menu']    = 'pic';	
		$data['pic']        = $this->select($username);
		$data['ekskul']     = $this->Model_ekskul->selectByPic($username);
		$this->load->view('pic/detail', $data);
	}

	public function store()
	{
		$password = $this->encryption->encrypt($this->input->post('password'));
		$object = array(
			'username' => $this->input->post('username'),
			'password' => $password,
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat')
		);
		$this->db->insert('pic', $object);
		$this->session->set_flashdata('notif', 'Data berhasil ditambahkan!');
		redirect('landingpage');
	}

	public function destroy($email)
	{
		$this->db->delete('pic', array('email' => $email));
		$this->session->set_flashdata('notif', 'Data berhasil dihapus!');
		redirect('pic');
	}

}

/* End of file ModelName.php */
