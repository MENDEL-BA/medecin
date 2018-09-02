<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 
	public function index()
	{
		$this->load->view('medecin/Add');
		$this->load->view('medecin/Edit');
		$this->load->view('medecin/Liste');
	}
}
