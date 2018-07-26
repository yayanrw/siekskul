<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
	}

	public function index()
	{

		$this->load->view('view_login');
	}

	public function cekLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$queryAdmin = $this->db->get_where('admin', array('username' => $username));
		$resultAdmin = $queryAdmin->row();
		$queryBk = $this->db->get_where('bk', array('nip' => $username));
		$resultBk = $queryBk->row();
		$queryPic = $this->db->get_where('pic', array('username' => $username));
		$resultPic = $queryPic->row();
		$querySiswa = $this->db->get_where('siswa', array('nis' => $username));
		$resultSiswa = $querySiswa->row();

		if ($queryAdmin->num_rows() > 0) {
			$password_decDb = $this->encryption->decrypt($resultAdmin->password);
			if ($password_decDb == $password) {
				$array = array(
					'username' 	=>	$resultAdmin->username,
					'level'		=>  'admin',
					'nama' 		=>	$resultAdmin->nama
					);				
				$this->session->set_userdata( $array );
				redirect('beranda','refresh');
			}
			else{
				$this->session->set_flashdata('notif', 'Password anda salah!');
				redirect('login','refresh');
			}
		}
		elseif ($queryBk->num_rows() > 0) {
			$password_decDb = $this->encryption->decrypt($resultBk->password);
			if ($password_decDb == $password) {
				$array = array(
					'username' 	=>	$resultBk->nip,
					'level'		=>  'bk',
					'nama' 		=>	$resultBk->nama
					);				
				$this->session->set_userdata( $array );
				redirect('beranda','refresh');
			}
			else{
				$this->session->set_flashdata('notif', 'Password anda salah!');
				redirect('login','refresh');
			}
		}
		elseif ($queryPic->num_rows() > 0) {
			$password_decDb = $this->encryption->decrypt($resultPic->password);
			if ($password_decDb == $password) {
				$array = array(
					'username' 	=>	$resultPic->username,
					'level'		=>  'pic',
					'nama' 		=>	$resultPic->nama
					);				
				$this->session->set_userdata( $array );
				redirect('beranda','refresh');
			}
			else{
				$this->session->set_flashdata('notif', 'Password anda salah!');
				redirect('login','refresh');
			}
		}
		elseif ($querySiswa->num_rows() > 0) {
			$password_decDb = $this->encryption->decrypt($resultSiswa->password);
			if ($password_decDb == $password) {
				$array = array(
					'username' 	=>	$resultSiswa->nis,
					'level'		=>  'siswa',
					'nama' 		=>	$resultSiswa->nama
					);				
				$this->session->set_userdata( $array );
				redirect('beranda','refresh');
			}
			else{
				$this->session->set_flashdata('notif', 'Password anda salah!');
				redirect('login','refresh');
			}
		}
		else{
			$this->session->set_flashdata('notif', 'Username atau ID anda Salah!');
			redirect('login','refresh');
		}
	}		

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */