<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index(){

		$this->dados['titulo'] = "Dashboard";

		$this->load->view('includes/header');
		$this->load->view('index', $this->dados);
		$this->load->view('includes/footer');
	}

	public function pattern(){

		$this->dados['titulo'] = "Blank Pattern";

		$this->load->view('includes/header');
		$this->load->view('blank', $this->dados);
		$this->load->view('includes/footer');

	}

}
