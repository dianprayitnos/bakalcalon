<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('login_model');	
		$this->load->model('masyarakat_model');	
		$this->load->model('parpol_model');	
		$this->load->model('admin_model');	

	}

	public function index()
	{
		if ( ! $this->session->userdata('login'))
		{
			$this->load->view('login/login_user');
		}
		else
		{
			redirect('admin');
		}
	}
	
	public function authentication()
	{
		$jenis_pengguna = $this->input->post('jenis_pengguna');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password_login');

		var_dump($jenis_pengguna,$username,$password);
		
		if ($jenis_pengguna == 'masyarakat' )
		{
			$cek = $this->login_model->cek_login_masyarakat($username, md5($password));			
		}
		
		else if($jenis_pengguna == 'parpol')
		{								
			$cek = $this->login_model->cek_login_parpol($username, md5($password));
		}
		else
		{
			$cek = $this->login_model->cek_login_admin($username, md5($password));
		}
		if ($cek != null )
		{
			if ($jenis_pengguna == 'masyarakat') {
				$masyarakat = $this->masyarakat_model->get_data($cek->id_masyarakat);
				if($masyarakat->status == 1 )
				{
					$this->session->set_userdata(array(
            		'login' => true,
            		'id' => $masyarakat->id_masyarakat,
            		'username' => $masyarakat->username,
            		'nama' => $masyarakat->nama,
            		'tempat_lahir' => $masyarakat->tempat_lahir,
            		'tgl_lahir' => $masyarakat->tanggal_lahir,
            		'pekerjaan' => $masyarakat->pekerjaan,
            		'alamat' => $masyarakat->alamat,
            		'no_ktp' => $masyarakat->no_ktp,
            		'no_hp' => $masyarakat->no_hp,
            		'nama' => $masyarakat->nama, 
            		'email'=> $masyarakat->email,            		
            		'tipeuser' => 'masyarakat'));            	
            		redirect('masyarakat');
				}
				else
				{
					$this->session->set_flashdata('login', 'Login tidak berhasil.<br>Status Anda Tidak Aktif.');
					redirect('login');
				}            		            		            
            }	
            else if($jenis_pengguna == 'parpol')
            {
            	$parpol = $this->parpol_model->get_data($cek->id_parpol);            	
            	if($parpol->status ==1 )
            	{
            		$this->session->set_userdata(array(
            		'login' => true,
            		'id' => $parpol->id_parpol,
            		'nama_parpol' => $parpol->nama_parpol,
            		'no_tlp' => $parpol->no_tlp,             		            	
            		'email' => $parpol->email,
            		'username' => $parpol->username,
            		'tipeuser' => 'parpol',
            		'alamat' => $parpol->alamat,
            		'keterangan' => $parpol->keterangan,
            		));
            		redirect('parpol');            	            		
            	}
            	else
				{
					$this->session->set_flashdata('login', 'Login tidak berhasil.<br>Status Anda Tidak Aktif.');
					redirect('login');
				}            		            		            
            	
            }
            else
            {
            	$admin = $this->admin_model->get_data($cek->id_admin);

            	$this->session->set_userdata(array(
            		'login' => true,
            		'id' => $admin->id_admin,
            		'no_ktp' => $admin->no_ktp, 
            		'nama' => $admin->nama,
            		'ket' => $admin->ket,
            		'tipeuser' => 'admin'
            		));

            	echo "Admin";

            		redirect('admin/dashboard');
            }
            
		}
		else
		{ 		
			$this->session->set_flashdata('login', 'Login tidak berhasil.<br>Username atau password salah.');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}


