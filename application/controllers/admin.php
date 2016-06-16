<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
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
		$this->load->model('parpol_model');
		$this->load->model('kriteria_model');
		$this->load->model('kuisioner_model');

		

		$this->data['judulhalaman'] = 'Administrator';
	}

	public function index()
	{
		redirect('admin/dashboard');
	}
	public function dashboard()
	{
		$this->data['judulhalaman'] = 'Dashboard';
		$this->data['jumlah_masyarakat'] = $this->masyarakat_model->get_jumlah_masyarakat();
		$this->data['jumlah_parpol'] = $this->parpol_model->get_jumlah_parpol();
		$this->data['jumlah_kriteria'] = $this->kriteria_model->get_jumlah_kriteria();
		$this->data['jumlah_kuisioner'] = $this->kuisioner_model->get_jumlah_kuisioner();
 			

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('dashboard/dashboard', $this->data);
		$this->load->view('footer');
	}
	
	public function daftar()
	{
		$this->data['list_admin'] = $this->pengguna_model->get_admin('administrator');		
		//$this->data['list_admin'] = $this->pengguna_model->get_all();				
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['admin'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_admin'] = $this->pengguna_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/tambah', $this->data);
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
			$data['tipeuser']     	= 'admin';

			$result = $this->pengguna_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('pengguna/admin/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['admin'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{		
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
		$data['tipeuser']     	= 'admin';

		$result = $this->pengguna_model->edit($id, $data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengguna/admin/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['password'] = md5($this->input->post('password'));

		$result = $this->pengguna_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/admin/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['admin'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->pengguna_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengguna/admin');
	}
}
