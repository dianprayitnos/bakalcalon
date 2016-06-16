<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bobot extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}
		else
		{
			if ($this->session->userdata('tipeuser') != "admin")
			{
				$this->session->sess_destroy();
				redirect('login');
			}
		}

		$this->load->library('form_validation');

		$this->load->model('Bobot_model');
		$this->load->model('bobot_model');
		$this->data['judulhalaman'] = 'Bobot';	
	}

	public function index()
	{
		$this->daftar();
	}
	

	public function lihat($id = NULL)
	{
		$this->data['Bobot'] = $this->Bobot_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Bobot/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah($id_kriteria = null)
	{
		$this->data['id_kriteria'] = $id_kriteria;
		$this->data['list_Bobot'] = $this->Bobot_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Bobot/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{	
		$data['id_kriteria'] = $this->input->post('id_kriteria'); 	
		$data['nama_Bobot']	= $this->input->post('nama_Bobot');
		$data['bobot']	= $this->input->post('Bobot');
		$result = $this->Bobot_model->insert($data);

		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('Bobot/tambah/'.$data["id_kriteria"].'');
		
	}

	public function ubah($id = NULL)
	{
		$this->data['Bobot'] = $this->Bobot_model->get_data($id);
		$this->data['id'] = $id;

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Bobot/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{				
		$data['nama_bobot']  = $this->input->post('nama_Bobot');
		$data['bobot']     	 = $this->input->post('bobot');		
		
		$result = $this->Bobot_model->edit($id, $data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('Bobot/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));

		$result = $this->Bobot_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/Bobot/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['Bobot'] = $this->Bobot_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Bobot/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->Bobot_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('Kriteria');
	}

}