<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index(){

		$this->dados['titulo'] = "Dashboard";

		$this->load->view('includes/header');
		$this->load->view('dashboard/dashboard', $this->dados);
		$this->load->view('includes/footer');
	}


}
