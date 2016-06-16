<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masyarakat extends CI_Controller {

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
			if ($this->session->userdata('tipeuser') != "masyarakat")
			{
				$this->session->sess_destroy();
				redirect('login');
			}
		}

		$this->load->model('kriteria_model');
		$this->load->model('penilaian_model');
		$this->load->model('bakal_calon_model');
		$this->load->model('parpol_model');
		$this->load->model('bobot_model');
		$this->load->model('kuisioner_model');

		$this->load->library('form_validation');	
		$this->data['judulhalaman'] = 'Masyarakat';	
	}

	public function index()
	{

		$data['kriteria'] = $this->kriteria_model->get_all();
		$data['bobot'] = $this->bobot_model->get_all();
		$data['jumlah_kuisioner'] = $this->kuisioner_model->get_data_by_idmasyarakat($this->session->userdata('id'));

		$kuisioner = $this->kuisioner_model->get_data($this->session->userdata('id'));
		$bakal_calon = $this->bakal_calon_model->get_all();

		if($bakal_calon != null && $kuisioner !=null)
		{
			for ($i=0; $i <= max(array_keys($bakal_calon)) ; $i++) 
			{ 
				$iterasi = 0;
				$min = 1;		

				if($bakal_calon[$i]->bobot - $kuisioner->bobot >= 0 )
				{						
						if($min >= $bakal_calon[$i]->bobot - $kuisioner->bobot)
						{							
							$min = $bakal_calon[$i]->bobot - $kuisioner->bobot;	
							$index_bakal_calon = $i;																											
						}	
				}		

			}	
		

			$parpol = $bakal_calon[$index_bakal_calon]->id_parpol;

			$parpol = $this->parpol_model->get_data($parpol);
			$data['nama_parpol'] = $parpol->nama_parpol;
			$data['nama_calon'] = $bakal_calon[$index_bakal_calon]->nama;
			
			$index_tersesuai = 0;
			$bobot = $this->bobot_model->get_all();
			$kriteria = $this->kriteria_model->get_all();
			if($kriteria != null && $kriteria!= null)
			{
				for ($i=0; $i <= max(array_keys($kriteria)) ; $i++) 
				{ 
					for ($j=0; $j <=max(array_keys($bobot)) ; $j++) 
					{ 
						if($kriteria[$i]->id_kriteria == $bobot[$j]->id_kriteria)
						{
							$nama_kriteria = 'kriteria'.$kriteria[$i]->id_kriteria;
							if($bakal_calon[$index_bakal_calon]->$nama_kriteria == $bobot[$j]->bobot)
							{
								$tersesuai[$index_tersesuai] = $bobot[$j]->nama_bobot;
								$index_tersesuai++;
							}

						}
					}
				}
			}	
			$data['tersesuai'] = $tersesuai;
		}	

		

		$this->load->view("m_p/header");
		$this->load->view("m_p/masyarakat",$data);
		$this->load->view("m_p/footer");
	}

	public function isi_kuisioner()
	{			
		$data['id_masyarakat'] = $this->session->userdata('id');
		$kriteria = $this->kriteria_model->get_all();
		
		if($kriteria != null)
		{
			for ($i=0; $i <=max(array_keys($kriteria)) ; $i++) 
			{ 
				$data['kriteria'.$kriteria[$i]->id_kriteria] = $this->input->post('kriteria'.$kriteria[$i]->id_kriteria);	
			}		
		}			
		
		$total = 0;
		for ($i=0; $i<=max(array_keys($kriteria)) ; $i++) 
		{ 
			$total = $total + $data['kriteria'.$kriteria[$i]->id_kriteria] * $kriteria[$i]->bobot;
		}
		$data['bobot'] = $total;
		$this->kuisioner_model->insert($data);				
		$this->penilaian();
	}

	public function penilaian()
	{
		$kuisioner = $this->kuisioner_model->get_data($this->session->userdata('id'));
		
		$parpol = $this->parpol_model->get_all();
		for ($i=0; $i <=max(array_keys($parpol)) ; $i++) 
		{ 
			$bakal_calon = $this->bakal_calon_model->get_data_all($parpol[$i]->id_parpol);
			if($bakal_calon != null)		
			{					
				$iterasi = 0;
				$min = 1;				
				for ($j=0; $j <=max(array_keys($bakal_calon)) ; $j++) 
				{ 
					if($bakal_calon[$j]->bobot - $kuisioner->bobot >= 0 )
					{						
						if($min >= $bakal_calon[$j]->bobot - $kuisioner->bobot)
						{
							if($min == $bakal_calon[$j]->bobot - $kuisioner->bobot)
							{																	
								$iterasi++;
								$index_parpol[$iterasi] = $bakal_calon[$j]->id_bakal_calon;
							}
							else
							{
								$index_parpol = null;
								$min = $bakal_calon[$j]->bobot - $kuisioner->bobot;	
								$index_parpol[$iterasi] = $bakal_calon[$j]->id_bakal_calon;
							}												
						}	
					}																			
				}
				
				if($index_parpol != null)
				{
					for ($l=0; $l <= max(array_keys($index_parpol)) ; $l++) 
					{ 
						$data['id_kuisioner'] = $kuisioner->id_kuisioner;
						$data['id_bakal_calon'] = $index_parpol[$l];
						$this->penilaian_model->insert($data);			
					}	
				}										
			}			
			
		}
		redirect('masyarakat');

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

		$this->email->send();
		redirect('masyarakat');

	}
			
}