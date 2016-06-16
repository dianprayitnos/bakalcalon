<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masyarakat extends CI_Controller {
	
	private $data = array();

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

		$this->load->model('masyarakat_model');
		$this->data['judulhalaman'] = 'Masyarakat';		
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_Masyarakat'] = $this->masyarakat_model->get_all('Masyarakat');							
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Masyarakat/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['Masyarakat'] = $this->masyarakat_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Masyarakat/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_Masyarakat'] = $this->pengguna_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Masyarakat/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[pengguna.username]');
		$this->form_validation->set_message('is_unique', "Username yang dimasukkan sudah terdaftar.<br>Username harus unik dan tidak boleh sama.");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $this->data);
			$this->load->view('konsulen/tambah', $this->data);
			$this->load->view('footer');
		}
		else
		{
			$data['username'] 		= $this->input->post('username');
			$data['password'] 		= md5($this->input->post('password'));
			$data['nama']     		= $this->input->post('nama');
			$data['nip']     		= $this->input->post('nip');
			$data['tempat_lahir']   = $this->input->post('tempat_lahir');
			$data['tanggal_lahir']  = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
			$data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
			$data['divisi']     	= $this->input->post('divisi');
			$data['jabatan']     	= $this->input->post('jabatan');
			$data['alamat']     	= $this->input->post('alamat');						
			$data['email']          = $this->input->post('email');
			$data['no_hp']          = $this->input->post('no_hp');
			$data['tipeuser']     	= 'Masyarakat';

			$result = $this->pengguna_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('pengguna/Masyarakat/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['Masyarakat'] = $this->masyarakat_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Masyarakat/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{		
		$data['no_ktp']     	= $this->input->post('no_ktp');
		$data['nama']     		= $this->input->post('nama');
		$data['status']     	= $this->input->post('status');
		

		$result = $this->masyarakat_model->edit($id, $data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengguna/Masyarakat/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));

		$result = $this->masyarakat_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/Masyarakat/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['Masyarakat'] = $this->masyarakat_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('Masyarakat/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->masyarakat_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengguna/Masyarakat');
	}
}
