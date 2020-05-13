<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {


	public function index(){

		$this->dados['titulo'] = "Blank Pattern";

		$this->load->view('includes/header');
		$this->load->view('perfil/perfil', $this->dados);
		$this->load->view('includes/footer');
		
	}

}
