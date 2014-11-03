<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm extends AP_Controller {

	public function index()
	{
		$this->aluno();
	}

	public function aluno()
	{
		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Aluno_Model", "Aluno");
		$alunos = $this->Aluno->getAll();

		$data = array(
			'class'  	=> "login-adm",
			'links'  	=> $css,
			'alunos' 	=> $alunos,
			'adm_professor' => $this->adm_professor
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('adm/aluno/listar');
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/aluno/scripts');
	}

	public function professor()
	{
		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Professor_Model", "Professor");
		$professores = $this->Professor->getAll();

		$data = array(
			'class'  	  	=> "login-adm",
			'links'  	  	=> $css,
			'professores' 	=> $professores,
			'adm_professor' => $this->adm_professor
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('adm/professor/listar', $data);
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/professor/scripts');
	}

	public function disciplina()
	{
		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Disciplina_Model", "Disciplina");
		$disciplinas = $this->Disciplina->getAll();

		$data = array(
			'class'  	  => "login-adm",
			'links'  	  => $css,
			'disciplinas' => $disciplinas,
			'adm_professor' => $this->adm_professor
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('adm/disciplina/listar');
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/disciplina/scripts');
	}

	public function aula()
	{
		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Aula_Model", "Aula");
		$aulas = $this->Aula->getAll();

		$data = array(
			'class' => "login-adm",
			'links' => $css,
			'aulas' => $aulas,
			'adm_professor' => $this->adm_professor
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('adm/aula/listar');
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/aula/scripts');
	}

	public function sobre()
	{
		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$data = array(
			'class' => "login-adm",
			'links' => $css,
			'sobre' => true,
			'adm_professor' => $this->adm_professor
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('about');
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/aula/scripts');
	}
	
	public function pesquisar_aluno($pesquisa = "")
	{
		if($pesquisa == ""){
			if($this->input->post("pesquisa"))
				redirect(site_url("index.php/adm/pesquisar_aluno/".$this->input->post("pesquisa")));
			else
				$this->aluno();
			return;
		}

		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Aluno_Model", "AlunoPesquisa");
		$alunos = $this->AlunoPesquisa->like($pesquisa);

		$data = array(
			'class'  	=> "login-adm",
			'links'  	=> $css,
			'alunos' 	=> $alunos,
			'adm_professor' => $this->adm_professor,
			'pesquisa' => $pesquisa
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('adm/aluno/listar');
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/aluno/scripts');
	}

	public function pesquisar_professor($pesquisa = "")
	{
		if($pesquisa == ""){
			if($this->input->post("pesquisa"))
				redirect(site_url("index.php/adm/pesquisar_professor/".$this->input->post("pesquisa")));
			else
				$this->professor();
			return;
		}

		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Professor_Model", "ProfessorPesquisa");
		$professores = $this->ProfessorPesquisa->like($pesquisa);

		$data = array(
			'class'  	  	=> "login-adm",
			'links'  	  	=> $css,
			'professores' 	=> $professores,
			'adm_professor' => $this->adm_professor,
			'pesquisa'      => $pesquisa
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('adm/professor/listar', $data);
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/professor/scripts');
	}

	public function pesquisar_disciplina($pesquisa = "")
	{
		if($pesquisa == ""){
			if($this->input->post("pesquisa"))
				redirect(site_url("index.php/adm/pesquisar_disciplina/".$this->input->post("pesquisa")));
			else
				$this->professor();
			return;
		}

		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Disciplina_Model", "DisciplinaPesquisa");
		$disciplinas = $this->DisciplinaPesquisa->like($pesquisa);

		$data = array(
			'class'  	  => "login-adm",
			'links'  	  => $css,
			'disciplinas' => $disciplinas,
			'adm_professor' => $this->adm_professor,
			'pesquisa'    => $pesquisa
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/cabecario', $data);
		$this->load->view('adm/menu', $data);
		$this->load->view('adm/disciplina/listar');
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/disciplina/scripts');
	}

	public function cadastrar_aluno()
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('aluno_nome', 'Nome', 'required');
		$this->form_validation->set_rules('aluno_login', 'Login', 'required');
		$this->form_validation->set_rules('aluno_senha', 'Senha', 'required');


		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('adm/aluno/formulario');

		} else {

			$this->load->model("Aluno_Model", "Novo_Aluno");

			$this->Novo_Aluno->nome  = $this->input->post('aluno_nome');
			$this->Novo_Aluno->login = $this->input->post('aluno_login');
			$this->Novo_Aluno->senha = $this->input->post('aluno_senha');
			$this->Novo_Aluno->codigo_professor = $this->adm_professor->codigo;

			$this->Novo_Aluno->Insert();

			echo "ok";
		}		
	}

	public function cadastrar_professor()
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('professor_nome', 'Nome', 'required');
		$this->form_validation->set_rules('professor_email', 'E-mail', 'required');
		$this->form_validation->set_rules('professor_senha', 'Senha', 'required');

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('adm/professor/formulario');

		} else {
			
			$this->load->model("Professor_Model", "Novo_Professor");

			$this->Novo_Professor->nome  = $this->input->post('professor_nome');
			$this->Novo_Professor->email = $this->input->post('professor_email');
			$this->Novo_Professor->senha = $this->input->post('professor_senha');
			
			$this->Novo_Professor->Insert();

			echo "ok";
		}	
	}

	public function cadastrar_disciplina()
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('disciplina_nome', 'Nome', 'required');
		$this->form_validation->set_rules('disciplina_descricao', 'Descrição', 'required');


		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('adm/disciplina/formulario');

		} else {
			$this->load->model("Disciplina_Model", "Nova_Disciplina");

			$this->Nova_Disciplina->nome  = $this->input->post('disciplina_nome');
			$this->Nova_Disciplina->descricao = $this->input->post('disciplina_descricao');
			
			$this->Nova_Disciplina->Insert();

			echo "ok";
		}	
	}

	public function cadastrar_aula()
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('aula_titulo', 'Título', 'required');
		$this->form_validation->set_rules('aula_descricao', 'Descrição', 'required');
		$this->form_validation->set_rules('aula_disciplina', 'Disciplina', 'required');


		if ($this->form_validation->run() == FALSE) {
			
			$this->load->model("Disciplina_Model", "Disciplina");
			$disciplinas = $this->Disciplina->getAll();
			$data = array('disciplinas' => $disciplinas);
			$this->load->view('adm/aula/formulario', $data);

		} else {
			$this->load->model("Aula_Model", "Nova_Aula");

			$this->Nova_Aula->titulo    		= $this->input->post('aula_titulo');
			$this->Nova_Aula->descricao 		= $this->input->post('aula_descricao');
			$this->Nova_Aula->data 		        = date("Ymd");
			$this->Nova_Aula->codigo_disciplina = $this->input->post('aula_disciplina');
			$this->Nova_Aula->codigo_professor  = $this->adm_professor->codigo;
			
			$this->Nova_Aula->Insert();

			echo "ok";
		}	
	}

	public function editar_aluno($codigo)
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('aluno_nome', 'Nome', 'required');
		$this->form_validation->set_rules('aluno_login', 'Login', 'required');
		$this->form_validation->set_rules('aluno_senha', 'Senha', 'required');

		$this->load->model("Aluno_Model", "Aluno_Editar");
		$this->Aluno_Editar->codigo = $codigo;
		$aluno = $this->Aluno_Editar->get();

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('adm/aluno/formulario', array('aluno' => $aluno));

		} else {

			$this->Aluno_Editar->codigo = $aluno->codigo;
			$this->Aluno_Editar->nome   = $this->input->post('aluno_nome');
			$this->Aluno_Editar->login  = $this->input->post('aluno_login');
			$this->Aluno_Editar->senha  = $this->input->post('aluno_senha');

			$this->Aluno_Editar->update();

			echo "ok";
		}		
	}

	public function editar_professor($codigo)
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('professor_nome', 'Nome', 'required');
		$this->form_validation->set_rules('professor_email', 'E-mail', 'required');
		$this->form_validation->set_rules('professor_senha', 'Senha', 'required');

		$this->load->model("Professor_Model", "Professor_Editar");
		$this->Professor_Editar->codigo = $codigo;
		$professor = $this->Professor_Editar->get();

		if ($this->form_validation->run() == FALSE) {
		
			$this->load->view('adm/professor/formulario', array('professor' => $professor));

		} else {

			$this->Professor_Editar->codigo = $professor->codigo;
			$this->Professor_Editar->nome   = $this->input->post('professor_nome');
			$this->Professor_Editar->email  = $this->input->post('professor_email');
			$this->Professor_Editar->senha  = $this->input->post('professor_senha');

			$this->Professor_Editar->update();

			echo "ok";
		}		
	}

	public function editar_disciplina($codigo)
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('disciplina_nome', 'Nome', 'required');
		$this->form_validation->set_rules('disciplina_descricao', 'Descrição', 'required');

		$this->load->model("Disciplina_Model", "Disciplina_Editar");
		$this->Disciplina_Editar->codigo = $codigo;
		$disciplina = $this->Disciplina_Editar->get();

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('adm/disciplina/formulario', array('disciplina' => $disciplina));

		} else {

			$this->Disciplina_Editar->codigo    = $disciplina->codigo; 
			$this->Disciplina_Editar->nome  	  = $this->input->post('disciplina_nome');
			$this->Disciplina_Editar->descricao = $this->input->post('disciplina_descricao');

			$this->Disciplina_Editar->update();

			echo "ok";
		}		
	}

	public function editar_aula($codigo)
	{
		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('aula_titulo', 'Título', 'required');
		$this->form_validation->set_rules('aula_descricao', 'Descrição', 'required');
		$this->form_validation->set_rules('aula_disciplina', 'Disciplina', 'required');

		$this->load->model("Aula_Model", "Aula_Editar");
		$this->Aula_Editar->codigo = $codigo;
		$aula = $this->Aula_Editar->get();

		if ($this->form_validation->run() == FALSE) {
		
			$this->load->model("Disciplina_Model", "Disciplina");
			$disciplinas = $this->Disciplina->getAll();
			$data = array(
				'disciplinas' => $disciplinas,
				'aula' => $aula
				);

			$this->load->view('adm/aula/formulario', $data);

		} else {

			$this->Aula_Editar->codigo 			  = $aula->codigo;
			$this->Aula_Editar->titulo    		  = $this->input->post('aula_titulo');
			$this->Aula_Editar->descricao 		  = $this->input->post('aula_descricao');
			$this->Aula_Editar->codigo_disciplina = $this->input->post('aula_disciplina');
			$this->Aula_Editar->codigo_professor  = $this->adm_professor->codigo;

			$this->Aula_Editar->update();

			echo "ok";
		}		
	}

	public function excluir_aluno($codigo)
	{
		$this->load->model("Aluno_Model", "Aluno_Excluir");
		$this->Aluno_Excluir->codigo = $codigo;
		$this->Aluno_Excluir->delete();

		echo "ok";
	}

	public function excluir_professor($codigo)
	{
		$this->load->model("Professor_Model", "Professor_Excluir");
		$this->Professor_Excluir->codigo = $codigo;
		$this->Professor_Excluir->delete();

		echo "ok";
	}

	public function excluir_disciplina($codigo)
	{
		$this->load->model("Disciplina_Model", "Disciplina_Excluir");
		$this->Disciplina_Excluir->codigo = $codigo;
		$this->Disciplina_Excluir->delete();

		echo "ok";
	}

	public function excluir_aula($codigo)
	{
		$this->load->model("Aula_Model", "Aula_Excluir");
		$this->Aula_Excluir->codigo = $codigo;
		$this->Aula_Excluir->delete();

		echo "ok";	
	}

	public function aula_desenvolver($codigo)
	{
		$css = array(
			'bootstrap.css', 
			'estilo-adm.css',
			'font-awesome-4.2.0/css/font-awesome.min.css'
		);

		$this->load->model("Aula_Model", "Aula_Studio");
		$this->Aula_Studio->codigo = $codigo;
		$aula = $this->Aula_Studio->get();
				
		$data = array(
			'class' => "aula-studio",
			'links' => $css,
			'aula' => $aula,
			'adm_professor' => $this->adm_professor
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('adm/aula/cabecario', $data);
		$this->load->view('adm/aula/estudio', $data);
		$this->load->view('adm/rodape');
		$this->load->view('layout/footer');
		$this->load->view('adm/aula/scripts');		
		$this->load->view('adm/aula/scripts-estudio');		
	}

	public function aula_desenvolver_save($codigo)
	{
		$this->load->model("Aula_Model", "Aula_Editar");
		
		echo $this->input->post('aula_conteudo');
		
		$this->Aula_Editar->codigo 	 = $codigo;
		$this->Aula_Editar->conteudo = $this->input->post('aula_conteudo');

		$this->Aula_Editar->update();

	}



	public function sair()
	{
		$this->session->sess_destroy();		
		
		parent::CheckLoged();
	}
}
