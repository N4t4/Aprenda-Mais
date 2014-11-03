<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$css = array(
			'bootstrap.css', 
			'estilo.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$parametros = array(
			'class' => 'home',
			'links' => $css
		);
		
		$this->load->view('layout/header', $parametros);
		$this->load->view('page/topo');
		$this->load->view('page/cabecario');
		$this->load->view('page/home');
		$this->load->view('layout/footer');
	}
}