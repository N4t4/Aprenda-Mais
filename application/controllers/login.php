<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('senha', 'Senha', 'required');
		$this->form_validation->set_rules('login', 'Login', 'required');

		if ($this->form_validation->run() == FALSE) {
			
			$css = array(
				'bootstrap.css', 
				'estilo.css',
				'font-awesome-4.2.0/css/font-awesome.min.css'
			);

			$parametros = array(
				'class' => "login",
				'links' => $css,
				'title' => "Login Alunos"
			);

			$this->load->view('layout/header', $parametros);
			$this->load->view('login');
			$this->load->view('layout/footer');

		} else {
			
			$this->load->model("aluno_model", "Aluno");
			$this->Aluno->senha = $this->input->post('senha');
			$aluno = $this->Aluno->get();
			
			if($aluno){
				redirect('index.php/page');
			}
			else {
				$parametros = array(
					'class' => "login",
					'erros' => "Usuario não encontrado"
				);
				
				$this->load->view('layout/header', $parametros);
				$this->load->view('login', $parametros);
				$this->load->view('layout/footer');
			}
		}
	}

	public function ap_admin()
	{

		$this->load->helper("form");
		$this->load->library("form_validation");

		$this->form_validation->set_rules('senha', 'Senha', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required');

		if ($this->form_validation->run() == FALSE) {
			
			$css = array(
				'bootstrap.css', 
				'estilo.css',
				'font-awesome-4.2.0/css/font-awesome.min.css'
			);

			$parametros = array( 
				'class' => "login-adm",
				'links' => $css,
				'title' => "Login Professores"
			);
			
			$this->load->view('layout/header', $parametros);
			$this->load->view('login-adm');
			$this->load->view('layout/footer');
		} else {
			
			$this->load->model("professor_model", "Aluno");
			$this->Aluno->senha = $this->input->post('senha');
			$this->Aluno->email = $this->input->post('email');
			
			$professor = $this->Aluno->get();

			if($professor){

				$this->load->model('Professor_Model', "Professor_logado");

				$this->Professor_logado->codigo = 1;
				$this->load->library('session');
					
				$newdata = array(
		           'professor' => $this->Professor_logado->get(),
		           'logged_in' => TRUE
		       	);

				$this->session->set_userdata($newdata);

				redirect('index.php/adm');
			}
			else {
				$css = array(
					'bootstrap.css', 
					'estilo.css',
					'font-awesome-4.2.0/css/font-awesome.min.css'
				);

				$parametros = array(
					'class' => "login-adm",
					'erros' => "Usuario não encontrado",
					'links' => $css
				);
				
				$this->load->view('layout/header', $parametros);
				$this->load->view('login', $parametros);
				$this->load->view('layout/footer');
			}
		}
	}

}

