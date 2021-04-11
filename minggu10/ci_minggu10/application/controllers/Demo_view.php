<?php 
/**
  * 
  */
 class Demoview extends CI_Controller
 {
 	
 	public function index()
 	{
 		$this->load->view('headview');
 		$this->load->view('contentview');
 		$this->load->view('footerview');
 	}
 } ?>