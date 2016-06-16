<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parpol extends CI_Controller {

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
			if ($this->session->userdata('tipeuser') != "parpol")
			{
				$this->session->sess_destroy();
				redirect('login');
			}
		}

		$this->load->library('email');
		$this->load->model('kriteria_model');
		$this->load->model('bobot_model');
		$this->load->model('bakal_calon_model');

		$this->load->library('form_validation');	
		$this->data['judulhalaman'] = 'Parpol';	
	
	}
	

	public function index()
	{
		$data['kriteria'] = $this->kriteria_model->get_all();
		$data['bobot'] = $this->bobot_model->get_all();
		$data['bakal_calon'] = $this->bakal_calon_model->get_data_all($this->session->userdata('id'));		
		if($data['kriteria'] != null || $data['bakal_calon'] !=null)
		{			
			for ($i=0; $i <=max(array_keys($data['bakal_calon'])) ; $i++) 
			{ 
				$data['jumlah_pemilih'][$i]	= $this->bakal_calon_model->jumlah_pemilih($data['bakal_calon'][$i]->id_bakal_calon);			
			}	
		}
		

		$this->load->view("m_p/header");
		$this->load->view("m_p/Parpol",$data);
		$this->load->view("m_p/footer");
	}

	public function isi_data_balon()
	{		
		$data['no_ktp'] = $this->input->post('no_ktp');
		$data['nama'] = $this->input->post('nama_bakal_calon');
		$data['jk'] = $this->input->post('jk');
		$data['email'] = $this->input->post('email');
		$data['no_hp'] = $this->input->post('no_hp');		
		$data['id_parpol'] = $this->session->userdata('id');

		$kriteria = $this->kriteria_model->get_all();
		if($kriteria != null)
		{
			for ($i=0; $i <=max(array_keys($kriteria)) ; $i++) 
			{ 
				$data['kriteria'.$kriteria[$i]->id_kriteria] = $this->input->post('kriteria'.$kriteria[$i]->id_kriteria);	
			}		
			
			$this->bakal_calon_model->insert($data);				
			$bakal_calon = $this->bakal_calon_model->get_data_all($this->session->userdata('id'));		
			$this->update_bobot();
			redirect('parpol');	
		}
		
	}

	public function delete($id_bakal_calon = null)
	{
		$this->bakal_calon_model->delete($id_bakal_calon);
		redirect('parpol');
	}

	public function update_bobot()
	{
		$bakal_calon = $this->bakal_calon_model->get_data_all($this->session->userdata('id'));
		$kriteria = $this->kriteria_model->get_all();
		if ($bakal_calon!=null || $kriteria !=null) {
			for ($i=0; $i <=max(array_keys($bakal_calon)) ; $i++) 
			{ 
				for ($j=0; $j <=max(array_keys($kriteria)) ; $j++) 
				{ 
					$index = "kriteria".$kriteria[$j]->id_kriteria;
					$pembilang = $bakal_calon[$i]->$index;
					$max=$bakal_calon[$i]->$index;

					for ($k=0; $k<=max(array_keys($bakal_calon)) ; $k++) 
					{ 
						if($max<$bakal_calon[$k]->$index)
						{
							$max = $bakal_calon[$k]->$index;
						}
					}
					$normalisasi_R[$i][$j] = $pembilang/$max;
				}
			}						
		}
		//var_dump($normalisasi_R[0][14]);	


		//Ranking		
		$bobot_vector = $this->kriteria_model->get_all();
		if($bobot_vector != null && $bakal_calon != null)
		{
			for ($i=0; $i <=max(array_keys($bakal_calon)) ; $i++) 
			{ 		
				$hasil = 0;		
				for ($l=0; $l <=max(array_keys($bobot_vector)) ; $l++) 
				{ 
					$hasil = $hasil + $normalisasi_R[$i][$l+1]*$bobot_vector[$l]->bobot;
				}
				$v[$bakal_calon[$i]->id_bakal_calon] = $hasil;
				$data['bobot'] = $hasil;
				$this->bakal_calon_model->edit($bakal_calon[$i]->id_bakal_calon,$data);
			}				
		}
		
		redirect('parpol');
	}

	public function kirim_email()
	{
		
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$pesan = $this->input->post('pesan');

		$this->email->from($email, $nama);
		$this->email->to('agirindra@yahoo.co.id');
		
		$this->email->subject('Pesan');
		$this->email->message($pesan);

		$result = $this->email->send();		
		
		redirect('parpol');

	}




	
}