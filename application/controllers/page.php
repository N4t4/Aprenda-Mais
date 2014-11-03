<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$css = array(
			'bootstrap.css', 
			'estilo.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Disciplina_Model", "Disciplinas");
		$tabelas = array('aulas' => true);
		$disciplinas = $this->Disciplinas->alljoin($tabelas);

		$this->load->model("Aula_Model", "Aulas");
		$aulas = $this->Aulas->getAll();

		$parametros = array(
			'class' => 'home',
			'disciplinas' => $disciplinas,
			'aulas' => $aulas,
			'links' => $css
		);
		
		$this->load->view('layout/header', $parametros);
		$this->load->view('page/topo');
		$this->load->view('page/cabecario');
		$this->load->view('page/home');
		$this->load->view('layout/footer');
	}

	public function visualizar_aula($codigo)
	{
		$css = array(
			'bootstrap.css', 
			'estilo.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Aula_Model", "Aula");
		$this->Aula->codigo = $codigo;
		$aula = $this->Aula->get();

		$this->load->model("Disciplina_Model", "Disciplina");
		$this->Disciplina->codigo = $aula->codigo_disciplina;
		$tabelas = array('aulas' => true);
		$disciplina = $this->Disciplina->join($tabelas);


		$parametros = array(
			'class' => 'home',
			'disciplinas' => array(0 => $disciplina),
			'aula' => $aula,
			'links' => $css
		);
		
		$this->load->view('layout/header', $parametros);
		$this->load->view('page/topo');
		$this->load->view('page/cabecario');
		$this->load->view('page/visualizar_aula');
		$this->load->view('layout/footer');	
		$this->load->view('page/scripts-visualizar.php');	
	}
}