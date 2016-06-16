<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model('Masyarakat_model');	
		$this->load->model('parpol_model');	
		$this->load->library('form_validation');

	}

	public function masyarakat()
	{		
		$data['no_ktp'] = $this->input->post('no_ktp');
		$data['username'] = $this->input->post('username');
		$data['nama'] = $this->input->post('nama');
		$data['jk'] = $this->input->post('jk');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
		$data['pekerjaan'] = $this->input->post('pekerjaan');
		$data['alamat'] = $this->input->post('alamat');
		$data['email'] = $this->input->post('email');
		$data['no_hp'] = $this->input->post('no_hp');
		$data['password'] = md5($this->input->post('password'));
		
		$this->Masyarakat_model->insert($data);
		redirect('login');			
	}

	public function edit_masyarakat()
	{
		$data['no_ktp'] = $this->input->post('no_ktp');
		$data['username'] = $this->input->post('username');
		$data['nama'] = $this->input->post('nama');
		$data['jk'] = $this->input->post('jk');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
		$data['pekerjaan'] = $this->input->post('pekerjaan');
		$data['alamat'] = $this->input->post('alamat');
		$data['email'] = $this->input->post('email');
		$data['no_hp'] = $this->input->post('no_hp');		
				
		$this->Masyarakat_model->edit($this->session->userdata('id'),$data);
		redirect('login');			
	}

	public function edit_parpol()
	{
		$data['nama_parpol'] = $this->input->post('nama_parpol');
		$data['no_tlp'] = $this->input->post('no_tlp_parpol');
		$data['alamat'] = $this->input->post('alamat_parpol');
		$data['email'] = $this->input->post('email_parpol');
		$data['keterangan'] = $this->input->post('keterangan_parpol');	
		$data['username'] = $this->input->post('username_parpol');				
					
		$this->parpol_model->edit($this->session->userdata('id'), $data);
		redirect('login');			
	}

	public function parpol()
	{
		$data['nama_parpol'] = $this->input->post('nama_parpol');
		$data['no_tlp'] = $this->input->post('no_tlp_parpol');
		$data['alamat'] = $this->input->post('alamat_parpol');
		$data['email'] = $this->input->post('email_parpol');
		$data['keterangan'] = $this->input->post('keterangan_parpol');	
		$data['username'] = $this->input->post('username_parpol');		
		$data['password'] = md5($this->input->post('password2'));		
					
		$this->parpol_model->insert($data);
		redirect('login');			
	}


}