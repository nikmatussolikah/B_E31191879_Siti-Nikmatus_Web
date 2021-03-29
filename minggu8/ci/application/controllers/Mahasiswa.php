<?php 
defined("BASEPATH") OR exit('No direct script access allowed');

 class Mahasiswa extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
		$this->load->model('Mahasiswa_model');
 	}
	/*public function index()
	 {
	 	$data['nama'] = "Kim Jefry";
	 	$data['prodi'] = "MIF";
	 	$this->load->view('view_mahasiswa',$data);
	 }*/
 	/*public function index(){
			$data['Mahasiswa'] = [
				["nama"=>"Kim Jefry","prodi"=>"MIF"],
				["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
				["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
			];
			$this->load->view('view_mahasiswa', $data);
		}*/
	public function index()
	{
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('view_mahasiswa', $data);
	}
		/*public function soal_a(){
			$data['Prodi'] = $this->Mahasiswa_model->get_prodi();
			$this->load->view('view_prodi',$data);
		}
		public function soal_b(){
			$data['Angkatan'] = $this->Mahasiswa_model->get_angkatan();
			$this->load->view('view_angkatan',$data);
		}*/

		public function soal(){
			$data['soal_a'] =
			$this->Mahasiswa_model->get_prodi();

			$data['soal_b'] =
			$this->Mahasiswa_model->get_angkatan();

			$this->load->view('view_prodi',$data);
			$this->load->view('view_angkatan',$data);

		}
 	public function profil()
 	{
 		echo "ini adalah method profil pada controller Mahasiswa";
 	}
 } 
 ?>