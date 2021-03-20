<?php 
/**
  * 
  */
 class Variabel extends CI_Controller
 {
 	
 	public function index ()
 	{
 		$data = ['Variabel1'=>'Data ke Variabel1'=>'Data variabel ke 2'];
 		$this->load->view('variabelview', $data);
 	}
 } ?>