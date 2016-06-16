<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kriteria extends CI_Controller {

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

		$this->load->model('kriteria_model');
		$this->load->model('bobot_model');
		$this->data['judulhalaman'] = 'Kriteria';	
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_Kriteria'] = $this->kriteria_model->get_all();
		$this->data['list_bobot']	=  $this->bobot_model->get_all();						
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Kriteria/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['Kriteria'] = $this->Kriteria_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Kriteria/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_Kriteria'] = $this->kriteria_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Kriteria/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{	
		var_dump($this->input->post('kategori_kriteria'));
		$data['kategori_kriteria']  = $this->input->post('kategori_kriteria');		
		$data['kuisioner_parpol']     		= $this->input->post('kuisioner_parpol');		
		$data['kuisioner_masyarakat']  = $this->input->post('kuisioner_masyarakat');
		$data['bobot']     		= $this->input->post('bobot');		
		
		$result = $this->kriteria_model->insert($data);

		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		$result = $this->kriteria_model->get_last_kriteria();

		redirect('Kriteria/tambah');		
	}

	public function ubah($id = NULL)
	{
		$this->data['Kriteria'] = $this->kriteria_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Kriteria/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{				
		$data['kategori_kriteria']  = $this->input->post('kategori_kriteria');
		$data['kuisioner_parpol']     		= $this->input->post('kuisioner_parpol');		
		$data['kuisioner_masyarakat']  = $this->input->post('kuisioner_masyarakat');
		$data['bobot']     		= $this->input->post('bobot');		
		

		$result = $this->kriteria_model->edit($id, $data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('Kriteria/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));

		$result = $this->Kriteria_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/Kriteria/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['Kriteria'] = $this->kriteria_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Kriteria/hapus', $this->data);
		$this->load->view('footer');

		
	}

	public function delete($id = NULL)
	{
		$result = $this->kriteria_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('Kriteria');
	}

}