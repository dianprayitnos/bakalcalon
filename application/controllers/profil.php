<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
	
	private $data = array();
	private $id;

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->load->model('admin_model');				
		$this->data['judulhalaman'] = 'Profil';

		$this->id = $this->session->userdata('id');
	}

	public function index()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);			
		$this->data['admin'] = $this->admin_model->get_data($this->id);
		$this->load->view('profil/profil_admin', $this->data);		
		$this->load->view('footer');
	}

	public function edit()
	{
		$id = $this->input->post('id_admin');
		$data['no_ktp'] = $this->input->post('no_ktp');
		$data['nama']   = $this->input->post('nama');
		$data['ket']    = $this->input->post('keterangan');

		$result = $this->admin_model->edit($id,$data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('profil');
	}
	
}
